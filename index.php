<?php
// 1. CONFIGURACIÓN DE SESIÓN PERMANENTE
// Nota: Ten cuidado en equipos públicos, ya que la sesión permanecerá abierta.
ini_set('session.cookie_lifetime', 31536000); 
ini_set('session.gc_maxlifetime', 31536000);
session_start();

// 2. CONEXIÓN A LA BASE DE DATOS
$servidor = "mysql.railway.internal";
$usuarioBD = "root";
$passwordBD = "OqOmXxpMpYSJIaDLJkCnvBKRtWAbeyts";
$baseDatos = "railway";

$conn = mysqli_connect($servidor, $usuarioBD, $passwordBD, $baseDatos);
if(!$conn){
    die("Error crítico de conexión a la Base de Datos.");
}

$mensajeAlertaScript = "";
$pedidoGuardado = false;
$ticketData = null; 

// 3. LOGICA A: REGISTRARSE (CORREGIDO: Contraseñas seguras y Consultas Preparadas)
if (isset($_POST['accion_registrar'])) {
    $u = trim($_POST['usuario']);
    $p = trim($_POST['password']);
    $t = trim($_POST['tipoUsuario']);

    if ($u != "" && $p != "" && $t != "") {
        // Verificar si el usuario ya existe para evitar duplicados
        $sqlCheck = "SELECT id_usuario FROM usuarios WHERE nombre = ? LIMIT 1";
        $stmtCheck = mysqli_prepare($conn, $sqlCheck);
        mysqli_stmt_bind_param($stmtCheck, "s", $u);
        mysqli_stmt_execute($stmtCheck);
        mysqli_stmt_store_result($stmtCheck);

        if (mysqli_stmt_num_rows($stmtCheck) > 0) {
            $mensajeAlertaScript = "alert('El nombre de usuario o matrícula ya está registrado.');";
        } else {
            // Encriptar la contraseña con BCRYPT (Estándar actual seguro)
            $passwordEncriptada = password_hash($p, PASSWORD_DEFAULT);

            $sqlReg = "INSERT INTO usuarios (nombre, contraseña, tipo_usuario) VALUES (?, ?, ?)";
            $stmtReg = mysqli_prepare($conn, $sqlReg);
            mysqli_stmt_bind_param($stmtReg, "sss", $u, $passwordEncriptada, $t);

            if (mysqli_stmt_execute($stmtReg)) {
                $_SESSION['usuario_logeado'] = $u;
                $_SESSION['tipo_logeado'] = $t;
                $mensajeAlertaScript = "alert('Sesión creada correctamente'); window.location.href='index.php?ir_al_catalogo=true';";
            } else {
                $mensajeAlertaScript = "alert('Error al registrar el usuario.');";
            }
            mysqli_stmt_close($stmtReg);
        }
        mysqli_stmt_close($stmtCheck);
    } else {
        $mensajeAlertaScript = "alert('Por favor complete todos los campos para registrarse.');";
    }
}

// 4. LOGICA B: INICIAR SESIÓN (CORREGIDO: Verificación segura de Hash)
if (isset($_POST['accion_ingresar'])) {
    $u = trim($_POST['usuario']);
    $p = trim($_POST['password']);
    $t = trim($_POST['tipoUsuario']);

    // Buscamos al usuario solo por su nombre/matrícula y tipo
    $sqlBusqueda = "SELECT contraseña FROM usuarios WHERE nombre = ? AND tipo_usuario = ? LIMIT 1";
    $stmtBusqueda = mysqli_prepare($conn, $sqlBusqueda);
    mysqli_stmt_bind_param($stmtBusqueda, "ss", $u, $t);
    mysqli_stmt_execute($stmtBusqueda);
    $resultadoBusqueda = mysqli_stmt_get_result($stmtBusqueda);

    if ($row = mysqli_fetch_assoc($resultadoBusqueda)) {
        // Validamos la contraseña escrita contra el Hash seguro de la BBDD
        if (password_verify($p, $row['contraseña'])) {
            $_SESSION['usuario_logeado'] = $u;
            $_SESSION['tipo_logeado'] = $t;
            $mensajeAlertaScript = "alert('Inicio de sesión exitoso'); window.location.href='index.php?ir_al_catalogo=true';";
        } else {
            $mensajeAlertaScript = "alert('Error: La contraseña no es correcta.');";
        }
    } else {
        $mensajeAlertaScript = "alert('Error: La matrícula/nombre o tipo de usuario no son correctos.');";
    }
    mysqli_stmt_close($stmtBusqueda);
}

// 5. LOGICA C: PROCESAMIENTO FINAL DEL PEDIDO (CORREGIDO: Sanitización y Consultas Preparadas)
if(isset($_POST['finalizar_pedido_bd'])){
    $usuario = trim($_POST['usuario_hidden']);
    $metodo_pago = trim($_POST['metodo_pago_final']);
    $total_pagar = floatval($_POST['total_hidden']);
    $productos_json = json_decode($_POST['productos_json_hidden'], true);

    if(!empty($productos_json) && $total_pagar > 0) {
        // Obtener ID de usuario con consulta preparada
        $sqlUserID = "SELECT id_usuario FROM usuarios WHERE nombre = ? LIMIT 1";
        $stmtUser = mysqli_prepare($conn, $sqlUserID);
        mysqli_stmt_bind_param($stmtUser, "s", $usuario);
        mysqli_stmt_execute($stmtUser);
        $resUser = mysqli_stmt_get_result($stmtUser);
        $rowUser = mysqli_fetch_assoc($resUser);
        $id_usuario = isset($rowUser['id_usuario']) ? $rowUser['id_usuario'] : 1;
        mysqli_stmt_close($stmtUser);

        // Insertar Pedido
        $sqlPedido = "INSERT INTO pedidos (id_usuario, total, estado) VALUES (?, ?, 'Pagado')";
        $stmtPedido = mysqli_prepare($conn, $sqlPedido);
        mysqli_stmt_bind_param($stmtPedido, "id", $id_usuario, $total_pagar);
        mysqli_query($conn, "SET AUTOCOMMIT=0"); // Iniciar transacción idealmente
        mysqli_stmt_execute($stmtPedido);
        $id_pedido = mysqli_insert_id($conn);
        mysqli_stmt_close($stmtPedido);

        // Insertar detalles y actualizar stock de forma segura
        $sqlDetalle = "INSERT INTO detalle_pedido (id_pedido, id_producto, cantidad, subtotal) VALUES (?, ?, ?, ?)";
        $stmtDetalle = mysqli_prepare($conn, $sqlDetalle);

        $sqlStock = "UPDATE productos SET stock = stock - ? WHERE id_producto = ?";
        $stmtStock = mysqli_prepare($conn, $sqlStock);

        foreach($productos_json as $item) {
            $id_p = $item['id'];
            $cant = intval($item['cant']);
            $sub = floatval($item['sub']);

            mysqli_stmt_bind_param($stmtDetalle, "iiid", $id_pedido, $id_p, $cant, $sub);
            mysqli_stmt_execute($stmtDetalle);

            mysqli_stmt_bind_param($stmtStock, "ii", $cant, $id_p);
            mysqli_stmt_execute($stmtStock);
        }
        mysqli_stmt_close($stmtDetalle);
        mysqli_stmt_close($stmtStock);

        // Insertar Pago
        $sqlPago = "INSERT INTO pagos (id_pedido, metodo_pago, monto) VALUES (?, ?, ?)";
        $stmtPago = mysqli_prepare($conn, $sqlPago);
        mysqli_stmt_bind_param($stmtPago, "isd", $id_pedido, $metodo_pago, $total_pagar);
        mysqli_stmt_execute($stmtPago);
        mysqli_stmt_close($stmtPago);

        mysqli_query($conn, "COMMIT"); // Confirmar cambios en la BD

        $pedidoGuardado = true;
        
        $ticketData = [
            'id_pedido' => $id_pedido,
            'usuario' => $usuario,
            'tipo' => isset($_SESSION['tipo_logeado']) ? $_SESSION['tipo_logeado'] : 'Cliente',
            'metodo' => $metodo_pago,
            'total' => $total_pagar,
            'productos' => $productos_json,
            'fecha' => date("d/m/Y H:i:s")
        ];
    }
}

// 6. CONSULTA DE PRODUCTOS
$queryProductos = "SELECT id_producto, nombre_producto, precio, imagen, IFNULL(stock, 15) as stock FROM productos";
$resultadoProductos = mysqli_query($conn, $queryProductos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafetería Escolar CECYTEM</title>
  <style>
    /* Tu CSS se mantiene exactamente igual */
    *{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
    body{ background: #fdfbf7; color: #333333; padding-bottom: 120px; }
    header{ background: linear-gradient(135deg, #0b5d3b, #074028); color: white; padding: 30px 20px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.15); }
    .logo-titulo{ display: flex; justify-content: center; align-items: center; gap: 15px; margin-bottom: 5px; }
    .logo{ width: 65px; height: 65px; border-radius: 50%; object-fit: cover; background: white; padding: 4px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    header h1{ font-size: 30px; font-weight: 700; }
    header p { font-size: 14px; opacity: 0.9; font-style: italic; }
    .eslogan-destacado { font-weight: 700; letter-spacing: 0.5px; color: #a7f3d0; text-transform: uppercase; font-size: 13px !important; margin-top: 4px; }
    .oculto { display: none !important; }
    .bienvenida{ width: 90%; max-width: 900px; margin: 20px auto; background: white; padding: 25px; border-radius: 12px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border-left: 5px solid #0b5d3b; }
    .bienvenida h2{ color: #0b5d3b; margin-bottom: 8px; font-size: 24px; }
    .bienvenida p { color: #4a5568; font-size: 15px; line-height: 1.5; }
    .wrapper-login-inicial { display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 100vh; background: #f3f4f6; padding: 20px; }
    .bienvenida-login { text-align: center; margin-bottom: 25px; max-width: 420px; }
    .bienvenida-login h2 { color: #0b5d3b; font-size: 28px; font-weight: 700; margin-bottom: 6px; }
    .bienvenida-login p { color: #4a5568; font-size: 15px; font-weight: 500; }
    .bienvenida-login .eslogan-login { color: #0b5d3b; font-weight: bold; font-style: italic; margin-top: 5px; font-size: 14px; }
    .login{ width: 100%; max-width: 420px; background: white; padding: 35px 30px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border-top: 5px solid #0b5d3b; }
    .login h2{ text-align: center; margin-bottom: 20px; color: #0b5d3b; font-size: 22px; font-weight: 600; }
    .login input, .login select{ width: 100%; padding: 12px 15px; margin: 10px 0; border-radius: 8px; border: 1.5px solid #e2e8f0; background-color: #f8fafc; font-size: 15px; }
    .login input:focus, .login select:focus{ outline: none; border-color: #0b5d3b; box-shadow: 0 0 0 3px rgba(11, 93, 59, 0.15); }
    .login button{ width: 100%; padding: 12px; color: white; border: none; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; margin-top: 8px; }
    .btn-verde { background: #0b5d3b; }
    .btn-verde:hover { background: #086e44; }
    .btn-gris { background: #718096; }
    .btn-gris:hover { background: #4a5568; }
    .mensaje-lindo-contenedor { background: #e6f4ea; border: 1px solid #cbd5e1; padding: 12px; border-radius: 8px; color: #137333; text-align: center; font-weight: 600; margin-bottom: 15px; }
    .productos{ width: 90%; max-width: 1200px; margin: 30px auto; }
    .productos h2{ text-align: center; margin-bottom: 30px; color: #0b5d3b; font-size: 28px; }
    .contenedor{ display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px; }
    .card{ background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.04); display: flex; flex-direction: column; border: 1px solid #f0edf8; }
    .card img{ width: 100%; height: 180px; object-fit: cover; }
    .card h3{ text-align: center; margin: 15px 10px 5px 10px; color: #2d3748; font-size: 18px; }
    .card p{ text-align: center; color: #0b5d3b; margin-bottom: 12px; font-size: 19px; font-weight: 700; }
    .control-eleccion { display: flex; justify-content: center; align-items: center; gap: 8px; margin-bottom: 12px; }
    .control-eleccion input { width: 60px; text-align: center; padding: 4px; }
    .card button{ display: block; width: 85%; margin: 0 auto 20px auto; padding: 11px; border: none; background: #0b5d3b; color: white; border-radius: 8px; cursor: pointer; font-size: 15px; font-weight: 600; }
    .barra-acumulador-pedido { position: fixed; bottom: 0; left: 0; right: 0; background: #0b5d3b; color: white; padding: 15px 40px; display: flex; flex-direction: column; gap: 10px; z-index: 9999; border-top: 4px solid #cbd5e1; box-shadow: 0 -4px 15px rgba(0,0,0,0.1); }
    .fila-principal-barra { display: flex; justify-content: space-between; align-items: center; width: 100%; }
    .lista-vista-rapida { display: flex; flex-wrap: wrap; gap: 10px; padding: 4px 0; border-bottom: 1px solid rgba(255,255,255,0.2); margin-bottom: 5px; max-height: 60px; overflow-y: auto; }
    .item-mini-carrito { background: rgba(255,255,255,0.15); padding: 4px 10px; border-radius: 20px; font-size: 13px; display: flex; align-items: center; gap: 8px; }
    .btn-quitar-item { background: #ef4444; color: white; border: none; border-radius: 50%; width: 18px; height: 18px; font-size: 10px; cursor: pointer; display: flex; align-items: center; justify-content: center; font-weight: bold; }
    .btn-quitar-item:hover { background: #dc2626; }
    .btn-ir-pago { background: white; color: #0b5d3b; padding: 12px 25px; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; }
    .modulo-pago-centrado { display: flex; justify-content: center; align-items: center; min-height: 80vh; padding: 20px 0; }
    .contenedor-articulos-pago { background: #f8fafc; border-radius: 8px; padding: 15px; margin-bottom: 20px; border: 1px solid #e2e8f0; max-height: 160px; overflow-y: auto; }
    .linea-articulo-pago { display: flex; justify-content: space-between; padding: 6px 0; border-bottom: 1px dashed #cbd5e1; font-size: 15px; }
    .seccion-ticket { display: flex; justify-content: center; align-items: center; min-height: 90vh; background: #f3f4f6; padding: 20px 0; }
    .ticket-box { background: #ffffff; width: 100%; max-width: 400px; padding: 25px; border-radius: 4px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 6px dashed #0b5d3b; font-family: 'Courier New', Courier, monospace; }
    .ticket-box h3 { text-align: center; color: #0b5d3b; margin-bottom: 5px; font-size: 22px; font-family: inherit; }
    .ticket-box p { font-size: 14px; margin: 4px 0; font-family: inherit; }
    .divisor-ticket { border-bottom: 2px dashed #333; margin: 12px 0; }
    .btn-nuevo-pedido { width: 100%; padding: 12px; background: #0b5d3b; color: white; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; margin-top: 20px; font-family: 'Segoe UI', sans-serif; }
  </style>
</head>
<body>

  <?php if (!isset($_GET['ir_al_catalogo']) && !$pedidoGuardado): ?>
  <div class="wrapper-login-inicial" id="vistaPaso1">
    <div class="bienvenida-login">
       <h2>¡Hola, Bienvenido! 👋</h2>
       <p>Ordena tu comida favorita sin hacer largas filas.</p>
       <p class="eslogan-login">"Agilidad en tu receso"</p>
    </div>

    <section class="login">
      <h2>Inicio de Sesión</h2>
      <p style="text-align:center; font-size:13px; color:#718096; margin-bottom:15px;">Introduce tus datos para acceder</p>

      <?php if (isset($_SESSION['usuario_logeado'])): ?>
        <div class="mensaje-lindo-contenedor">
           ¡Qué bueno verte de nuevo, <?php echo htmlspecialchars($_SESSION['usuario_logeado'], ENT_QUOTES, 'UTF-8'); ?>! 🥰<br>
           <span style="font-size: 12px; font-weight: normal;">Tu sesión permanente está activa.</span>
        </div>
      <?php endif; ?>

      <form method="POST" action="index.php">
        <input type="text" name="usuario" id="usuario" placeholder="Nombre del usuario o Matrícula" 
               value="<?php echo isset($_SESSION['usuario_logeado']) ? htmlspecialchars($_SESSION['usuario_logeado'], ENT_QUOTES, 'UTF-8') : ''; ?>" 
               <?php echo isset($_SESSION['usuario_logeado']) ? 'readonly' : 'required'; ?>>
        
        <input type="password" name="password" id="password" placeholder="Contraseña" required>
        
        <select name="tipoUsuario" id="tipoUsuario" <?php echo isset($_SESSION['tipo_logeado']) ? 'disabled' : 'required'; ?>>
          <option value="">Seleccione tipo de usuario</option>
          <option value="Alumno" <?php echo (isset($_SESSION['tipo_logeado']) && $_SESSION['tipo_logeado'] == 'Alumno') ? 'selected' : ''; ?>>Alumno</option>
          <option value="Docente" <?php echo (isset($_SESSION['tipo_logeado']) && $_SESSION['tipo_logeado'] == 'Docente') ? 'selected' : ''; ?>>Docente</option>
          <option value="Administrativo" <?php echo (isset($_SESSION['tipo_logeado']) && $_SESSION['tipo_logeado'] == 'Administrativo') ? 'selected' : ''; ?>>Administrativo</option>
        </select>

        <?php if (!isset($_SESSION['usuario_logeado'])): ?>
           <button type="submit" name="accion_ingresar" class="btn-verde">INICIAR SESIÓN</button>
           <button type="submit" name="accion_registrar" class="btn-gris">REGÍSTRATE</button>
        <?php else: ?>
           <button type="button" onclick="window.location.href='index.php?ir_al_catalogo=true'" class="btn-verde">VER MENÚ DE COMIDA</button>
        <?php endif; ?>
      </form>
    </section>
  </div>
  <?php endif; ?>


  <?php if (isset($_GET['ir_al_catalogo']) && !$pedidoGuardado): ?>
  <div id="vistaPaso2">
    <header>
      <div class="logo-titulo">
        <img src="logo.jpg" alt="Logo CECYTEM" class="logo">
        <h1>Cafetería Escolar CECYTEM</h1>
      </div>
      <p class="eslogan-destacado">"Agilidad en tu receso"</p>
    </header>

    <section class="bienvenida">
       <h2>¡Buen provecho! Recarga energías hoy ⚡</h2>
       <p>Selecciona tus platillos y bebidas preferidas. Preparamos todo al instante para optimizar tu valioso tiempo libre.</p>
       <h3 style="margin-top: 12px; font-size:15px; color:#0b5d3b;">Orden en curso de: <span id="nombreAlumno"><?php echo htmlspecialchars($_SESSION['usuario_logeado'], ENT_QUOTES, 'UTF-8'); ?></span> (<?php echo htmlspecialchars($_SESSION['tipo_logeado'], ENT_QUOTES, 'UTF-8'); ?>)</h3>
    </section>

    <section class="productos">
      <h2>Menú General</h2>
      <div class="contenedor">
        <?php if(mysqli_num_rows($resultadoProductos) > 0): ?>
           <?php while($prod = mysqli_fetch_assoc($resultadoProductos)): ?>
              <div class="card">
                <img src="<?php echo htmlspecialchars($prod['imagen'], ENT_QUOTES, 'UTF-8'); ?>">
                <h3><?php echo htmlspecialchars($prod['nombre_producto'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <p>$<?php echo number_format($prod['precio'], 2); ?></p>
                
                <div class="control-eleccion">
                   <label>Cantidad:</label>
                   <input type="number" id="cant_<?php echo $prod['id_producto']; ?>" value="1" min="1" max="<?php echo $prod['stock']; ?>">
                </div>

                <button onclick="comprar('<?php echo $prod['id_producto']; ?>', '<?php echo addslashes(htmlspecialchars($prod['nombre_producto'])); ?>', <?php echo $prod['precio']; ?>)">Agregar al Pedido</button>
              </div>
           <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="barra-acumulador-pedido oculto" id="barraFlotante">
         <div class="lista-vista-rapida" id="miniListaCarrito"></div>
         <div class="fila-principal-barra">
            <div>
               <p>Artículos listos: <strong id="recuentoPiezas">0</strong></p>
               <p style="font-size:18px; font-weight:bold;">Subtotal: $<span id="dineroAcumulado">0.00</span></p>
            </div>
            <button type="button" class="btn-ir-pago" onclick="irAlModuloDePago()">Elegir Alimentos e Ir al Pago &rarr;</button>
         </div>
      </div>
    </section>
  </div>


  <div id="vistaPaso3" class="modulo-pago-centrado oculto">
    <section class="login" style="max-width: 480px;">
       <h2>Módulo de Pago</h2>
       <p style="font-weight:bold; color:#0b5d3b; margin-bottom:6px;">Tus alimentos elegidos:</p>
       <div class="contenedor-articulos-pago" id="desgloseProductos"></div>

       <div style="margin-bottom: 15px; padding-bottom: 8px; border-bottom: 2px solid #0b5d3b;">
          <p style="display:flex; justify-content:space-between;"><strong>Subtotal:</strong> <span>$<span id="pagoSubtotal">0.00</span></span></p>
          <p style="display:flex; justify-content:space-between; font-size:18px; color:#0b5d3b;"><strong>Total a Pagar:</strong> <span>$<span id="pagoTotal">0.00</span></span></p>
       </div>

       <div>
          <label style="font-weight:bold; display:block; margin-bottom:5px;">Seleccione su forma de pago:</label>
          <select id="selMetodoPago" onchange="arbolDecisionesMetodoPago()">
             <option value="">-- Seleccione --</option>
             <option value="Efectivo">Efectivo</option>
             <option value="Tarjeta">Tarjeta</option>
             <option value="Pago Digital">Pago Digital</option>
          </select>
       </div>

       <form method="POST" action="index.php">
          <input type="hidden" name="usuario_hidden" id="hiddenUsuario">
          <input type="hidden" name="metodo_pago_final" id="hiddenMetodoPago">
          <input type="hidden" name="total_hidden" id="hiddenTotal">
          <input type="hidden" name="productos_json_hidden" id="hiddenProductosJson">

          <button type="submit" name="finalizar_pedido_bd" id="btnPagarFinal" class="btn-verde oculto" style="background:#e0a800; color:#000; margin-top:15px;">PROCESAR PAGO Y GENERAR TICKET</button>
          <button type="button" onclick="regresarAlMenu()" class="btn-gris" style="margin-top:5px;">&larr; Cambiar Alimentos</button>
       </form>
    </section>
  </div>
  <?php endif; ?>


  <?php if ($pedidoGuardado && $ticketData !== null): ?>
  <div class="seccion-ticket" id="vistaPaso4">
     <div class="ticket-box">
        <h3>CAFETERÍA CECYTEM</h3>
        <p style="text-align: center; font-size:12px;">*** COMPROBANTE DE PEDIDO ***</p>
        <p style="text-align: center; font-size:11px; font-weight: bold; margin-top: 2px; color: #0b5d3b;">AGILIDAD EN TU RECESO</p>
        <div class="divisor-ticket"></div>
        
        <p><strong>Ticket # :</strong> <?php echo htmlspecialchars($ticketData['id_pedido'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Fecha    :</strong> <?php echo htmlspecialchars($ticketData['fecha'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Cliente  :</strong> <?php echo htmlspecialchars($ticketData['usuario'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Tipo     :</strong> <?php echo htmlspecialchars($ticketData['tipo'], ENT_QUOTES, 'UTF-8'); ?></p>
        
        <div class="divisor-ticket"></div>
        <p style="font-weight: bold; margin-bottom:5px;">DESGLOSE:</p>
        
        <?php foreach ($ticketData['productos'] as $prod): ?>
           <p style="display:flex; justify-content:space-between;">
              <span><?php echo htmlspecialchars($prod['nombre'], ENT_QUOTES, 'UTF-8'); ?> (x<?php echo intval($prod['cant']); ?>)</span>
              <span>$<?php echo number_format($prod['sub'], 2); ?></span>
           </p>
        <?php endforeach; ?>
        
        <div class="divisor-ticket"></div>
        <p style="display:flex; justify-content:space-between; font-size: 16px; font-weight: bold;">
           <span>TOTAL:</span>
           <span>$<?php echo number_format($ticketData['total'], 2); ?></span>
        </p>
        <p><strong>Metodo Pago:</strong> <?php echo htmlspecialchars($ticketData['metodo'], ENT_QUOTES, 'UTF-8'); ?></p>
        
        <div class="divisor-ticket"></div>
        <p style="text-align: center; font-style: italic; font-size: 12px;">¡Gracias por tu compra! Presenta este ticket impreso o digital en barra para recoger tu orden.</p>
        
        <button class="btn-nuevo-pedido" onclick="window.location.href='index.php?ir_al_catalogo=true'">REALIZAR OTRO PEDIDO</button>
     </div>
  </div>
  <?php endif; ?>


  <?php if($mensajeAlertaScript != "") { echo "<script>" . $mensajeAlertaScript . "</script>"; } ?>

  <script>
    // Tu lógica de JavaScript se mantiene intacta ya que el flujo frontal funciona impecable.
    let carrito = [];

    function comprar(id, nombre, precio) {
       let cant = parseInt(document.getElementById("cant_" + id).value);
       if(isNaN(cant) || cant <= 0) { alert("Introduzca una cantidad válida."); return; }

       let existe = carrito.find(item => item.id === id);
       if(existe) {
          existe.cant += cant;
          existe.sub = existe.cant * existe.precio;
       } else {
          carrito.push({ id: id, nombre: nombre, precio: precio, cant: cant, sub: cant * precio });
       }

       alert("Agregado al pedido: " + nombre);
       actualizarBarra();
    }

    function eliminarProductoDelCarrito(id) {
       let itemIndex = carrito.findIndex(item => item.id === id);
       if(itemIndex !== -1) {
          let nombreItem = carrito[itemIndex].nombre;
          carrito.splice(itemIndex, 1);
          alert("Se quitó \"" + nombreItem + "\" de tu selección.");
          actualizarBarra();
       }
    }

    function actualizarBarra() {
       let barra = document.getElementById("barraFlotante");
       if(!barra) return;
       if(carrito.length === 0) { barra.classList.add("oculto"); return; }
       barra.classList.remove("oculto");

       let piezas = carrito.reduce((sum, i) => sum + i.cant, 0);
       let dinero = carrito.reduce((sum, i) => sum + i.sub, 0);
       
       document.getElementById("recuentoPiezas").innerText = piezas;
       document.getElementById("dineroAcumulado").innerText = dinero.toFixed(2);

       let miniLista = document.getElementById("miniListaCarrito");
       miniLista.innerHTML = "";
       carrito.forEach(i => {
          miniLista.innerHTML += `
             <div class="item-mini-carrito">
                <span>${i.nombre} (x${i.cant})</span>
                <button type="button" class="btn-quitar-item" onclick="eliminarProductoDelCarrito('${i.id}')" title="Eliminar este producto">✕</button>
             </div>
          `;
       });
    }

    function irAlModuloDePago() {
       document.getElementById("vistaPaso2").classList.add("oculto");
       document.getElementById("vistaPaso3").classList.remove("oculto");
       
       let desglose = document.getElementById("desgloseProductos");
       desglose.innerHTML = "";
       let total = 0;

       carrito.forEach(i => {
          total += i.sub;
          desglose.innerHTML += `<div class="linea-articulo-pago"><span>${i.nombre} (x${i.cant})</span><strong>$${i.sub.toFixed(2)}</strong></div>`;
       });

       document.getElementById("pagoSubtotal").innerText = total.toFixed(2);
       document.getElementById("pagoTotal").innerText = total.toFixed(2);

       document.getElementById("hiddenUsuario").value = document.getElementById("nombreAlumno").innerText;
       document.getElementById("hiddenTotal").value = total;
       document.getElementById("hiddenProductosJson").value = JSON.stringify(carrito);

       document.getElementById("selMetodoPago").value = "";
       document.getElementById("btnPagarFinal").classList.add("oculto");
    }

    function regresarAlMenu() {
       document.getElementById("vistaPaso3").classList.add("oculto");
       document.getElementById("vistaPaso2").classList.remove("oculto");
       actualizarBarra();
    }

    function arbolDecisionesMetodoPago() {
       let m = document.getElementById("selMetodoPago").value;
       let btn = document.getElementById("btnPagarFinal");
       document.getElementById("hiddenMetodoPago").value = m;

       if(m === "") { btn.classList.add("oculto"); return; }

       if(m === "Efectivo") {
          alert("Método de pago seleccionado: Efectivo");
          if(confirm("¿Está de acuerdo con pagar en efectivo en la caja de la sucursal?")) {
             btn.classList.remove("oculto");
             btn.onclick = function(e) { if(!confirm("¿Confirmar procesamiento y registrar pedido?")) e.preventDefault(); };
          } else {
             document.getElementById("selMetodoPago").value = "";
             btn.classList.add("oculto");
          }
       }
       else if(m === "Tarjeta") {
          alert("Método de pago seleccionado: Tarjeta Bancaria");
          if(confirm("¿Su tarjeta cuenta con los fondos requeridos para la transacción?")) {
             btn.classList.remove("oculto");
             btn.onclick = function(e) { if(!confirm("¿Confirmar cobro a tarjeta?")) e.preventDefault(); };
          } else {
             document.getElementById("selMetodoPago").value = "";
             btn.classList.add("oculto");
          }
       }
       else if(m === "Pago Digital") {
          alert("Método de pago seleccionado: Transferencia / CoDi / QR Digital");
          if(confirm("¿Tiene lista su aplicación móvil para escanear el cobro digital?")) {
             btn.classList.remove("oculto");
             btn.onclick = function(e) { if(!confirm("¿Registrar transferencia digital?")) e.preventDefault(); };
          } else {
             document.getElementById("selMetodoPago").value = "";
             btn.classList.add("oculto");
          }
       }
    }
  </script>
</body>
</html>

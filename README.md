[Untitled_Document.md](https://github.com/user-attachments/files/29453532/Untitled_Document.md)
COLEGIO DE ESTUDIOS CIENTÍFICOS Y TECNOLÓGICOS DEL ESTADO DE MÉXICO CECYTEM PLANTEL COACALCO 
PROYECTO: CAFETERÍA ESCOLAR REPORTE TÉCNICO DE DESARROLLE E IMPLEMENTACIÓN SEGUNDO AVANCE DE PROYECTO 
 
 	 
Autores: 	Angel Miguel Tapia Martínez, Iker Yamit Rios Pérez 
Materia / Docente: 	Desarrollo de Aplicaciones Web / Mtra. Aura Yolanda García Ulloa 
Fecha: 	29 de Junio de 2026 
 
1. Justificación del Curso y del Proyecto 
El desarrollo de la aplicación web Cafetería Escolar representa una oportunidad para fortalecer las habilidades técnicas adquiridas en la especialidad de programación del CECYTEM Plantel Coacalco. Este proyecto integra conocimientos de aplicaciones web estáticas y dinámicas, bases de datos, frontend, backend y diseño UI/UX, permitiendo que los estudiantes desarrollen competencias que actualmente son demandadas en un mercado laboral competitivo y globalizado. 
La automatización de una cafetería escolar aporta una solución moderna para la gestión de pedidos, productos e información. Actualmente, muchas cafeterías escolares trabajan de manera manual, lo que provoca errores en cuentas, lentitud en el servicio y desorganización en el control de inventario. Gracias a esta aplicación, se busca optimizar los procesos mediante una interfaz accesible y fácil de utilizar, ofreciendo una experiencia más rápida y eficiente tanto para estudiantes como para el personal administrativo. 
Además, el proyecto añade valor al perfil técnico de egreso porque demuestra la capacidad de implementar soluciones tecnológicas reales, utilizando herramientas actuales de desarrollo web y gestión de información. 
 	  
2. Objetivos del Proyecto 
2.1 Objetivo General 
Impulsar el desarrollo técnico mediante el diseño e implementación de una aplicación web estática y dinámica denominada Cafetería CECYTEM, aplicando análisis de requerimientos, interfaces UI/UX, bases de datos relacionales, arquitectura full stack y despliegue en producción. 
2.2 Objetivos Específicos 
•	Diseñar interfaces gráficas modernas y accesibles para mejorar la experiencia de usuario. 
•	Implementar una base de datos relacional para almacenar pedidos, productos y usuarios. 
•	Desarrollar la parte frontend utilizando HTML, CSS y JavaScript. 
•	Implementar funcionalidades backend para el manejo de información y validaciones. 
•	Automatizar el registro y control de pedidos dentro de la cafetería escolar. 
•	Realizar pruebas y despliegue de la aplicación para garantizar su correcto funcionamiento. 
 	  
3. Análisis de la Problemática y Propuesta 
3.1 Análisis del Problema 
En la cafetería escolar del plantel se presentan diferentes problemáticas que afectan la atención y organización del servicio. Durante las horas pico se generan filas excesivas debido a que los pedidos se toman manualmente, provocando retrasos y pérdida de tiempo para los estudiantes. También existe falta de control en el inventario de productos, lo que ocasiona que algunos alimentos se terminen sin previo aviso o que existan errores en el registro de ventas. 
Otro problema importante son los errores humanos en las cuentas manuales, ya que en ocasiones los cobros pueden realizarse de forma incorrecta. Además, la cafetería no cuenta con un menú digital accesible para la comunidad estudiantil, dificultando que los alumnos conozcan la disponibilidad de productos y precios en tiempo real. Estas situaciones demuestran la necesidad de implementar una solución tecnológica que optimice el funcionamiento del servicio. 
 
3.2 Propuesta de Solución 
La aplicación web Cafetería Escolar busca resolver las problemáticas identificadas mediante un sistema digital moderno y organizado. El sistema permitirá a los alumnos consultar un menú digital, realizar pedidos de forma más rápida y visualizar información actualizada de productos. El personal de la cafetería podrá gestionar inventarios, pedidos y ventas desde una interfaz intuitiva, reduciendo errores y mejorando la eficiencia. 
Además, el diseño UI/UX fue pensado para ser sencillo, accesible y fácil de utilizar por cualquier usuario. La implementación de wireframes ayuda a visualizar la estructura inicial de las ventanas principales del sistema y facilita el desarrollo de la aplicación. 
 
 
 
 
 
 
 
 
 
 
 
 
3.3 Wireframes  de la Aplicacion (Estructura Ventana) 
•	Ventana 1: Inicio de Sesión (Campos: Usuario, Contraseña, Botón: Ingresar) 
 
 
•	Ventana 2: Menú Digital (Hamburguesa - $50, Torta - $35, Refresco - $20, Botón: Realizar Pedido) 
  
•	• Ventana 3: Panel de Administración (Secciones: Inventario, Pedidos, Ventas del Día) 
   
4. Identificación de los Usuarios del Sistema 
A continuación, se describen y estructuran los roles de los usuarios que interactuarán con la aplicación web de la cafetería escolar, definiendo sus funciones específicas y alcances dentro del sistema: 
Usuario 		Función y Descripción en el Sistema 
Administrador 		Gestiona productos, precios, stock en inventario y supervisa las estadísticas de ventas y pedidos globales. 
Cliente (Estudiante / Consulta el menú digital interactivo en tiempo real, añade Docente) productos al carrito y realiza pedidos de manera ágil. 
Empleado 
Cafetería) 	(Personal 	de 	Atiende, procesa y actualiza el estado de los pedidos recibidos en tiempo real (en preparación, listo, entregado). 
 
 	  
5. Requerimientos del Sistema 
Los requerimientos de software especifican lo que el sistema debe hacer (funcionales) y las restricciones o atributos de calidad bajo los cuales debe operar (no funcionales). 5.1 Requerimientos Funcionales 
ID 	Requerimiento Funcional 	Prioridad 
RF-01 	El sistema deberá permitir iniciar sesión de manera segura a los distintos roles mediante usuario y contraseña. 	Alta 
RF-02 	El sistema deberá mostrar el menú de productos actualizado con precios y disponibilidad en tiempo real. 	Alta 
RF-03 	El sistema deberá permitir al cliente seleccionar productos y procesar un pedido digital. 	Alta 
RF-04 	El sistema deberá registrar automáticamente los pedidos entrantes en el panel del empleado. 	Alta 
RF-05 	El sistema deberá permitir al empleado actualizar el estado del pedido (Recibido, En Preparación, Listo). 	Alta 
RF-06 	El sistema deberá descontar automáticamente del inventario las unidades correspondientes al concretarse una venta. 	Media 
RF-07 	El sistema deberá permitir al administrador dar de alta, modificar o eliminar productos del catálogo (CRUD). 	Alta 
RF-08 	El sistema deberá generar un reporte diario con el desglose totalizado de las ventas del día. 	Media 
RF-09 	El sistema deberá enviar una notificación o alerta visual en pantalla cuando el stock de un producto sea bajo. 	Baja 
RF-10 	El sistema deberá permitir recuperar la contraseña del usuario mediante un correo electrónico de respaldo. 	Baja 
 
 
5.1 Requerimientos No Funcionales 
ID 	Requerimiento No Funcional 	Atributo 	Prioridad 
RNF-01 	El sistema deberá responder a las consultas de Rendimiento menú en un tiempo menor a 2 segundos. 	Alta 
RNF-02 El sistema deberá encriptar las contraseñas de los Seguridad Alta usuarios en la base de datos mediante algoritmos seguros. 
RNF-03 	El sistema deberá contar con un diseño responsivo Usabilidad adaptable a dispositivos móviles y de escritorio. 	Alta 
RNF-04 El sistema deberá garantizar una disponibilidad del Disponibilidad Alta 99.5% durante el horario operativo escolar. 
RNF-05 	El sistema deberá ser intuitivo, permitiendo a un Usabilidad nuevo usuario realizar un pedido en menos de 3 pasos. 	Media 
RNF-06 	El sistema deberá soportar al menos 150 Escalabilidad 	Alta 
conexiones concurrentes durante las horas pico sin degradación del servicio. 
RNF-07 	El sistema deberá estar desarrollado utilizando Mantenibilidad Media 
tecnologías estándar (HTML5, CSS3, JavaScript, PHP/Node.js). 
RNF-08 El sistema deberá validar todas las entradas de Seguridad Alta datos en frontend y backend para prevenir inyecciones SQL. 
RNF-09 	El sistema deberá mantener un registro detallado Seguridad de bitácora (logs) para auditorías de transacciones y errores. 	Baja 
ID 	Requerimiento No Funcional 	Atributo 	Prioridad 
RNF-10 	El sistema deberá permitir actualizaciones de Mantenibilidad software sin interrumpir o corromper los datos existentes. 	Media 
 
 	  
6. SEGUNDO AVANCE DEL PROYECTO: DISEÑO DE BASES DE DATOS 
6.1 Investigación de Conceptos Fundamentales 
Base de datos: Es un conjunto estructurado y organizado de datos digitales almacenados electrónicamente en un sistema informático, diseñado para que la información se pueda consultar, actualizar y gestionar con extrema rapidez y consistencia. 
Tabla: Es la unidad fundamental de almacenamiento en una base de datos relacional. Está estructurada en filas y columnas, similar a una hoja de cálculo, y se utiliza para categorizar un tipo específico de información u objeto del mundo real. 
Registro (o Fila): Representa un objeto único, individual y específico dentro de una tabla. Contiene todos los datos relacionados con esa sola entrada (por ejemplo, los datos completos de un solo pedido). 
Campo (o Columna): Es el componente vertical de una tabla que almacena una categoría de datos específica. Define el tipo de información que se puede guardar bajo ese concepto (por ejemplo, texto, números o fechas). 
Entidad: Es cualquier objeto, persona, concepto o evento del mundo real que es relevante para el sistema y sobre el cual se desea recolectar y almacenar información. 
Atributo: Es una propiedad o característica específica que describe a una entidad. Se traduce directamente en los campos o columnas cuando la entidad se convierte en una tabla. 
Relación: Es el vínculo o asociación lógica que existe entre dos o más entidades o tablas dentro de la base de datos, lo que permite conectar la información de manera coherente (por ejemplo, relacionar un alumno con su pedido). 
Llave primaria (Primary Key - PK): Es un campo clave o combinación de campos que identifica de forma única y exclusiva a cada registro dentro de una tabla, impidiendo que existan filas duplicadas. 
Llave foránea (Foreign Key - FK): Es un campo en una tabla que hace referencia directa a la llave primaria de otra tabla. Se utiliza explícitamente para establecer y garantizar la integridad referencial de una relación entre ambas tablas. 
SQL (Structured Query Language): Es el lenguaje de programación estándar a nivel mundial empleado para interactuar con bases de datos relacionales, permitiendo realizar consultas, inserciones, actualizaciones y eliminaciones de registros. 
Sistema Gestor de Bases de Datos (DBMS): Es el software especializado que sirve como interfaz directa entre la base de datos, los usuarios y las aplicaciones, encargándose de administrar, proteger, procesar y optimizar todo el acceso a la información. 
 
 
6.2 Identificación de Entidades y Atributos de la Cafetería 
Con base en el análisis de los requerimientos y el flujo del sistema de la Cafetería CECYTEM, se han estructurado e identificado las siguientes 5 entidades clave con sus respectivos atributos fundamentales (cumpliendo con un mínimo de 5 atributos por entidad): 
Entidad 	Atributos Identificados 	Descripción de Funcionalidad en el Proyecto 
1. Usuario 	•	id_usuario (PK) 
•	nombre_completo 
•	correo_electronico 
•	contrasena_encriptada 
•	rol_usuario 
(Admin/Empleado/Cliente) 	Permite gestionar el control de accesos, inicios de sesión seguros (RF-01) y la validación de roles de la comunidad escolar escolar. 
 
2. Producto 	• id_producto (PK) 
•	nombre_alimento 
•	descripcion 
•	precio_unitario 
3. Pedido 	•	id_pedido (PK) 
•	id_usuario (FK) 
•	fecha_hora 
•	estado_pedido 
(Recibido/Prep/Listo) 
•	metodo_pago 
(Efectivo/Tarjeta/Digital) 	Registra y hace el seguimiento automatizado de los pedidos realizados por los clientes en tiempo real (RF-03, RF-04, RF-
05). 
•	stock_disponible 
Almacena el catálogo completo de alimentos y bebidas del menú digital (RF-02) para su despliegue y modificaciones (RF-07). 
 
4. 	• id_detalle (PK) 
Detalle_Pedido 	• id_pedido (FK) 
•	id_producto (FK) 
•	cantidad_solicitada 
5. Venta_Diaria 	•	id_venta (PK) 
•	id_pedido (FK) 
•	fecha_cierre 
•	monto_total_cobrado 
•	id_empleado_atiende (FK) 	Consolida los registros financieros necesarios para el cierre de caja y la generación automática del reporte diario de ventas (RF-08). 
 
7.DIAGRAMA DE CASOS DE USO 
7.1 DIAGRAMA UML 
  
 
 	 


7.2 DIAGRAMA DE FLUJO 
 	
 
7.3 DIAGRAMA CASOS DE USO





















7.4 DIAGRAMA ENTIDAD-RELACION (DER)
 
7.5 DIAGRAMA DE CLASES 
7.6 NORMALIZACION (Conexiones)




















8.PASOS
8.1 DICCIONARIO
1. Tabla: USUARIOS
•	Descripción: Almacena la información de registro, identificación y localización de los usuarios (tanto compradores como vendedores) en la plataforma.
•	Llave Primaria (PK): id_usuario
Nombre del Campo	Tipo de Dato	Tamaño	Nulidad	Clave	Descripción / Reglas de Negocio
id_usuario	INT	-	NOT NULL	PK	Identificador único e irrepetible de cada usuario.
Nombre	VARCHAR	100	NOT NULL	-	Nombre completo o razón social del usuario.
Direccion	VARCHAR	255	NOT NULL		

2. Tabla: PRODUCTOS
•	Descripción: Contiene el catálogo de artículos publicados en la plataforma para su venta, junto con su precio, disponibilidad y el vendedor que lo ofrece.
•	Llave Primaria (PK): id_producto
Nombre del Campo	Tipo de Dato	Tamaño	Nulidad	Clave	Descripción / Reglas de Negocio
id_producto	INT	-	NOT NULL	PK	Identificador único asignado a cada producto publicado.
Titulo_Prod	VARCHAR	150	NOT NULL	-	Título o nombre comercial con el que se publica el producto.
Precio	DECIMAL	10,2	NOT NULL	-	Costo unitario del producto. Debe ser un valor mayor a 0.00.
id_vendedor	INT	-	NOT NULL		











 
3. Tabla: PEDIDOS
•	Descripción: Registra las transacciones de compra realizadas, vinculando al cliente con el producto adquirido, la fecha y el monto total de la operación.
•	Llave Primaria (PK): id_pedido
Nombre del Campo	Tipo de Dato	Tamaño	Nulidad	Clave	Descripción / Reglas de Negocio
id_pedido	INT	-	NOT NULL	PK	Identificador único de la orden de compra o transacción.
id_comprador	INT	-	NOT NULL	FK	Relación con la tabla USUARIOS (id_usuario). Identifica al cliente que realiza la compra.
id_producto	INT	-	NOT NULL	FK	Relación con la tabla PRODUCTOS (id_producto). Identifica qué artículo se compró.
Fecha	DATE	-	NOT NULL	-	Fecha exacta en la que se procesó y confirmó el pedido.
Total	DECIMAL	10,2	NOT NULL		

 
TERCERA PARTE
10.REPORTE TECNICO: BITACORAS DE PRUEBAS DE SOFTWARE Y SUS FUNDAMENTOS / TECNOLOGIAS / ESTRUCTURACION /ETC

10.1 Fundamentos del Desarrollo Web Estático y Entorno 
Conceptos Básicos y Arquitectura 
•	Aplicación Estática vs. Dinámica: Una aplicación estática (como la versión original de la cafetería en HTML/CSS) solo muestra información fija y no cambia a menos que se edite el código fuente. En cambio, una aplicación dinámica (como este sistema basado en PHP) genera contenido en tiempo real consultando una base de datos, permitiendo almacenar usuarios de manera permanente, procesar compras, actualizar stocks dinámicamente y manejar sesiones. 
•	Rol del Frontend: Es la interfaz visual con la que interactúa el usuario (alumnos, docentes, administrativos). Construido con HTML, CSS y JavaScript, se encarga de renderizar el menú de productos, gestionar el carrito de compras mediante eventos dinámicos y enviar los datos del pedido al servidor. 
•	Flujo Cliente-Servidor: 1. El Cliente (navegador) solicita index.php enviando una petición HTTP. 2. El Servidor procesa el código PHP, realiza consultas a la base de datos MySQL (por ejemplo, SELECT * FROM productos) y procesa inicios de sesión o transacciones. 3. El servidor devuelve al cliente una página estructurada puramente en HTML/CSS/JS para su visualización. 
 
Tecnologías Fundamentales 
•	HTML5: Estructura el esqueleto y la semántica del negocio (cabeceras, formularios, secciones de productos). 
•	CSS3: Proporciona la identidad visual, el uso de degradados institucionales (linear-gradient(135deg, #0b5d3b, #074028)) y la distribución responsiva de elementos en pantalla. 
•	JavaScript (Vanilla): Añade interactividad inmediata en el lado del cliente, gestionando el arreglo en memoria del carrito (let carrito = [];), las alertas interactivas y el árbol de decisiones del método de pago sin recargar la página. 
Herramientas y Entornos de Desarrollo 
•	Visual Studio Code: Editor de código fuente utilizado junto con extensiones clave como Prettier para el formateo de sintaxis y PHP Intelephense para el autocompletado de scripts. 
•	Node.js y npm: Entorno de ejecución y gestor de paquetes empleado en fases iniciales del ecosistema para la automatización de dependencias y scripts de desarrollo. 
•	Vite: Herramienta de construcción moderna que optimiza los tiempos de recarga del navegador (Hot Module Replacement) acelerando drásticamente el desarrollo frontend frente a empaquetadores tradicionales. 
•	Navegador (DevTools): Herramienta crucial integrada para inspeccionar el DOM, depurar las clases de estilos CSS y monitorear los errores de JavaScript en la Consola.  
10.2. Plaintext cafeteria-cecytem/ 
├── index.php                # Archivo principal y puerta de acceso única 
├── logo.jpg                 # Imagen de identidad de la cafetería 
└── src/ 
    ├── html/                # Respaldo de estructuras o plantillas HTML independientes 
    ├── css/                 # Hojas de estilo estructuradas independientes 
    ├── js/                  # Lógica del negocio del lado del cliente aislada 
    └── assets/              # Carpeta para todo el material multimedia 
        ├── imagenes/        # Fotografías de productos (platillos, bebidas)         └── iconos/          # Logotipos y vectores auxiliares 
 
Archivo Principal 
El archivo index.php actúa como la puerta de acceso principal única de la aplicación web. Centraliza tanto el procesamiento lógico del backend (conexión con MySQL a través de mysqli_connect, control de sesiones eternas e inserción de compras) como la renderización estética del frontend. Al enlazar dinámicamente recursos multimedia como <img src="logo.jpg"> o variables inyectadas mediante PHP, garantiza un punto de control unificado y seguro para el flujo completo del sistema. 
 	 
 
10.3 Estructuración y Diseño de la Interfaz (HTML5 y CSS3) 
Desarrollo de Páginas Web (HTML5) 
El documento implementa etiquetas semánticas obligatorias para asegurar los estándares de accesibilidad y optimización en motores de búsqueda (SEO): 
•	<header>: Delimita el encabezado del sitio con la identidad de la institución. 
•	<section>: Bloques independientes y organizados para modular el flujo del usuario (id="ventanaLogin", id="ventanaProductos", id="ventanaPago"). 
•	<h3> / <h2>: Jerarquía de títulos para los productos y las secciones de navegación. 
•	Metadata (<meta>): Configurada dentro de la etiqueta <head> para definir el juego de caracteres universal y garantizar que el diseño sea adaptable a dispositivos móviles: 
HTML 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
Diseño y Organización del Contenido (CSS3) 
La estrategia de diseño visual utiliza selectores limpios para dar un aspecto armónico y limpio al sistema: 
•	Selectores de Etiqueta y Universales (*, body, header): Para resetear márgenes por defecto y asignar fuentes limpias como Segoe UI. 
•	Selectores de Clase (.card, .btn-verde, .oculto): Permiten la reutilización de componentes visuales modernos, bordes redondeados (border-radius: 12px), sombras suaves (box-shadow) y el control de visibilidad dinámica mediante transiciones de interfaz. 
•	Alineación y Flexibilidad (CSS Grid): El catálogo de alimentos se organiza mediante un contenedor responsivo bidimensional que se ajusta automáticamente según el tamaño del monitor sin romper la estructura de las tarjetas de productos: 
CSS 
.contenedor {   display: grid; 
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));   gap: 30px; 
}  	 
 
10.4 Navegación, Multimedia e Información Interactiva 
Navegación y Contenido Multimedia 
El flujo del sitio está diseñado para ser sumamente intuitivo mediante transiciones controladas por estados. Al iniciar sesión correctamente, JavaScript remueve e intercambia clases CSS dinámicas (oculto) que simulan una navegación fluida entre páginas (Login $\rightarrow$ Catálogo de Alimentos $\rightarrow$ Módulo de Pago) sin recargas abruptas, mejorando la experiencia de usuario (UX). 
Optimización de Imágenes 
Para asegurar una carga ágil del sitio de la cafetería, los recursos gráficos se distribuyen estratégicamente siguiendo esta tabla comparativa: 
Formato 	Uso Justificado en el Proyecto 	Ventaja Clave 
JPEG 	Fotografías e imágenes de fondo pesadas de los platillos. 	Compresión fotográfica ideal sin perder excesiva calidad. 
PNG 	Imágenes de productos del menú con fondos transparentes. 	Mantiene canales alfa limpios para acoplarse sobre el fondo del sitio. 
SVG 	Logotipo oficial del 
CECYTEM e iconos 
vectoriales de control. 	Escalabilidad infinita basada en curvas matemáticas sin pixelarse. 
WebP 	Formato de última generación para reducir el peso global de la web. 	Alta compresión web reduciendo hasta un 30% el tamaño comparado con PNG/JPG. 

 
Organización de Información y Formularios 
•	Estructura de Datos y Listas/Tablas: La información de los productos seleccionados y su desglose final de cobro se generan mediante la iteración de nodos del DOM que inyectan de forma dinámica un formato de lista en la vista de confirmación del ticket de pago (.linea-articulo-pago). 
•	Formularios de Pedidos / Validación: El formulario recopila de forma estructurada las entradas esenciales mediante elementos interactivos nativos protegidos: o Campos <input type="text"> e <input type="password"> con atributos required para impedir envíos vacíos. o Controles <input type="number"> acotados con valores mínimos y máximos (min="1" max="...") mapeados al stock real disponible en la BD para evitar compras de elementos inexistentes. o Un menú desplegable <select> que gestiona el árbol lógico de decisiones en JavaScript para la forma de pago (Efectivo, Tarjeta, Pago Digital), solicitando doble confirmación explícita mediante ventanas emergentes antes de proceder a la inserción final del registro en la base de datos MySQL. 
 


 
11.BITACORAS
11.1 Pruebas Unitarias (Testing a nivel de funciones de código) 
Se ejecutaron funciones de JavaScript de forma aislada en la consola de desarrollador (F12) para validar que los cálculos matemáticos y el control de errores respondan correctamente ante datos válidos, inválidos o valores extremos. 
ID 	Elemento de Prueba 	Fecha 	Prioridad 	Resultado de Observaciones 
U-01 	Función de suma del carrito con datos válidos (Café $35.00 + Dona $25.00). 	DD/MM/2026 	Alta 	Exitoso: La consola devolvió exactamente $60.00. El cálculo lógico es correcto. 
U-02 	Control de errores: Inserción de un precio erróneo o negativo (ej. -$15.00). 	DD/MM/2026 	Alta 	Modificar: El sistema restó el dinero del total en lugar de lanzar una excepción. Se requiere añadir validación. 
U-03 	Control de errores: Pasar una cadena de texto en lugar de número (ej. 'Gratis'). 	DD/MM/2026 	Media 	Corregido: La consola devolvió NaN. Se requiere implementar un parsed numérico defensivo para evitar caídas. 
U-04 	Comportamiento del carrito si un producto cuesta $0.00 (Promoción especial). 	DD/MM/2026 	Baja 	Exitoso: Suma correctamente el producto sin alterar ni corromper el cálculo de los demás elementos. 

 
11.2 Pruebas de Integración (Conexión entre elementos y módulos) 
Estas pruebas comprueban que la interacción entre el diseño estructurado en HTML (botones, enlaces de navegación) y la lógica dinámica en JavaScript (manipulación del DOM) funcione fluidamente al realizar acciones secuenciales. 
ID 	Elemento de Prueba 	Fecha 	Prioridad 	Resultado de Observaciones 
I-01 	Flujo 'Agregar producto': Clic consecutivo en botón 'Pedir' de 3 platillos del menú. 	DD/MM/2026 	Alta 	Exitoso: Los 3 productos se renderizaron dentro del contenedor del Carrito con su nombre y precio exactos. 
I-02 	Envío de datos desde el formulario de quejas hacia las variables de validación de JS. 	DD/MM/2026 	Media 	Exitoso: JavaScript captura los strings de los inputs correctamente antes de ejecutar el envío simulado. 
I-03 	Hipervínculos del menú de navegación superior (#menu, #registro). 	DD/MM/2026 	Media 	Exitoso: El scroll automático redirige al ancla correspondiente de forma limpia y sin romper la maquetación visual. 
I-04 	Actualización dinámica del contador numérico en el icono flotante del carrito. 	DD/MM/2026 	Alta 	Pendiente: El contador no incrementa visualmente al añadir ítems; requiere actualizar la función DOM selectora. 
 
 	 
 
11.3 Pruebas de Sistema (Evaluación de la App completa en Navegadores) 
Evaluación del flujo de negocio de forma global simulación la experiencia de un alumno real, verificando la consistencia visual y de ejecución del diseño responsivo en múltiples navegadores web. 
ID 	Elemento de Prueba 	Fecha 	Prioridad 	Resultado de Observaciones 
S-01 	Ejecución del flujo completo de pedido en Google Chrome (Navegador base). 	DD/MM/2026 	Alta 	Exitoso: Todo el proceso de navegación, adición al carrito y simulación de pedido especial funciona de extremo a extremo. 
S-02 	Ejecución del flujo completo de pedido en un segundo navegador (Firefox / Edge). 	DD/MM/2026 	Alta 	Observación: En Firefox un botón de envío se desalinea 5px debido al comportamiento nativo de los estilos de Flexbox. 
S-03 	Activación del 'Modo de alto contraste' y legibilidad en toda la interfaz. 	DD/MM/2026 	Media 	Exitoso: Las clases CSS cambian correctamente, garantizando la accesibilidad visual en cualquier apartado. 
S-04 	Comportamiento del diseño responsivo (Vista de 
Smartphone) al interactuar. 	DD/MM/2026 	Alta 	Exitoso: El menú hamburguesa se despliega y colapsa de forma interactiva en todas las plataformas probadas. 
 
 	 
 
11.4 Pruebas de Rendimiento (Performance, Optimización y Tiempos de Carga) 
Auditoría técnica utilizando las herramientas de desarrollo (pestaña Lighthouse o Network) para medir la velocidad de la aplicación, peso del código multimedia y eficiencia en la carga. 
ID 	Elemento de Prueba 	Fecha 	Prioridad 	Resultado de Observaciones 
R-01 	Puntaje general de rendimiento obtenido en la auditoría automatizada de Lighthouse. 	DD/MM/2026 	Media 	Resultado: Se obtuvo una puntuación de 82/100. Se recomienda aplazar la carga de scripts no críticos. 
R-02 	Tiempo de transferencia y carga de las imágenes de los platillos del menú. 	DD/MM/2026 	Alta 	Observación: Las fotos de los desayunos demoraron 1.2s en renderizarse debido a que están en formato bruto .PNG. 
R-03 	Análisis y aplicación de sugerencias multimedia arrojadas por la herramienta. 	DD/MM/2026 	Media 	Sugerencia: Convertir todo el catálogo multimedia a formatos modernos como .WebP para reducir el consumo de red. 
R-04 	Registro final del peso total de la landing page cargada en memoria. 	DD/MM/2026 	Baja 	Resultado: El peso neto detectado en la pestaña Network fue de 2.4 MB, el cual es elevado para redes móviles. 
 
 	 
 
11.5 Pruebas de Aceptación (Enfoque de Usabilidad y Experiencia del Usuario Final) 
Validación cualitativa mediante una prueba a ciegas de 2 minutos realizada con un usuario real 
(compañero/familiar) sin asistencia guiada, midiendo la intuición de la interfaz y la claridad del sistema. 
ID 	Elemento de Prueba 	Fecha 	Prioridad 	Resultado de Observaciones 
A-01 	Ubicación inmediata del botón para agregar elementos al carrito por el usuario. 	DD/MM/2026 	Alta 	Exitoso: El usuario identificó y accionó el botón en menos de 3 segundos gracias a su contraste cromático. 
A-02 	Comprensión e interpretación de la categorización por apartados y los precios. 	DD/MM/2026 	Media 	Exitoso: El cliente entendió rápidamente la división de alimentos, bebidas y la correspondencia de costos. 
A-03 	Reacción y claridad ante los mensajes dinámicos de error en formularios. 	DD/MM/2026 	Alta 	Observación: El usuario notó la alerta pero mencionó que el mensaje era genérico y no especificaba qué input faltaba. 
A-04 	Recopilación de comentarios libres y propuestas de mejora de la experiencia. 	DD/MM/2026 	Baja 	Feedback: Sugirió incorporar un botón global de 'Vaciar Carrito' para evitar eliminar elementos uno por uno. 
 
 	 
CONCLUSIONES DE APRENDIZAJE 

1.	Si durante la Prueba Unitaria de la función del carrito ingresas el texto "treinta" en lugar del número 30 y el sistema se congela o muestra un error de tipo NaN, ¿cómo corregirías la lógica de tu código en JavaScript para prevenir este fallo? 
•	Respuesta: Utilizando la función parseFloat() para intentar convertir el dato y un condicional con isNaN() para detectar si el resultado no es un número. Si es texto inválido, el sistema asigna automáticamente un valor seguro (como 0.00) o muestra una alerta interactiva en vez de colapsar. 
2.	¿Por qué es posible que una Prueba de Integración falle rotundamente aunque las Pruebas Unitarias de cada función por separado hayan obtenido un 100% de éxito? Plantea un ejemplo con la tabla de productos y el carrito. 
•	Respuesta: Porque las pruebas unitarias evalúan funciones de forma aislada, pero la integración evalúa cómo intercambian información. 
•	Ejemplo: La tabla de productos puede generar exitosamente un objeto con la propiedad .costo, pero si la función del carrito está programada para sumar buscando la propiedad .precio, la conexión fallará y el total dará cero. 
3.	Basándote en los resultados de tu prueba en la pestaña Network/Lighthouse (Rendimiento), ¿qué acciones técnicas específicas deberías implementar en tus archivos CSS o en la carpeta assets/images para mejorar la velocidad de carga en un celular? 
•	Respuesta: 1. Convertir y comprimir todas las imágenes de la cafetería a un formato moderno y ligero como .webp. 
2.	Agregar el atributo loading="lazy" (carga diferida) en las etiquetas HTML de las imágenes para que no consuman datos hasta hacer scroll. 
3.	Minificar el archivo CSS eliminando espacios en blanco y comentarios para reducir los kilobytes transferidos. 
4.	¿Qué diferencias o inconsistencias críticas (de alineación CSS, fuentes o ejecución de scripts) pudiste observar al realizar la Prueba de Sistema en navegadores de diferentes compañías? 
•	Respuesta: * CSS: Ligeras desalineaciones en las cajas de los productos (flex o grid) al cambiar de Chrome a Firefox o Safari si no se usan prefijos. 
•	Fuentes/Inputs: El diseño visual de los menús desplegables y controles numéricos de stock cambia según el navegador. 
•	Scripts: Las alertas nativas (alert, confirm) bloquean el navegador de forma distinta y a veces son bloqueadas automáticamente en sistemas operativos móviles. 




5.	¿Por qué la Prueba de Aceptación realizada por una persona ajena al proyecto es más valiosa para evaluar la Experiencia de Usuario (UX) que la prueba realizada por ti mismo, siendo el creador de la aplicación? 
•	Respuesta: Porque el desarrollador tiene "ceguera de taller" y ya conoce los caminos correctos del sistema. Un usuario externo interactúa con la mente en blanco; si no entiende dónde dar clic o se confunde con una alerta, revela las fallas reales de usabilidad y los flujos que no son claros en el mundo real. 
 
12.DIAGRAMAS CLIENTE-SERVIDOR
12.1 ARQUITECTURA



12.2 Diagrama de Árbol de la Estructura de Carpetas Profesionales




















12.3 Diagrama del Árbol de Decisiones de Seguridad (Rutas Protegidas)






13.Modulo Inicio de Sesion
13.1 Módulo de Inicio de Sesión (Autenticación Permanente)
Este módulo gestiona la seguridad del sistema, permitiendo registrar usuarios nuevos o validar credenciales existentes para dar acceso al catálogo de alimentos.
A. Vista del Servidor (Backend en PHP & SQL)
El servidor procesa dos flujos mediante sentencias condicionales: el registro con sentencias INSERT y la validación de credenciales con sentencias SELECT. Se utiliza mysqli_real_escape_string para evitar inyecciones de código malicioso.

<?php
// CONTROLADOR DE REGISTRO DE USUARIOS NUEVOS
if (isset($_POST['accion_registrar'])) {
    $u = mysqli_real_escape_string($conn, $_POST['usuario']);
    $p = mysqli_real_escape_string($conn, $_POST['password']);
    $t = mysqli_real_escape_string($conn, $_POST['tipoUsuario']);

    if ($u != "" && $p != "" && $t != "") {
        // Query DML para insertar el registro del nuevo alumno o docente
        $sqlReg = "INSERT INTO usuarios (nombre, contraseña, tipo_usuario) VALUES ('$u', '$p', '$t')";
        if (mysqli_query($conn, $sqlReg)) {
            $_SESSION['usuario_logeado'] = $u;
            $_SESSION['password_logeado'] = $p;
            $_SESSION['tipo_logeado'] = $t;
            $mensajeAlertaScript = "alert('sesion creada correctamente');";
        }
    }
}

// CONTROLADOR DE LOGEO (VERIFICACIÓN CONTRA LA BASE DE DATOS)
if (isset($_POST['accion_ingresar'])) {
    $u = mysqli_real_escape_string($conn, $_POST['usuario']);
    $p = mysqli_real_escape_string($conn, $_POST['password']);
    $t = mysqli_real_escape_string($conn, $_POST['tipoUsuario']);

    // Query DML para consultar si los datos coinciden exactamente
    $sqlBusqueda = "SELECT * FROM usuarios WHERE nombre='$u' AND contraseña='$p' AND tipo_usuario='$t' LIMIT 1";
    $resultadoBusqueda = mysqli_query($conn, $sqlBusqueda);

    if (mysqli_num_rows($resultadoBusqueda) > 0) {
        $_SESSION['usuario_logeado'] = $u;
        $_SESSION['password_logeado'] = $p;
        $_SESSION['tipo_logeado'] = $t;
        $mensajeAlertaScript = "alert('Inicio de sesion exitoso'); window.location.href='index.php?ir_al_catalogo=true';";
    }
}
?>





B. Vista del Cliente (Frontend en HTML5 & JS)
El navegador renderiza el formulario de acceso y utiliza una validación dinámica en JavaScript. Si el servidor detecta una sesión previa almacenada ($_SESSION), el cliente puede brincar automáticamente el formulario de login e ingresar directo al menú.

<section class="login" id="ventanaLogin">
  <h2>Inicio de Sesión</h2>
  <form method="POST" action="index.php">
    <input type="text" name="usuario" id="usuario" placeholder="Nombre del usuario o Matrícula" required>
    <input type="password" name="password" id="password" placeholder="Contraseña" required>
    
    <select name="tipoUsuario" id="tipoUsuario" required>
      <option value="">Seleccione tipo de usuario</option>
      <option value="Alumno">Alumno</option>
      <option value="Docente">Docente</option>
      <option value="Administrativo">Administrativo</option>
    </select>

    <button type="submit" name="accion_ingresar" class="btn-verde">INICIAR SESIÓN</button>
    <button type="submit" name="accion_registrar" class="btn-gris">REGÍSTRATE</button>
  </form>
</section>

<script>
  // Script para saltar la vista si la sesión ya fue validada por el servidor
  function entrarDirectoAlCatalogo() {
     document.getElementById("nombreAlumno").innerText = "<?php echo $_SESSION['usuario_logeado']; ?>";
     document.getElementById("ventanaLogin").classList.add("oculto");
     document.getElementById("ventanaProductos").classList.remove("oculto");
  }
</script>




13.2 Módulo de Productos e Inventario
Este módulo lee los productos disponibles directamente de la base de datos y descuenta las existencias físicas cuando el alumno concreta una compra.
A. Vista del Servidor (Backend en PHP & SQL)
El servidor ejecuta un flujo doble:
1.	Lectura (SELECT): Trae la lista de alimentos, precios y el inventario disponible.
2.	Actualización transaccional (INSERT y UPDATE): Guarda la orden del pedido y disminuye el stock original de los platillos vendidos para que no ocurran sobreventas.



 
<?php
// 1. OBTENER EL MENÚ DEL DÍA CON SUS EXISTENCIAS EN TIEMPO REAL
$queryProductos = "SELECT id_producto, nombre_producto, precio, imagen, IFNULL(stock, 15) as stock FROM productos";
$resultadoProductos = mysqli_query($conn, $queryProductos);

// 2. PROCESAR LA COMPRA Y DESCONTAR DEL STOCK
if(isset($_POST['finalizar_pedido_bd'])){
    $total_pagar = floatval($_POST['total_hidden']);
    $productos_json = json_decode($_POST['productos_json_hidden'], true);

    // Inserción en la tabla de pedidos generales
    $sqlPedido = "INSERT INTO pedidos (id_usuario, total, estado) VALUES ('1', '$total_pagar', 'Pagado')";
    mysqli_query($conn, $sqlPedido);
    $id_pedido = mysqli_insert_id($conn);

    // Bucle para iterar cada artículo comprado, insertarlo en el detalle y actualizar stock
    foreach($productos_json as $item) {
        $id_p = mysqli_real_escape_string($conn, $item['id']);
        $cant = intval($item['cant']);

        // Insertar desglose en detalle_pedido
        $sqlDetalle = "INSERT INTO detalle_pedido (id_pedido, id_producto, cantidad) VALUES ('$id_pedido', '$id_p', '$cant')";
        mysqli_query($conn, $sqlDetalle);

        // Disminución del inventario en la base de datos (DML Update)
        $sqlStock = "UPDATE productos SET stock = stock - $cant WHERE id_producto = '$id_p'";
        mysqli_query($conn, $sqlStock);
    }
}
?>








B. Vista del Cliente (Frontend en HTML5 & JS)
Los datos recolectados por PHP se iteran dentro de una cuadrícula adaptable (CSS Grid). Cada tarjeta (.card) cuenta con un control numérico limitado por el stock máximo entregado por la consulta SQL.

<section class="productos" id="ventanaProductos">
  <h2>Productos Disponibles</h2>
  <div class="contenedor">
    <?php while($prod = mysqli_fetch_assoc($resultadoProductos)): ?>
      <div class="card" title="Piezas disponibles: <?php echo $prod['stock']; ?> unidades.">
        <img src="<?php echo $prod['imagen']; ?>">
        <h3><?php echo $prod['nombre_producto']; ?></h3>
        <p>$<?php echo number_format($prod['precio'], 2); ?></p>
        
        <div class="control-eleccion">
           <label>Cantidad:</label>
           <input type="number" id="cant_<?php echo $prod['id_producto']; ?>" value="1" min="1" max="<?php echo $prod['stock']; ?>">
        </div>
        <button onclick="comprar('<?php echo $prod['id_producto']; ?>', '<?php echo $prod['nombre_producto']; ?>', <?php echo $prod['precio']; ?>)">Agregar</button>
      </div>
    <?php endwhile; ?>
  </div>
</section>
13.3 Módulo de Encuesta de Satisfacción
Este módulo recopila la opinión de la comunidad escolar (alumnos y docentes) respecto a la calidad del servicio e higiene de la cafetería, permitiendo almacenar la información en una tabla independiente de la base de datos para análisis administrativos.
 
A. Vista del Servidor (Backend en PHP & SQL)
El backend procesa la petición de guardado capturando las variables numéricas y cualitativas de la encuesta mediante un método POST seguro y sanitizado.

<?php
// CONTROLADOR COMPLEMENTARIO: GUARDAR ENCUESTA DE SATISFACCIÓN
if (isset($_POST['enviar_encuesta'])) {
    $usuario_encuesta = mysqli_real_escape_string($conn, $_POST['usuario_anonimo']);
    $calificacion_servicio = intval($_POST['calificacion_servicio']); // Almacena del 1 al 5
    $comentarios = mysqli_real_escape_string($conn, $_POST['comentarios']);

    if ($calificacion_servicio > 0) {
        // Query DML para registrar la evaluación de calidad
        $sqlEncuesta = "INSERT INTO respuestas_encuesta (usuario, calificacion, comentarios, fecha_registro) 
                        VALUES ('$usuario_encuesta', '$calificacion_servicio', '$comentarios', NOW())";
        
        if (mysqli_query($conn, $sqlEncuesta)) {
            echo "<script>alert('¡Muchas gracias por tus comentarios! Nos ayudan a mejorar el servicio.');</script>"    }
}  >?
B. Vista del Cliente (Frontend en HTML5 & JS)
Aparece como una sección interactiva o formulario de retroalimentación final una vez que el pedido es asentado en caja. Utiliza selectores amigables de radio o listados numéricos.

<section class="login" id="ventanaEncuesta" style="max-width: 500px; margin-top: 20px;">
  <h2>Encuesta de Satisfacción</h2>
  <p style="text-align: center; margin-bottom: 15px; font-size: 14px; color: #4a5568;">
     Tu opinión nos ayuda a ofrecer alimentos frescos y de excelente calidad.
  </p>
  
  <form method="POST" action="index.php">
    <input type="hidden" name="usuario_anonimo" value="<?php echo isset($_SESSION['usuario_logeado']) ? $_SESSION['usuario_logeado'] : 'Anónimo'; ?>">
    
    <label style="font-weight: bold; display: block; margin-bottom: 5px;">¿Cómo calificarías el servicio y la higiene de hoy?</label>
    <select name="calificacion_servicio" required>
       <option value="">-- Selecciona una opción --</option>
       <option value="5">Excellent ⭐⭐⭐⭐⭐</option>
       <option value="4">Bueno ⭐⭐⭐⭐</option>
       <option value="3">Regular ⭐⭐⭐</option>
       <option value="2">Malo ⭐⭐</option>
       <option value="1">Pésimo ⭐</option>
    </select>

    <label style="font-weight: bold; display: block; margin-top: 15px; margin-bottom: 5px;">¿Tienes sugerencias o algún platillo que te gustaría agregar?</label>
    <input type="text" name="comentarios" placeholder="Escribe aquí tus comentarios..." maxlength="250">

    <button type="submit" name="enviar_encuesta" class="btn-verde" style="margin-top: 15px;">ENVIAR RETROALIMENTACIÓN</button>
  </form>
</section>


 
PREGUNTAS DE CONCLUSION
1. ¿Cuál es la diferencia técnica entre una petición HTTP que consulta contenido estático y una que consume una API REST en tu proyecto de la cafetería?
•	Petición de Contenido Estático: El cliente solicita un recurso físico preexistente en el disco del servidor (como la imagen logo.jpg o un archivo CSS). El servidor web simplemente localiza el archivo y lo transmite por la red sin realizar ningún procesamiento lógico ni consultar datos.
•	Petición a la API REST (index.php dinámico): El cliente envía parámetros específicos (como finalizar_pedido_bd mediante un método POST). El servidor interrumpe el flujo plano, activa el intérprete de PHP, ejecuta consultas SQL condicionales para interactuar con la base de datos MySQL (por ejemplo, restar stock) y genera una respuesta computada en tiempo real antes de contestar al navegador.
2. ¿Cómo garantiza tu servidor que los datos capturados en el formulario del frontend lleguen correctamente a las tablas de la base de datos sin errores de integridad?
El servidor web implementa tres capas de control estrictas basadas en tu archivo index.php:
•	Sanitización y Seguridad: Filtra todas las cadenas con mysqli_real_escape_string para anular caracteres especiales que puedan romper las consultas o provocar inyecciones SQL.
•	Casteo de Tipos Explicito: Convierte las entradas numéricas mediante funciones como floatval() para el total económico y intval() para el volumen de piezas, evitando inconsistencias de datos.
•	Validación de Existencias: Utiliza el atributo max alimentado dinámicamente desde la base de datos en el input numérico para impedir que el cliente envíe compras superiores al stock físico disponible en la cafetería.
3. ¿Por qué es fundamental que el intercambio de información entre tu servidor y la interfaz del cliente se realice en formato JSON?
•	Estructuración de Datos Complejos: El carrito de compras de la cafetería maneja colecciones de múltiples productos en un solo pedido (ID, cantidad, subtotal). JSON permite agrupar y serializar toda esta matriz en una única cadena de texto limpia (JSON.stringify(carrito)).
•	Compatibilidad Interplataforma: JavaScript en el frontend puede construir el objeto de manera nativa, y PHP en el backend lo recibe y lo decodifica instantáneamente en un arreglo asociativo mediante json_decode($_POST['...'], true), permitiendo recorrer los artículos con un bucle foreach de forma limpia y eficiente.
4. Selecciona una de las operaciones CRUD (Create, Read, Update, Delete) de tu sistema y explica qué función cumple para la gestión del inventario de la cafetería.
•	Operación Seleccionada: UPDATE (Actualización).
•	Función en el Inventario: Esta operación es la encargada de mantener la consistencia física del mostrador. Cada vez que un pedido se consolida con éxito, el servidor ejecuta la instrucción DML:
UPDATE productos SET stock = stock - $cant WHERE id_producto = '$id_p'.
•	Impacto: Restar de forma automática y exacta las piezas adquiridas garantiza que el siguiente alumno vea reflejado en su interfaz (mediante el atributo de ayuda title de las tarjetas) el stock neto actualizado en tiempo real, erradicando por completo el riesgo de vender productos agotados.
5. ¿Cómo protege el uso de JWT (JSON Web Tokens) las rutas privadas del backend contra accesos no autorizados por parte de usuarios externos?
•	Mecanismo de Autenticación: Aunque tu proyecto actual centraliza la seguridad mediante persistencia de sesiones nativas de servidor con $_SESSION y el bloqueo visual .oculto de CSS, un esquema basado en JWT opera de forma totalmente desacoplada emitiendo un token firmado criptográficamente por el servidor al iniciar sesión correctamente.
•	Protección Activa: Cada vez que el frontend intenta consumir una ruta privada (como el catálogo o la pasarela de pagos), debe adjuntar dicho token en las cabeceras HTTP (Authorization: Bearer <token>). El backend valida la firma digital del token con una clave secreta; si el token fue alterado, expiró o no se proporciona, el servidor rechaza la solicitud de inmediato con un código de estado 401 Unauthorized, impidiendo que usuarios ajenos extraigan información del inventario o alteren las bases de datos 
14. Arquitectura Web y Flujo Dinámico
Investigación y Definición de Conceptos
•	Arquitectura Cliente-Servidor: Es un modelo de diseño de software en el que las tareas se reparten entre los proveedores de recursos o servicios, llamados servidores, y los demandantes, llamados clientes. El cliente realiza peticiones al servidor, el cual procesa la solicitud y retorna una respuesta.
•	Flujo Dinámico: Es el proceso de intercambio de información en tiempo real donde las páginas web no están estáticas en el servidor, sino que se construyen programáticamente usando lógica de programación (Backend) y bases de datos según las acciones del usuario.

 
Aplicación a la Cafetería: Flujo de Información
Cuando un alumno presiona el botón "Comprar Producto" en su teléfono celular, el flujo de datos exacto es el siguiente:
1.	Fase de Cliente (Frontend): El navegador web del smartphone captura el evento del clic, recopila el id_producto, el id_usuario (alumno) y la cantidad. Empaqueta estos datos y genera una petición de red por protocolo HTTP/HTTPS utilizando el método POST.
2.	Tránsito por Internet: La petición viaja codificada a través de la red local escolar o datos móviles hacia la dirección IP del servidor donde está alojado el backend de la cafetería.
3.	Fase de Servidor (Backend): El servidor web intercepta la petición entrante. La lógica de programación valida el token de seguridad y analiza los parámetros recibidos.
4.	Fase de Base de Datos: El backend abre un canal de comunicación con MySQL y ejecuta una consulta de lectura para verificar si el stock del producto solicitado es mayor o igual a la cantidad requerida. Si la respuesta de la base de datos confirma las existencias, se procede a guardar el registro del pedido en la base de datos y a descontar el inventario.
 
14.1 Almacenamiento Persistente y Conexión (Investiga y define estos conceptos, haz un diagrama de actividades)
Investigación y Definición de Conceptos
•	Almacenamiento Persistente: Se refiere a la característica de los datos de sobrevivir tras el cierre de la sesión o el apagado del dispositivo informático que los generó. Se logra mediante bases de datos.
•	Conexión a Base de Datos: Es el canal físico o virtual que establece el servidor de aplicaciones con el sistema gestor de bases de datos (SGBD) para poder intercambiar instrucciones y datos bajo credenciales autorizadas.

Documentación del Motor de Base de Datos
El proyecto utiliza MySQL como sistema gestor de bases de datos relacional. El almacenamiento es estructurado en tablas vinculadas por llaves primarias (PRIMARY KEY) y relaciones lógicas de negocio.

Consulta de Lectura (DML - Mostrar Menú): 

Consulta de Escritura (DML - Insertar Pedido):
Consulta de Actualización (DML - Descontar Stock):





 
14.2 Construcción de la API REST y Comunicación JSON
Investigación y Definición de Conceptos
•	API REST: Interfaz de Programación de Aplicaciones basada en la arquitectura REST (Representational State Transfer). Utiliza los verbos del protocolo HTTP para realizar operaciones sobre recursos identificados por URLs limpias.
•	JSON (JavaScript Object Notation): Formato ligero de intercambio de datos, de fácil lectura y escritura para humanos, y fácil de interpretar y generar para las computadoras.

 
Tabla de Endpoints de la API REST
A continuación se documenta el diseño de las rutas de la API para intercomunicar el software:
Endpoint	Método HTTP	Descripción	Recurso Manipulado
/api/usuarios/login	POST	Autentica al usuario (alumno/docente) y devuelve el token.	Sesión / Seguridad
/api/productos	GET	Obtiene el catálogo completo de alimentos disponibles.	Menú de la Cafetería
/api/pedidos	POST	Crea una nueva orden de compra desde el carrito escolar.	Historial de Pedidos
/api/productos/:id	PUT	Actualiza la información o el stock de un producto específico.	Inventario
/api/pedidos/:id	DELETE	Cancela de forma lógica o física un pedido erróneo.	Cancelaciones

 
Aplicación a la Cafetería: Paquete de Datos JSON
Cuando el smartphone del estudiante envía la orden, el cuerpo de la petición (Body) viaja con la siguiente estructura JSON:
















Códigos de Estado HTTP Configurados
•	201 Created: Se responde cuando el JSON fue procesado correctamente, el stock disminuyó y el pedido está listo para ser recogido en la cocina.
•	400 Bad Request: Se responde si los parámetros están incompletos, la firma de datos es errónea, o el alumno solicita una cantidad de tortas o refrescos que supera el stock real en ese instante.
•	401 Unauthorized: El alumno no ha iniciado sesión o su token de seguridad expiró.
 
14.3 Implementación de Operaciones CRUD
Investigación y Definición de Conceptos
•	CRUD: Acrónimo que representa las cuatro funciones básicas de una base de datos persistente: Create (Crear registros), Read (Leer/Leer contenido), Update (Actualizar registros) y Delete (Borrar registros).
Gráfico Representativo de Operaciones
Código de Operaciones CRUD del Backend




















14.4 Autenticación y Seguridad
Investigación y Definición de Conceptos
•	Autenticación: Proceso criptográfico e informático para verificar que una entidad o usuario es verdaderamente quien dice ser (ej. mediante credenciales de acceso).
•	JWT (JSON Web Tokens): Es un estándar abierto (RFC 7519) basado en JSON para enviar de forma segura tokens de acceso entre el frontend y el backend. La información es confiable porque está firmada digitalmente.
Infografía de la Importancia de Seguridad en la App Escolar
¿Por qué proteger la App de la Cafetería CECYTEM?
•	Protección de Datos Personales: Evita la filtración de matrículas, correos y nombres completos de la comunidad escolar.
•	Integridad Financiera: Al usar métodos como "Tarjeta" o "Pago Digital", impide que atacantes simulen transacciones o inyecten códigos para ordenar comida sin pagar.
•	Control Operativo: Previene el sabotaje del menú o que usuarios malintencionados alteren ilegalmente los inventarios de los productos.
Implementación Técnica de JWT en el Backend
Cuando el alumno inicia sesión con su cuenta institucional en el sistema, el funcionamiento de la protección con JWT se divide en dos fases críticas:
1.Generación del Token (Login Exitoso): El backend comprueba la contraseña. Si es correcta, construye un payload con la clave del usuario y el rol, y lo firma criptográficamente con una frase secreta custodiada en el servidor.

 
2.Validación de Rutas Privadas (Middleware de Protección): Cada vez que el alumno intenta consultar su historial de compras o ejecutar la acción de comprar un producto, el frontend adjunta el token en la cabecera HTTP de la petición (Authorization: Bearer <token>). El servidor intercepta este dato antes de interactuar con la base de datos:
 

Este conjunto de diagramas, explicaciones de flujo cliente-servidor, sentencias DML/DDL vinculadas a bdcafeteria.sql y el esquema REST/JWT demuestran el cumplimiento completo de las directrices de ingeniería de software para el segundo avance del proyecto.
 
15.IMPLEMENTACIÓN, DESPLIEGUE Y GESTIÓN DE APLICACIONES WEB 
REPOSITORIO GIT 
15.1 Investigación y Conceptos Fundamentales 
Git es un sistema de control de versiones distribuido diseñado para rastrear cambios en el código fuente durante el desarrollo de software. Permite que múltiples desarrolladores trabajen simultáneamente en un mismo proyecto sin sobrescribir el trabajo de los demás. 
• Funciones Principales:   - git init: Inicializa un repositorio local. 
-	git add .: Agrega los archivos modificados al área de preparación (staging area).   - git commit -m "mensaje": Registra los cambios guardados permanentemente en el historial con un comentario descriptivo. 
-	git push: Sube los cambios del repositorio local al repositorio remoto. 
• 	Usos 	y 	Ventajas: 
  - Historial completo: Permite revertir el código a cualquier versión anterior en caso de fallos.   - Trabajo en ramas (Branching): Se pueden desarrollar características nuevas (como el módulo de pagos de la cafetería) de forma aislada sin afectar la versión estable.   - Sincronización remota: Al vincularlo con plataformas como GitHub, el código queda respaldado de forma segura en la nube. Datos del Repositorio Remoto 
•	Enlace 	del 	Perfil 	de 	GitHub: 	https://github.com/IkerYamitRiosPerez 
•	Enlace del Repositorio del Proyecto: https://github.com/IkerYamitRiosPerez/cafeteriacecytem-web 
•	Evidencia de repositorio: [Espacio reservado para la captura de pantalla de la estructura de archivos en GitHub, incluyendo index.php]. 

 
DESPLIEGUE DE FRONTEND 
15.2 Investigación y Funciones 
El despliegue de Frontend consiste en transferir y publicar los componentes visuales de la aplicación (archivos HTML, hojas de estilo CSS y lógica del cliente en JavaScript) en un servidor web accesible en todo el mundo. 
Funciones del Frontend en la Cafetería: En nuestro proyecto index.php, el frontend se encarga de renderizar la interfaz de inicio de sesión, el menú dinámico con las tarjetas de productos, la barra acumuladora flotante (carrito de compras) y el formulario interactivo para la selección del método de pago. 
Enlace de Acceso Público 
• 	URL 	de 	Producción 	(Frontend): 	https://cafeteria-cecytem.vercel.app • Evidencia de interfaz pública: [Espacio para captura de pantalla de la aplicación de la cafetería cargada y respondiendo desde el enlace web público]. 
 	  
DESPLIEGUE DE BACKEND 
15.3 Investigación y Funciones 
El backend gestiona el procesamiento lógico de los datos, las interacciones con el servidor y la persistencia en la base de datos. Las funciones del backend en la cafetería incluyen: 
1. Autenticación: Validación e inserción segura de usuarios (accion_registrar y accion_ingresar). 2. Procesamiento del Pedido: Desglose del carrito a través de objetos JSON (productos_json_hidden), cálculo del total e inserción relacional en las tablas pedidos, detalle_pedido 	y 	pagos. 3. Control de Inventario: Ejecución de sentencias UPDATE productos SET stock = stock - cantidad para descontar insumos en tiempo real. 
 Infraestructura de Servidor Dinámico en la Nube 
Para alojar aplicaciones dinámicas basadas en PHP y bases de datos relacionales MySQL (cafeteria_cecytem), se empleó un servicio de Nube con soporte completo para tecnologías LAMP/LEMP. 
•	Plataforma 	de 	Despliegue 	Dinámico: 	Railway 	/ 	Render 
•	Enlace de la API/Servidor backend: https://cafeteria-cecytem-backend.railway.app/index.php 
 	  
CONFIGURACIÓN 
15.4 Variables de Entorno y Gestión de Dependencias 
Para trasladar la aplicación de un entorno local (localhost) a uno de producción seguro, se configuraron variables de entorno que ocultan las credenciales sensibles del código fuente y se gestionaron las cookies de sesión persistente. 
1.	Configuración de Sesiones Permanentes (PHP): Como se observa en el código, se establecieron tiempos de vida máximos para garantizar que el alumno no tenga que iniciar sesión constantemente en cada receso:    ini_set('session.cookie_lifetime', 	31536000);    ini_set('session.gc_maxlifetime', 	31536000);    session_start(); 
2.	Variables de Conexión a la Base de Datos: En producción, los parámetros locales (localhost, root, "") se reemplazan dinámicamente mediante variables de entorno del servidor:    - $_ENV['DB_SERVER'] (Host de la base de datos en la nube).    - $_ENV['DB_USER'] (Usuario seguro con privilegios restringidos).    - $_ENV['DB_PASS'] (Contraseña segura encriptada). 
   - $_ENV['DB_NAME'] (cafeteria_cecytem).  
DOCUMENTACIÓN TÉCNICA 
Técnica de Despliegue 
Se utilizó una técnica de Integración y Despliegue Continuo (CI/CD) vinculando el repositorio de Git con la plataforma en la nube. Cada git push a la rama principal (main) desencadena de forma automatizada una nueva compilación y publicación del servicio sin caídas en el sistema. 
Arquitectura del Sistema 
El 	sistema 	se 	rige 	bajo 	una 	Arquitectura 	Cliente-Server 	de 	3 	Capas: 
•	Capa de Presentación (Frontend): HTML5 para la estructura, CSS3 incrustado para el diseño corporativo institucional (colores verdes de CECYTEM) y JavaScript nativo para la interactividad del carrito de compras. 
•	Capa de Lógica de Negocio (Backend): Scripts en lenguaje PHP encargados de validar solicitudes, manejar sesiones permanentes e ingresar datos de forma segura mediante funciones de escape. 
•	Capa de Datos: Base de datos relacional en MySQL constituida por las tablas esenciales: usuarios, productos, pedidos, detalle_pedido y pagos. 
Pasos de Configuración para Despliegue 
1. Exportar la base de datos local cafeteria_cecytem.sql desde phpMyAdmin. 2. Crear una base de datos MySQL en el servidor de producción en la nube e importar el script SQL. 
3. Actualizar los parámetros de la función mysqli_connect() de PHP con las credenciales del servidor 	en 	la 	nube. 4. Subir los archivos del proyecto al directorio público web remoto mediante Git o un cliente FTP. 
 	  
16.MANUAL DE USUARIO  

16.1 INTRODUCCIÓN  
1.1 Descripción general del sistema  
El Sistema de Cafetería Escolar CECYTEM es una solución de software basada en plataforma web orientada a la automatización, gestión y agilización de solicitudes de consumo alimentario dentro del plantel educativo. El sistema integra un entorno de autenticación, visualización dinámica de productos e inventarios, un carro de compra interactivo con actualización en tiempo real y un submódulo de preprocesamiento de pagos que culmina en la expedición de un ticket formal de control.  
1.2 Contexto del proyecto  
El proyecto surge bajo la premisa operativa expresada en su eslogan institucional: "Agilidad en tu receso". Tradicionalmente, los periodos de descanso en los planteles escolares sufren de saturación en los puntos de venta debido a la alta demanda de consumo simultánea. Esta herramienta tecnológica se introduce para mitigar las largas filas, permitiendo que los usuarios pre-ordenen sus alimentos desde una interfaz simplificada conectada de forma directa a la base de datos de la cafetería.  
1.3 Alcance del sistema  
El sistema cubre las siguientes etapas operativas:  
•	Registro y control de acceso permanente de usuarios clasificados por roles institucionales (Alumnos, Docentes, Administrativos).  
•	Consulta interactiva del catálogo de productos con sincronización de precios e imágenes.  
•	Validación automática de existencias frente al stock real alojado en el servidor.  
•	Estructuración dinámica del pedido mediante acumulación física y cálculo inmediato de subtotales.  
•	Gestión transaccional a través de un árbol de decisión según el método de pago elegido (Efectivo, Tarjeta, Pago Digital).  
•	Impacto y decremento automatizado en almacén.  
•	Generación de comprobantes estructurados para la recolección física en barra.  
1.4 Importancia y propósito de la herramienta  
La trascendencia de la plataforma radica en la optimización del tiempo de los estudiantes y el personal del CECYTEM. Al delegar la captura, el cálculo de costos y la selección del método de pago a una interfaz de autoservicio, se reduce de manera drástica el tiempo de procesamiento. 
16.2 OBJETIVOS DEL MANUAL
2.1 Objetivo general
Proporcionar una guía técnica y operativa exhaustiva dirigida al usuario final, que describa detalladamente cada uno de los componentes, pantallas, formularios, funciones lógicas y flujos de trabajo que integran el Sistema de Cafetería Escolar CECYTEM, garantizando un uso correcto, seguro y eficiente de la plataforma.
2.2 Objetivos específicos
•	Instruir al usuario en los procesos de registro e inicio de sesión, detallando las políticas de persistencia de datos implementadas.
•	Explicar el funcionamiento del catálogo general de alimentos y las herramientas de manipulación del stock disponible.
•	Guiar paso a paso en el uso de la barra acumuladora flotante y las funciones de depuración de artículos seleccionados.
•	Detallar los mecanismos de selección de formas de pago y las validaciones requeridas para la emisión exitosa del ticket de compra.
•	Ofrecer un catálogo de solución de problemas operativos y un glosario técnico basado estrictamente en el código base del sistema.
2.3 Público objetivo
Este manual está diseñado de forma exclusiva para los usuarios legítimos de la aplicación:
•	Alumnos: Estudiantes inscritos que requieren optimizar su tiempo en el receso.
•	Docentes: Personal académico que utiliza la plataforma para programar sus consumos.
•	Administrativos: Personal de apoyo técnico u operativo de la institución que interactúa con la interfaz web.


 
16.3 DESCRIPCIÓN GENERAL DEL SISTEMA
3.1 Funcionalidad principal
La funcionalidad central del software consiste en interconectar la demanda de alimentos de la comunidad del CECYTEM con la base de datos centralizada de la cafetería, permitiendo la reserva, cálculo financiero y registro transaccional de pedidos de manera autónoma. El sistema opera a través de un único archivo maestro (index.php) que altera su renderizado visual mediante variables de estado de sesión y parámetros de transferencia por método HTTP POST y GET.
3.2 Componentes principales
1.	Módulo de Configuración de Entorno y Persistencia: Administra el ciclo de vida extendido de las variables de sesión del servidor.
2.	Capa de Conexión de Datos: Enlace mediante controlador nativo a la base de datos de soporte.
3.	Controlador de Autenticación: Gestiona las acciones de inserción (accion_registrar) y validación (accion_ingresar) de cuentas de usuarios.
4.	Motor de Despliegue de Menú: Consulta e imprime en pantalla los registros vigentes de la tabla de productos.
5.	Manejador Transaccional de Pedidos: Procesa el arreglo JSON enviado desde el cliente, genera los registros en las tablas de control correspondientes (pedidos, detalle_pedido, pagos) y realiza la actualización de existencias en almacén.
3.3 Arquitectura funcional
El flujo de datos del sistema sigue un modelo monolítico interactivo estructurado de la siguiente forma:
[Interfaz de Usuario / Cliente (HTML/JS)] -> (Envío de Formularios POST / Parámetros GET) -> [Lógica de Control en Servidor (PHP)] -> (Consultas SQL nativas) -> [Base de Datos Local (MySQL/MariaDB)] conteniendo tablas de usuarios, productos, pedidos, detalle_pedido y pagos.
3.4 Alcance operativo
El alcance operativo está delimitado por las tablas y campos estructurados en la base de datos. El sistema procesa de forma nativa productos con atributos de identificación, nombre, precio, ruta de imagen y cantidad disponible. Toda operación financiera genera de forma estricta un estado transaccional inicial de 'Pagado' una vez confirmado el método de pago por el cliente en la interfaz gráfica.

 
16.4 REQUISITOS PREVIOS
4.1 Hardware requerido
Información no especificada en la documentación fuente.
4.2 Software requerido
Para la correcta ejecución e interacción con el sistema, el entorno debe contar con los siguientes elementos de software:
•	Servidor Web: Intérprete de PHP local (localhost).
•	Sistema Gestor de Base de Datos: Servidor MySQL o MariaDB que aloje de forma estricta la base de datos con el nombre específico cafeteria_cecytem.
•	Navegador Web: Cualquier suite informática moderna compatible con la interpretación de estilos CSS nativos, renderizado de cajas flexibles (Flexbox), mallas estructuradas (Grid) y ejecución del motor de JavaScript.
4.3 Accesos necesarios
El sistema requiere el establecimiento de una conexión por parte del script hacia el gestor de base de datos utilizando los siguientes parámetros preconfigurados:
•	Servidor: localhost
•	Usuario BD: root
•	Contraseña BD: "" (Cadena de caracteres vacía)
•	Base de Datos: cafeteria_cecytem
4.4 Configuraciones previas
El sistema realiza dos directivas de configuración crítica en el archivo de inicialización del servidor antes de iniciar formalmente la sesión:
•	ini_set('session.cookie_lifetime', 31536000); Configura el tiempo de vida de la cookie de sesión en el navegador por un periodo total de un año calendario, garantizando la permanencia del usuario.
•	ini_set('session.gc_maxlifetime', 31536000); Modifica el tiempo de expiración del recolector de basura del servidor.


 
16.5 ACCESO AL SISTEMA
5.1 Procedimiento de ingreso
Al cargar el archivo principal index.php en el navegador, el sistema evalúa de forma automática si existe la variable de control $_GET['ir_al_catalogo'] y si la bandera lógica $pedidoGuardado se encuentra en estado falso. Si se cumplen estas condiciones base, el usuario es situado en la pantalla de bienvenida y autenticación inicial.
5.2 Autenticación
El sistema provee dos mecanismos mediante el formulario de acceso:
1.	Inicio de Sesión (accion_ingresar): El usuario captura sus datos. El sistema ejecuta una consulta parametrizada para buscar coincidencias exactas. Si es exitoso, se almacenan las variables de sesión y se redirige al catálogo.
2.	Registro de Cuenta (accion_registrar): En caso de no contar con credenciales previas, el usuario digita su nombre, establece una contraseña y selecciona su perfil para realizar la inserción directa en la base de datos.
5.3 Gestión de usuarios
El sistema clasifica y valida de forma estricta a los usuarios en tres perfiles o roles operativos distintos a través de un campo de selección balanceado: Alumno, Docente y Administrativo.
5.4 Recuperación de acceso
Información no especificada en la documentación fuente.


 
16.6 INTERFAZ DEL USUARIO
6.1 Descripción detallada de cada pantalla
•	Pantalla 1 (Autenticación): Presenta un bloque de bienvenida con un formulario de ancho máximo de 420 píxeles, esquinas redondeadas y un borde superior decorativo verde (#0b5d3b).
•	Pantalla 2 (Catálogo): Posee un encabezado con degradado lineal de verde, el logotipo circular del CECYTEM y las tarjetas de productos dispuestas en una rejilla adaptativa.
•	Pantalla 3 (Módulo de Pago): Consiste en una sección centrada con un desglose de filas en líneas punteadas, visualización destacada de totales y el selector de vía de pago.
•	Pantalla 4 (Ticket Final): Bloque blanco estilizado como un ticket físico de ancho máximo de 400 píxeles, utilizando tipografía monoespaciada para emular terminales de venta.
6.2 Elementos de control (Menús, Botones y Formularios)
El sistema utiliza clases estandarizadas como .btn-verde (fondo verde institucional para iniciar acciones), .btn-gris (fondo gris para registros o cancelaciones), inputs de texto estructurados con enfoques translúcidos, y elementos específicos como .btn-quitar-item (un botón circular rojo con una cruz para remover elementos del carrito) y #btnPagarFinal (un botón amarillo dorado para consolidar la transacción en la base de datos).   

16.7 FUNCIONALIDADES PRINCIPALES
7.1 Gestión de Registro de Usuarios
Permite almacenar de forma permanente la identidad del usuario asociado a su rol institucional en la tabla usuarios. Se validan que los campos no se encuentren vacíos y se aplica protección de escape de cadenas.
7.2 Autenticación e Inicio de Sesión
Valida las credenciales ingresadas. Si el usuario ya cuenta con una sesión persistente activa gracias a la configuración de cookies a largo plazo, el sistema bloquea automáticamente los campos en modo de solo lectura (readonly) mostrando un mensaje de bienvenida de sesión activa.
7.3 Navegación y Adición al Carrito de Pedidos
Facilita la consulta del menú controlando de manera estricta que la cantidad seleccionada por el usuario no sobrepase la propiedad dinámicamente obtenida desde el inventario real (max del stock del producto).
7.4 Gestión Dinámica y Depuración del Pedido
A través de una barra acumuladora flotante en la parte inferior, se muestra en tiempo real la cantidad total de artículos y el monto económico acumulado, permitiendo descartar elementos de forma inmediata.
7.5 Configuración Transaccional del Método de Pago
Implementa un árbol de decisiones lógico en JavaScript para guiar al usuario según elija Efectivo, Tarjeta o Pago Digital, requiriendo confirmaciones nativas antes de habilitar el procesamiento final.
7.6 Procesamiento Final del Pedido e Impacto en Almacén
Al confirmar, el backend en PHP realiza inserciones atómicas en las tablas pedidos, detalle_pedido y pagos, ejecutando simultáneamente la sentencia SQL 'UPDATE productos SET stock = stock - cantidad' para decrementar las existencias reales.


 
 
16.8 PROCEDIMIENTOS OPERATIVOS
8.1 Procedimiento A: Flujo Completo de Compra de Alimentos Objetivo:
Completar una adquisición alimenticia de forma autónoma.
Requisitos: Estar registrado y contar con conexión local.
Pasos detallados:
1.	Acceda e inicie sesión especificando su rol.
2.	Navegue en el catálogo, configure las cantidades y presione 'Agregar al Pedido'.
3.	Verifique el subtotal en la barra inferior flotante.
4.	Haga clic en 'Ir al Pago', seleccione la forma de liquidación y acepte los diálogos de confirmación.
5.	Presione el botón amarillo 'PROCESAR PAGO Y GENERAR TICKET' y presente el comprobante obtenido en la barra de atención.
8.2 Procedimiento B: Modificación o Corrección de un Pedido en Proceso Objetivo:
 Reajustar la selección de artículos desde el módulo de pago. Pasos: El usuario localiza y presiona el botón gris '← Cambiar Alimentos' en la zona de pago. El sistema oculta el módulo actual y reabre la vista del menú general manteniendo el carrito intacto a través de la función actualizarBarra() para permitir una edición directa sin pérdida de progreso.
 



16.9 EJEMPLOS PRÁCTICOS DE USO

9.1 Escenario Práctico 1: Registro y Compra con Pago en Efectivo
El alumno 'Juan Pérez' ingresa por primera vez, se registra seleccionando el tipo de usuario 'Alumno', añade dos platillos idénticos desde la rejilla, revisa la barra verde flotante con el subtotal y avanza. Selecciona 'Efectivo', confirma el cuadro de diálogo correspondiente y presiona el botón amarillo para obtener su ticket impreso en pantalla, con el cual realiza el pago directo en caja física.
9.2 Escenario Práctico 2: Compra de un Docente con Sesión Permanente Activa
La profesora 'María Gómez' abre la aplicación en su dispositivo móvil. El sistema reconoce la persistencia de su sesión e inhabilita los inputs de login. Ella hace clic en 'VER MENÚ DE COMIDA', añade café y bocadillos, avanza al módulo de pago, escoge 'Pago Digital', acepta los requisitos de cobro por QR/CoDi y consolida el pedido, dirigiéndose directamente a la barra para recoger sus alimentos sin hacer filas.

 
 
16.10 GESTIÓN DE ERRORES Y SOLUCIÓN DE PROBLEMAS

•	Error crítico de conexión a la Base de Datos: Ocurre si el servicio MySQL está inactivo o si los parámetros de red locales difieren del script. Solución: Verificar el estado del servidor local y validar que exista la base de datos cafeteria_cecytem.
•	Alerta: 'Por favor complete todos los campos para registrarse': Causado por omitir datos obligatorios en el formulario. Solución: Digitar por completo usuario, contraseña y rol. • Alerta: 'Error: La matrícula/nombre o contraseña no son correctos': Causado por credenciales inexistentes o errores tipográficos. Solución: Validar la escritura de los campos de acceso.
•	Alerta: 'Introduzca una cantidad válida': Ocurre si el usuario ingresa un número negativo o no válido en el catálogo. Solución: Ajustar la casilla a un número entero positivo dentro de los límites de stock.
 
16.11 RECOMENDACIONES Y BUENAS PRÁCTICAS

•	Uso en equipos compartidos: Debido a que la cookie de sesión está programada para expirar en un año, está estrictamente prohibido utilizar la plataforma en computadoras públicas o compartidas, ya que la sesión permanecerá expuesta en modo de solo lectura.
•	Verificación de stock: El usuario debe observar el límite máximo numérico impuesto en cada tarjeta de alimento para asegurarse de que la cafetería cuenta con la materia prima de inmediato.
•	Sincronización del inventario: Los operarios de la cafetería deben alimentar de manera regular las tablas de base de datos para reflejar con precisión el stock físico disponible en cocina.
 
16.12 PREGUNTAS FRECUENTES (FAQ)

•	¿Cómo sabe el sistema mi tipo de perfil institucional?
Se define al registrarse o iniciar sesión mediante el menú desplegable obligatorio y queda guardado en la variable $_SESSION['tipo_logeado'].
•	¿Qué ocurre si intento pedir más piezas del stock disponible?
El sistema inhabilita la adición utilizando la propiedad HTML max vinculada dinámicamente al stock en la base de datos.
•	¿Se puede cambiar la orden a último momento?
Sí, presionando el botón '← Cambiar Alimentos' dentro de la pantalla de pagos para retornar al catálogo general de productos.
 
16.13 GLOSARIO DE TÉRMINOS TÉCNICOS

•	mysqli_connect: Función de PHP para abrir una conexión con el servidor MySQL.
•	mysqli_real_escape_string: Filtro que escapa caracteres especiales para mitigar inyecciones SQL.
•	session.cookie_lifetime: Tiempo de vida en segundos asignado a las cookies de sesión en el navegador.
•	json_decode: Función que transforma cadenas de texto estructuradas en JSON a variables nativas de PHP.
•	Grid / Flexbox: Modelos de maquetación CSS modernos utilizados para estructurar la rejilla de menú y la barra acumuladora flotante.
 
16.14 CONCLUSIONES Y PERSPECTIVAS FUTURAS
14.1 Resumen general
El Sistema de Cafetería Escolar CECYTEM unifica bajo una misma arquitectura web monolítica todas las etapas requeridas para agilizar el consumo de alimentos dentro de las instalaciones escolares. La perfecta sincronización entre las rutinas de control en JavaScript del lado del cliente y los procesos de afectación de base de datos en PHP del lado del servidor permiten una gestión transparente, desde la autenticación del estudiante o docente hasta el descuento de inventarios y la emisión final del comprobante transaccional.
14.2 Beneficios del sistema • Optimización operativa: Reduce sustancialmente los tiempos de espera y aglomera de forma ordenada las solicitudes de alimentos durante los recesos institucionales.
•	Precisión financiera: Automatiza los cálculos de costos, subtotales y desgloses de artículos, eliminando la posibilidad de errores aritméticos manuales durante el cobro.
•	Control de existencias: El decremento automatizado del inventario en almacén previene la sobreventa de platillos y ofrece una visibilidad real de los productos disponibles en la cafetería.
•	Flexibilidad transaccional: Habilita un abanico integral de opciones de pago que responde de manera óptima tanto a los esquemas tradicionales de efectivo como a las plataformas digitales modernas.
14.3 Ampliación del Contexto Conclusivo
La implementación del software representa un hito fundamental en la transformación digital de los servicios operativos internos del CECYTEM. Más allá de actuar como una simple interfaz de captura, el sistema redefine la interacción de los usuarios en su espacio de descanso, mitigando el estrés asociado a las filas rápidas del receso y maximizando el aprovechamiento del tiempo libre de alumnos y docentes. Al centralizar la lógica financiera y operativa en una base de datos local unificada, el software disminuye drásticamente el margen de error humano en los cortes de caja de la cafetería escolar, impidiendo desajustes entre las ventas reportadas y los insumos físicos consumidos.
14.4 Perspectivas de Evolución Tecnológica
Con base en la estructura modular presente en el código analizado, el sistema se encuentra técnicamente preparado para escalar hacia esquemas avanzados de automatización. Entre las líneas de desarrollo a futuro, basadas firmemente en la arquitectura actual, se contempla la integración de un panel administrativo avanzado de analítica de datos en tiempo real, el cual permitirá proyectar la demanda de alimentos según el rol institucional (por ejemplo, identificando patrones de consumo específicos de los Docentes frente a los Alumnos). Asimismo, la persistencia de cookies a largo plazo abre la posibilidad de implementar esquemas de fidelización institucionales o monederos electrónicos internos precargados, consolidando al CECYTEM como un referente de innovación tecnológica aplicada al bienestar y agilidad de su comunidad escolar.
 
16.15 Evidencia de Funcionamiento y Validación en Producción
TABLA 1. MATRIZ DE VALIDACIÓN DE PRUEBAS EN PRODUCCIÓN
Módulo Evaluado	Entrada de Prueba	Comportamiento Esperado		Resultado
Inicio de Sesión 	Usuario 	registrado 	Redirección inmediata 	ÉXITO (100%) existente 	al catálogo mediante
parámetro ir_al_catalogo=true.
Carrito Flotante		Adición múltiple de alimentos	Cálculo de subtotal exacto 	en 	JS 	y eliminación inmediata en caso de error.	ÉXITO (100%)
Módulo de Pago 	Selección de 'Efectivo' 	Despliegue 	de 	ÉXITO (100%) ventanas 	confirm() nativas y visibilidad del 	botón 	de confirmación.
Persistencia BD		Envío de formulario final	Inserciones 	exitosas en 	tablas 	SQL 	y decremento correcto en el inventario.	ÉXITO (100%)
Generación de Ticket 	Estado 	Visualización 	en 	ÉXITO (100%)
$pedidoGuardado = pantalla del ticket con true diseño de fuente
monoespaciada.


 
17. GitHub
Iker Github / https://github.com/Irkangel
 
 
Angel Github / https://github.com/angxllow479
 





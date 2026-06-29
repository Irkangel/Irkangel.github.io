-- =========================================
-- BASE DE DATOS CAFETERÍA ESCOLAR CECYTEM
-- =========================================

--CREATE DATABASE cafeteria_cecytem;

--USE cafeteria_cecytem;

-- =========================================
-- TABLA DE USUARIOS
-- =========================================

CREATE TABLE usuarios(

    id_usuario INT PRIMARY KEY AUTO_INCREMENT,

    nombre VARCHAR(100) NOT NULL,

    contraseña VARCHAR(100) NOT NULL,

    tipo_usuario ENUM(
        'Alumno',
        'Docente',
        'Administrativo',
        'Administrador'
    ) NOT NULL,

    correo VARCHAR(100),

    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

-- =========================================
-- TABLA DE PRODUCTOS
-- =========================================

CREATE TABLE productos(

    id_producto INT PRIMARY KEY AUTO_INCREMENT,

    nombre_producto VARCHAR(100) NOT NULL,

    descripcion TEXT,

    precio DECIMAL(10,2) NOT NULL,

    stock INT NOT NULL,

    imagen VARCHAR(255),

    categoria VARCHAR(100),

    estado ENUM('Disponible','Agotado')
    DEFAULT 'Disponible'

);

-- =========================================
-- TABLA DE PEDIDOS
-- =========================================

CREATE TABLE pedidos(

    id_pedido INT PRIMARY KEY AUTO_INCREMENT,

    id_usuario INT NOT NULL,

    fecha_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    total DECIMAL(10,2),

    estado ENUM(
        'Pendiente',
        'Preparando',
        'Entregado',
        'Cancelado'
    ) DEFAULT 'Pendiente',

    FOREIGN KEY(id_usuario)
    REFERENCES usuarios(id_usuario)

);

-- =========================================
-- TABLA DETALLE PEDIDO
-- =========================================

CREATE TABLE detalle_pedido(

    id_detalle INT PRIMARY KEY AUTO_INCREMENT,

    id_pedido INT NOT NULL,

    id_producto INT NOT NULL,

    cantidad INT NOT NULL,

    subtotal DECIMAL(10,2),

    FOREIGN KEY(id_pedido)
    REFERENCES pedidos(id_pedido),

    FOREIGN KEY(id_producto)
    REFERENCES productos(id_producto)

);

-- =========================================
-- TABLA DE PAGOS
-- =========================================

CREATE TABLE pagos(

    id_pago INT PRIMARY KEY AUTO_INCREMENT,

    id_pedido INT NOT NULL,

    metodo_pago ENUM(
        'Efectivo',
        'Tarjeta',
        'Transferencia'
    ) NOT NULL,

    monto DECIMAL(10,2),

    fecha_pago TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY(id_pedido)
    REFERENCES pedidos(id_pedido)

);

-- =========================================
-- INSERTAR PRODUCTOS
-- =========================================

INSERT INTO productos
(nombre_producto, descripcion, precio, stock, imagen, categoria)
VALUES

('Café',
'Cafe caliente escolar',
20.00,
50,
'cafe.jpg',
'Bebidas'),

('Hamburguesa',
'Hamburguesa con queso',
45.00,
30,
'hamburguesa.jpg',
'Comida'),

('Pizza',
'Rebanada de pizza',
40.00,
25,
'pizza.jpg',
'Comida'),

('Tacos',
'Tacos escolares',
25.00,
40,
'tacos.jpg',
'Comida'),

('Hot Dog',
'Hot dog clásico',
30.00,
20,
'hotdog.jpg',
'Comida'),

('Refresco',
'Refresco frío',
18.00,
60,
'refresco.jpg',
'Bebidas'),

('Jugo',
'Jugo natural',
15.00,
35,
'jugo.jpg',
'Bebidas'),

('Pan Dulce',
'Pan dulce surtido',
12.00,
50,
'pan.jpg',
'Postres'),

('Papas',
'Papas fritas',
22.00,
45,
'papas.jpg',
'Snacks'),

('Ensalada',
'Ensalada fresca',
35.00,
15,
'ensalada.jpg',
'Saludable');

-- =========================================
-- INSERTAR USUARIO ADMINISTRADOR
-- =========================================

INSERT INTO usuarios
(nombre, contraseña, tipo_usuario, correo)
VALUES

(
'Administrador',
'admin123',
'Administrador',
'admin@cecytem.com'
);

-- =========================================
-- CONSULTAS IMPORTANTES
-- =========================================

-- VER TODOS LOS PRODUCTOS

SELECT * FROM productos;

-- VER TODOS LOS PEDIDOS

SELECT * FROM pedidos;

-- VER PEDIDOS DE UN ALUMNO

SELECT
usuarios.nombre,
pedidos.id_pedido,
pedidos.fecha_pedido,
pedidos.estado

FROM pedidos

INNER JOIN usuarios
ON pedidos.id_usuario = usuarios.id_usuario;

-- VER DETALLE DE PEDIDOS

SELECT
pedidos.id_pedido,
productos.nombre_producto,
detalle_pedido.cantidad,
detalle_pedido.subtotal

FROM detalle_pedido

INNER JOIN productos
ON detalle_pedido.id_producto = productos.id_producto

INNER JOIN pedidos
ON detalle_pedido.id_pedido = pedidos.id_pedido;

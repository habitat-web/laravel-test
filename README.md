# Prueba de habilidades creando APIs REST con Laravel

La siguiente prueba pretender evaluar las habilidades y conocimientos creando APIs REST con Laravel. Además de eso se busca conocer la capacidad del evaluado adaptándose a un proyecto existente, comprendiendo el código y creando soluciones a partir de el.

La prueba consiste en culminar diversas características de un sistema de compra y venta de productos con la base de la API previamente programada. Este sistema busca realizar las siguientes acciones:

- Restringir el acceso a los diversos endpoints para que solo usuarios autenticados puedan interactuar con ellos
- Crear y listar productos
- Comprar y vender productos a partir del usuario en sesión
- Listar los productos en venta pertenecientes a un usuario
- Realizar busqueda de productos
## La base de la API comprende:

- Formato de las respuestas de la API (Errores, mensajes de éxito y devolución de contenido)
- Autenticación con Passport con los controladores y rutas para registrar un usuario, iniciar sesión y cerrar sesión
- Migraciones y modelos del sistema
- Factories para crear 20 productos, 4 usuarios y 10 transacciones

### Diagrama de modelos y relaciones

![Modelos y relaciones](https://i.ibb.co/VBnpmCq/Captura-de-pantalla-de-2021-07-08-03-38-18.png "Modelos y relaciones")

## Por hacer

### Endpoints
- [ ] __GET api/profile__ (Datos del usuario en sesión)
    - Incluir número (contadores) de compras, productos disponibles y ventas
- [ ] __GET api/profile/products__ (Listado de productos del usuario en sesión)
- [ ] __POST api/profile/products__ (Creación de un producto para el usuario en sesión)
- [ ] __GET api/profile/purchases__ (Listado de compras (transacciones) del usuario en sesión)
- [ ] __GET api/profile/sales__ (Listado de ventas realizadas por el usuario en sesión)
- [ ] __GET api/products__ (Listado de todos los productos en stock)
    - Permitir busqueda de productos por al menos un criterio
    - Utilzar parámetro `show_products_without_stock` para indicar si se incluyen los productos sin stock
- [ ] __POST api/products/:id/buy__ (Realizar la compra de un producto)
    - Decremetar el número de stock al realizar una venta
    - Crear restricción que no permita crear una transacción si la cantidad productos a comprar supera el número de productos en stock
- [ ] __GET /sellers/:id/products__ (Mostrar Listado de productos de un determinado vendedor)
    - Deberá ser restringido, solo será accesible por usuarios registrados

## Consideraciones Generales
- Los productos deberán tener una propiedad computada `status` que contendrá el valor "In Stock" o "Sold Out" dependiendo del número en su propiedad `quantity`


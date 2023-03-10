# Proyecto PHP - Bakery

## Índice de contenidos
* [Introducción](#Introducción)
* [Requerimientos](#Requerimientos)
* [Instalación](#Instalación)
* [Diseño y Funcionalidades](#Diseño-y-Funcionalidades)
    * [Página principal](#Página-principal)
    * [Tienda](#Tienda)
        * [Usuario Invitado](#Usuario-Invitado)
        * [Usuario Registrado](#Usuario-Registrado)
        * [Usuario Administrador](#Usuario-Administrador)
    * [Register-Login](#Register-Login)
    * [Carrito](#Carrito)
    * [Resto de páginas](#Resto-de-páginas)

## Introducción

Este proyecto consiste en una aplicación de venta de dulces online con un carrito funcional.

En la web puedes:

* Entrar como invitado, pero sin poder realizar ningún pedido.
* Registrarte/Iniciar sesión, con acceso a realizar pedidos y eliminarlos.
* Entrar como administrador para añadir, modificar o eliminar productos.

## Requerimientos
- PHP 7.0 o superior
- MySQL
- Composer 2.5.1

Tener un gestor como [XAMPP](https://www.apachefriends.org/es/index.html) para mantener la base de datos activa localmente.

## Instalación
1. Descargue o clone el repositorio en su servidor, para clonarlo utiliza este comando:

```shell=
git clone https://github.com/Javimartel/Online-Shop-PHP.git
```
---
2. La aplicación utiliza variables de entorno por lo que para utilizar la base de datos hay que crear un fichero llamado ".env" en el directo raíz de la siguiente manera:

```shell=
DB_HOST=''
DB_USER=''
DB_PASS=''
DB_NAME='tienda'
```

Rellenando los campos vacíos con los datos que vaya a utilizar localmente.

---

3. Lo siguiente será instalar las dependencias necesarias para el funcionamiento de la aplicación utilizando "*composer*" con este comando:

```shell=
composer install
```

Si no tiene composer instalado en su equipo, puede ir a la página oficial desde [aquí](https://getcomposer.org/download/), descargar el ejecutable y una vez instalado puede escribir el comando de arriba.

---
4. Ahora tiene que ir a XAMPP y activar el servicio de MySQL:

![](https://i.imgur.com/G3VXUI3.png)

---
5. Debe iniciar el servidor de PHP en el archivo *"installer.php"* para que se instale la base de datos con sus respectivos datos; esta es la ruta:
```shell=
./config/installer.php
```
Debería aparecer este mensaje:

![](https://i.imgur.com/y57FL2L.png)

---
6. Ahora simplemente debe ejecutar de nuevo el servidor en el *"index.php"*:

```shell=
./index.php
```

O acceder mediante *localhost*:
```shell=
localhost:3000/index.php
```
---
Listo, ya puede disfrutar de la aplicación.

## Diseño y Funcionalidades

### Página principal

La página principal no tiene funcionalidad, simplemente es para iniciar la aplicación:

```shell=
./index.php
```

![](https://i.imgur.com/IH4sWre.jpg)


### Tienda

Esta es la página con la mayoría de funcionalidades.

```shell=
./views/shop.php
```

Aquí se almacenan los productos que tenemos en la base de datos:


![](https://i.imgur.com/oWYvgH5.png)

#### Usuario Invitado

Cuando no hay ningún usuario registrado, si intenta realizar un pedido pulsando en algún producto le aparecerá este modal:

![](https://i.imgur.com/fjgFBFG.png)

#### Usuario Registrado

Si el usuario ya tiene una cuenta, aparecerá de la siguiente manera a la hora de realizar un pedido:

![](https://i.imgur.com/MGDTI6V.png)

Como vemos el botón ahora está habilitado y se puede realizar el pedido.

#### Usuario Administrador

Si el usuario es administrador, le aparecerá un botón adicional que sirve para añadir nuevos productos a la tienda:

![](https://i.imgur.com/vX23Aup.png)

Al pulsar sobre ese botón aparece este modal:

![](https://i.imgur.com/y4hl0nG.png)

Los usuarios administradores tienen un modal diferente a la hora de pulsar en un producto, no aparece la opción de añadir al carrito sino que tienen la opción de modificar los datos del producto o de eliminarlos:

![](https://i.imgur.com/KUd3bbN.png)

### Register-Login

En esta página tenemos la opción tanto de registrarnos como de iniciar sesión:

```shell=
./views/login-register.php
```

Para volver a la página principal como invitado, simplemente con pulsar el logo te redirige al *"index.php"*

![](https://i.imgur.com/pmRnhOo.png)

Si el usuario intenta registrarse e introduce los datos mal le aparecerá el siguiente mensaje:

![](https://i.imgur.com/pEixiIm.png)

Si intenta registrar un usuario que ya existe aparecerá este mensaje:

![](https://i.imgur.com/WpTMlAP.png)

A la hora de iniciar sesión, si introduce un usuario que no ha sido registrado aparecerá lo siguiente:

![](https://i.imgur.com/rnWmhVp.png)

Y por último, si la contraseña introducida para acceder es incorrecta, aparecerá este mensaje:

![](https://i.imgur.com/KZQ8UKG.png)

Si todo se ha completado correctamente, volveremos al índice y aparecerá nuestro usuario con el correo en la parte superior izquierda y además veremos un número en el carrito a la derecha:

![](https://i.imgur.com/sMzPuSZ.png)

### Carrito

Vamos a la Tienda y al añadir un producto vemos como cambia el carrito:

![](https://i.imgur.com/1jGGgXc.png)

Si pulsamos sobre el carrito se desplegará un *offcanvas* desde el lado derecho donde podremos ver todos los productos que hemos añadido con la opción de eliminarlos del carrito:

![](https://i.imgur.com/yWWwYw6.png)

Si añadimos muchos productos, aparecerá un *scrollbar* que nos permitirá ver toda la lista:

![](https://i.imgur.com/tRbW8xx.png)

También está la opción de abrir el carrito desde cualquier página y no solo desde la Tienda, pudiendo eliminar productos en cualquier momento.

### Resto de páginas

El resto de páginas no tienen funcionalidad y están en inglés ya que vienen incluidas en el Template de Bootstrap que he descargado gracias a [MokshaDesignStudio](https://mokshastudio.com); toda la información sobre ellos está en el inicio del archivo *"style.css"*:

```shell=
./css/style.css
```

![](https://i.imgur.com/HJHZVv5.png)

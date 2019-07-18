# Composer template for Drupal projects

[![Build Status](https://travis-ci.org/drupal-composer/drupal-project.svg?branch=8.x)](https://travis-ci.org/drupal-composer/drupal-project)

This project template provides a starter kit for managing your site
dependencies with [Composer](https://getcomposer.org/).

If you want to know how to use it as replacement for
[Drush Make](https://github.com/drush-ops/drush/blob/8.x/docs/make.md) visit
the [Documentation on drupal.org](https://www.drupal.org/node/2471553).


# Instalación del proyecto
1-	Clonamos el proyecto utilizando el comando: “git clone https://github.com/Levit1996/Drupal.git” o podemos descargarlo en formato ZIP.

2-	Nos ubicamos en la carpeta del proyecto utilizando la consola CMD y instalamos composer en el proyecto utilizando el comando: “composer install”. Si no se tiene instalado composer en la maquina local, se puede descargar desde: https://getcomposer.org/download/ ejecutamos el setup y procedemos a la instalación. 

3-	Creamos la base de datos. si se utiliza postgreSQL como sistema gestor, se utiliza el comando CREATE DATABASE ‘Nombre BD’; Es importante verificar si existe alguna base de datos creada con el mismo nombre, para evitar problemas en el flujo normal de la instalación.   

4-	Luego de iniciar el servidor web y el sistema gestor de bases de datos; Ejecutamos el proyecto en el navegador. En mi caso escribo la siguiente dirección: http://localhost/Drupal/ en el navegador, luego elegimos la opción web. 

5-	Elegimos el lenguaje de nuestro proyecto. 

6-	Seleccionamos el perfil de instalación, se recomienda elegir el perfil estándar. 

7-	Verificamos los requisitos y continuamos con el proceso de instalación. 

8-	Configuramos la base de datos. En este paso, ingresamos el nombre de la base de datos anteriormente creada y las credenciales de acceso a la misma. 

9-	Continua la instalación automática del sitio. 

10-	 Continuamos con la configuración automática de las traducciones.

11-	 Ingresamos la información del sitio, la cuenta de mantenimiento del sitio y las opciones regionales. 

12-	 Instalaciones finales automáticas. 

13-	Luego de ingresar a la interface principal, elegimos la opción(si el lenguaje elegido es español): “ampliar” y instalamos el módulo creado “my module”. 

14-	Ingresamos en nuestro navegador la ruta del módulo creado: “ /admin/config/HolaMundo ”, en mi caso sería: “http://localhost/Drupal/web/admin/config/HolaMundo”



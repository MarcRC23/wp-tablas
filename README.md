 
Como instalar el xampp:
Primero debemos ir a la web de XAMPP y descargar el paquete correspondiente.

https://www.apachefriends.org

En nuestro caso al realizarlo bajo Windows será  XAMPP para Windows, en el momento de este tutorial la versión 7.3.10.
Una vez descargado el paquete, ejecutaremos el ejecutable. Posiblemente Windows nos preguntará si deseamos permitir cambios en nuestra máquina.
Si tenemos UAC (User Account Control) activado nos mostrará un mensaje como el de la siguiente captura. Deberemos modificar los permisos para que el software funcione.
Seleccionamos «Cambiar configuración de Control de Cuentas de usuario» y nos mostrará la siguiente pantalla.
Bajamos los permisos al máximo y nos preguntará realmente si deseamos deshabilitarlo. Clickamos sobre «Sí»
Después de esto si nuestra instalación no nos permite continuar, deberíamos reiniciar Windows y volver a ejecutar la instalación.

Una vez podemos realizar la instalación nos saldrá la siguiente pantalla.
Clickamos sobre Next y nos aparecerán los diferentes componentes que deseamos instalar.
En el caso de este tutorial solo instalaremos Apache, MySQL, PHP y phpMyAdmin. Seleccionamos esos componentes y clickamos sobre Next.
En el siguiente paso nos solicitará la ruta donde deseamos instalar todos nuestros paquetes. Por defecto la ruta donde lo instala es «c:\xampp\«.

Posteriormente clickaremos sobre Next que nos mostrará otra pantalla indicando si deseamos saber más sobre XAMPP, desmarcamos y clickamos sobre Next para que empiece al fin la instalación.
En algún momento de la instalación, el firewall de Windows nos preguntará si deseamos permitir conexiones del servidor Apache. Deberemos concederle los permisos correspondientes para poder funcionar.
Una vez llegado al final de la instalación nos preguntará si queremos iniciar el Panel de Control de XAMPP. Le decimos que si para iniciarlo.
Lo primero que observaremos es en que idioma deseamos iniciar el panel de control. Inglés o Alemán. No hay más idiomas y en el momento de este tutorial desconozco si hay opción de implementar otros idiomas.
Una vez iniciado observaremos una pantalla como la siguiente. Los servicios vendrán detenidos, así que para iniciarlos deberemos clickar sobre Start.

Como descargar el wordpress en local:
Descargar Wordpress de https://wordpress.org/
Descomprimir y copiar la carpeta descomprimida en C: Xampp/htdocs
Cambiar nombre a la carpeta que originalmente se llama wordpress y reemplazar por el nombre del sitio o proyecto
Antes de seguir con la instalación es necesario ejecutar Xampp y crear una base de datos. Abrir el programa y en la columna ACTIONS dar clic en los dos primeros botones START que corresponden a los módulos Apache y MySQL (tienen que quedar resaltados en verde). Luego hacer clic en Admin de MySQL (marcado en la imagen) para acceder al phpmyadmin
 En la pestaña Base de datos crear base de datos: sólo es necesario definir un nombre y en cotejamiento seleccionar: utf8_unicode_ci. También puede usarse utf8_general_ci, que es menos correcto según el estándar pero más rápido.
En un navegador ir a http://localhost/nombre-del-sitio. Donde "nombre del sitio" es el nombre que le asignamos a la carpeta que contiene el WordPress.
En la primer ventana debemos seleccionar el idioma, elegiremos Español. Si descargamos WordPress del sitio en español ese paso no es necesario. En la siguiente ventana WordPress nos pide que tengamos a mano la información de nuestra base de datos, hacer clic en VAMOS A ELLO
Ingresar nombre de la base de datos que creamos recién, en nombre de usuario escribir: root, en contraseña dejar el campo vacío (en Mac va root nuevamente) y Servidor de base de datos y Prefijo de la tabla, dejarlos tal cual y enviar.
En la siguiente ventana completar los datos con el Título del sitio, usuario y contraseña que se definen en ese momento para ingresar luego al panel de administración. El mail sirve para recibir notificaciones y recuperar la contraseña.
Una vez que el sitio está instalado, se ingresa al administrador desde http://localhost/nombre-del-sitio/wp-admin. Cada vez que querramos trabajar en el sitio, antes de empezar tenemos que ejecutar el Xampp.

Como instalar phpMYAdmin:
Para poder instalar phpmyadmin, debes haber instalado con antelación apache, mysql-server y php. Además deben estar funcionando correctamente.
Antes de nada, debes descargar phpmyadmin de su página web, http://phpmyadmin.net.
Descomprimimos el archivo descargado «phpMyAdmin-4.2.11-all-languages.zip» en la carpeta htdocs, que es la carpeta desde donde sirve las páginas web el servidor Apache
Ahora, en nuestro navegador web, podríamos abrir la página http://localhost/phpmyadmin/setup/index.php para rellenar los diferentes valores para configurar la conexión con mysql, el tipo de login, etc. Sin embargo, nosotros vamos a hacerlo más sencillo.
También podríamos entrar en la carpeta de phpmyadmin, y veríamos un archivo llamado «config.sample.inc.php». Lo renombraríamos a «config.inc.php». Así usaríamos la configuración que trae como ejemplo, que funcionaría en una instalación típica. Pero tampoco lo vamos a hacer de esta forma.
Si siguiésemos este método, para poder acceder, deberíamos modificar un parámetro en el archivo. Buscaríamos la línea "$cfg['Servers'][$i]['AllowNoPassword'] = false;" y la cambiaríamos el valor a «true». La línea resultante sería "$cfg['Servers'][$i]['AllowNoPassword'] = true;"

Con esto podríamos acceder a phpmyadmin con el usuario root y sin contraseña en la dirección http://localhost/phpmyadmin/index.php, en una instalación típica en local. Una vez hubiésemos accedido, podríamos poner una contraseña, añadir usuarios, etc.
En las últimas versiones de phpmyadmin no hace falta nada de todo esto. No necesita crear un archivo de configuración para que funcione correctamente. Pero no podemos acceder de momento porque en una instalación típica, el usuario root de mysql no tiene contraseña, pero phpmyadmin no permite acceder sin contraseña.

Así que vamos a añadir una contraseña desde el cmd. Para eso, primero usamos «cd» y nos colocamos en la carpeta bin de la instalación de mysql.

cd "C:\Program Files (x86)\MySQL\MySQL Server 5.6\bin"

El comando para añadir la contraseña sería el siguiente:

mysqladmin -u root password abc123.

Este comando le asigna la contraseña «abc123.» al usuario root.
Y ya está. Finalmente accedemos al panel de control de phpmyadmin, donde podremos gestionar nuestras bases de datos.

Como instalar Visual estudio code:
 Descargar el instalador del programa. Podemos elegir los sistemas operativos de Windows, Linux y Mac.
 Ejecutar el fichero que se nos ha descargado. La instalación es muy sencilla. Simplemente debemos ir aceptando y avanzando en el proceso de instalación.
Abrir Visual Studio Code. Nos aparecerá una ventana como la siguiente.
rear un nuevo fichero (el cual podemos guardar con extensión .js, .html, .py, etc), abrir uno existente o, por ejemplo, abrir una carpeta donde tengamos nuestros ficheros.
Arrastrar desde el explorador de la parte izquierda los ficheros que queramos editar hacia el panel de edición. Podremos navegar fácilmente entre ellos utilizando la barra superior. En la parte derecha nos aparece un “minimapa” para localizarnos dentro del código que estamos editando.
Con estos 5 sencillos pasos ya estamos listos para empezar a desarrollar nuestras aplicaciones utilizando Visual 
Título del Proyecto
Acá va un párrafo que describa lo que es el proyecto [eliminar y escribir una descripción]

Comenzando 🚀
Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

Mira Deployment (Despliegue) para conocer como desplegar el proyecto.

Pre-requisitos 📋
Que cosas necesitas para instalar el software y como instalarlas

Da un ejemplo: XAMPP, VSC, ...
Instalación 🔧
Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo (de prueba) ejecutandose

Dí cómo será ese paso

Da un ejemplo:
- Descargar el proyecto desde GitHub (clonando o descargando el proyecto)
- Directorio donde alojar l'app dentro del XAMPP
- Localización del .sql
- Importación de la base de datos
- ...
Finaliza con un ejemplo de cómo obtener datos del sistema o como usarlos para una pequeña demo

Despliegue 📦
Agrega notas adicionales sobre como probar l'app en el hosting (url, usuarios de prueba, password...).

Construido con 🛠️
Menciona las herramientas que utilizaste para crear tu proyecto

Dropwizard - El framework web usado
Xampp https://www.apachefriends.org/es/download.html
Wordpress.local https://es.wordpress.org/download/
phpMyAdmin - https://www.phpmyadmin.net/downloads/
visual studio code https://code.visualstudio.com/
Contribuyendo 🖇️
Por favor lee el CONTRIBUTING.md para detalles de nuestro código de conducta, y el proceso para enviarnos pull requests.

Wiki 📖
Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra Wiki

Versionado 📌
Usamos SemVer para el versionado. Para todas las versiones disponibles, mira los tags en este repositorio.

[Crear una nueva Release para el proyecto acabado (este elemento se encuentra en el apartado About del repositorio) utilizando SemVer para el tag de la Release]

Autores ✒️
Marc ruiz-Documentación
Danny Larrea

Licencia 📄
Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo LICENSE.md para detalles

Expresiones de Gratitud 🎁
Colaborazión con https://es.aliexpress.com/
Le doy las gracias a danny larrea por su ayuda

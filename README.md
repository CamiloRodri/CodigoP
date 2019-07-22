
# Biblioteca - UdeC Facatativá

Sistema de Información para el Apoyo de la Biblioteca Universitaria - UdeC Facatativá

### Requerimientos

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* MySQL >= 5.7.*
* <a href="https://getcomposer.org/">Composer</a>

### Instalación

El proyecto esta desarrollado en [Laravel 5.5](https://laravel.com/docs/5.5/)

```sh
"Los puntos con simbolo ($) son comandos desde consola
 ubicado en la ruta del proyecto (C:\xampp\htdocs\Biblioteca)"
 
1- Clonar proyecto desde GitKraken

2- Inicializar GifFlow y hacer Pull con la rama develop
   (rama la cual se trabajara en el proyecto)
   
3- $ composer install  

   (Del Punto 4 al 8, favor omitir, lo siguiente es documental. Saltar al Punto 9)
   -(Punto [4 6] , instalacion Entrust en Composer)
4- $ composer require zizaco/entrust

5- $ composer require zizaco/entrust:dev-laravel-5

6- $ php artisan vendor:publish
   (Seleccionar Opción de Zizaco/Entrust, y Enter)
   -(Punto [7] , instalacion Debugbar en Composer)
7- $ composer require barryvdh/laravel-debugbar --dev
   -(Punto [8] , instalacion Intervention Imagge en Composer para subir Foto a prpyecto)
8- $ composer require intervention/image

9- Copiar el archivo .env.example 
   (.env - copia.example) y cambiar el nombre a .env 
   
10- Dejar la configuracion DB de developer
   ejemplo
   
   DB_HOST_DEVELOPER=127.0.0.1
   DB_DATABASE_DEVELOPER=biblioteca
   DB_USERNAME_DEVELOPER=root
   DB_PASSWORD_DEVELOPER=123

11- Crear la base de datos con el respectivo nombre asignado en .env	
   y configurar el archivo .env 
   ejemplo
   
   DB biblioteca
   
12- $ php artisan key:generate
13- $ php artisan storage:link
14- Migrar las bases de datos de biblioteca, y seeders.
   
    $ php artisan migrate:fresh --seed
    
 
```

### Herramientas

* <a href="https://github.com/siaaf-udec/dashboard-template">Plantilla Base Metronic Material Theme</a>
* <a href="https://education.github.com/pack">GitHub Student Pack</a>
* <a href="https://www.gitkraken.com/">GitKraken</a>
* <a href="https://siaaf-cit.slack.com/">Canal de Comunicación de Notificaciones</a>
* <a href="http://codeship.com/">Codeship, pruebas de integración contínua</a>



### Material de Apoyo

* <a href="https://styde.net/">Styde</a>
* <a href="https://www.youtube.com/channel/UC07xim4Gg8kOk3uZwMrGNeQ/playlists">YouTube - Raul Palacios</a>
* <a href="https://laravel.com/docs/5.5">Documentación Laravel 5.5</a>
* <a href="https://mailtrap.io/">Pruebas de Email</a>
* <a href="https://wkhtmltopdf.org/downloads.html">Binarios Snappy</a>
* <a href="https://github.com/MicrosoftArchive/redis/releases">Redis Windows</a>
* <a href="https://nodejs.org/en/">Node.js</a>
* <a href="https://jesuschicano.es/como-subir-imagenes-en-laravel/">Intervention Image</a>

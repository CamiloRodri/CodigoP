
# Biblioteca

Sistema de Información para el Apoyo de la Biioteca Universitaria - UdeC Facatativá

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
   
3. $ composer install  

4- Copiar el archivo .env.example 
   (.env - copia.example) y cambiar el nombre a .env 
   
5- Dejar la configuracion DB de developer
   y del modulo asignado (Eliminar los demas modulos) ejemplo
   
   DB_HOST_DEVELOPER=127.0.0.1
   DB_DATABASE_DEVELOPER=biblioteca
   DB_USERNAME_DEVELOPER=root
   DB_PASSWORD_DEVELOPER=123
   
   

5- Crear la base de datos con el respectivo nombre asignado en .env	
   y configurar el archivo .env ejemplo
   
   DB biblioteca
   
6- $ php artisan key:generate
7- $ php artisan storage:link
8- Migrar las bases de datos de developer y el modulo asignado ejemplo
   
    $ php artisan migrate:fresh --seed
    
 
```

### Actualización Laravel 5.5

```sh
1- composer update
2- php artisan package:discover
```

### Instalacion Node

Activación de notificaciones de tiempo real (No es obligatorio)

```sh
1- Instalar Redis-x64-3.2.100.msi (Material de apoyo / Redis Windows)
2- Instalar Node.js V8.4.0 (Material de apoyo / Node.js)
3- $ npm install
3- Verificar cambios en el archivo .env.example
4- Inicializar el servidor de node
   
5- Ejecutar los Queues
    $ php artisan queue:work
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
* <a href="https://laravel.com/docs/5.4">Documentación Laravel 5.4</a>
* <a href="https://mailtrap.io/">Pruebas de Email</a>
* <a href="https://wkhtmltopdf.org/downloads.html">Binarios Snappy</a>
* <a href="https://github.com/MicrosoftArchive/redis/releases">Redis Windows</a>
* <a href="https://nodejs.org/en/">Node.js</a>

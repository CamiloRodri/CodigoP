Biblioteca

Requerimientos
PHP >= 5.6.4
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
MySQL >= 5.7.*
Composer
Instalación
El proyecto esta desarrollado en Laravel 5.4

"Los puntos con simbolo ($) son comandos desde consola
 ubicado en la ruta del proyecto (C:\xampp\htdocs\Siaaf)"
 
1- Clonar proyecto desde GitKraken

2- Inicializar GifFlow y hacer Pull con la rama develop
   (rama la cual se trabajara en el proyecto)
   
3. $ composer install  

4- Copiar el archivo .env.example 
   (.env - copia.example) y cambiar el nombre a .env 
   
5- Dejar la configuracion DB de developer
   y del modulo asignado (Eliminar los demas modulos) ejemplo
   
   DB_HOST_SPORTCIT=127.0.0.1
   DB_DATABASE_SPORTCIT=biblioteca
   DB_USERNAME_SPORTCIT=root
   DB_PASSWORD_SPORTCIT=1234

5- Crear la base de datos con el respectivo nombre asignado en .env	
   y configurar el archivo .env ejemplo
   
   DB biblioteca
   
6- $ php artisan key:generate
7- $ php artisan storage:link
8- Migrar las bases de datos de developer y el modulo asignado ejemplo
   
    $ php artisan migrate:fresh --seed

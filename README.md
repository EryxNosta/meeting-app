# Juntáte 🎭
*La primera plataforma Hondureña de eventos para ti y tu noche aburrida* 🌃 🇭🇳


# Propósito del Proyecto

Nuestra idea siempre fue cubrir alguna necesidad en la ciudad y hemos notado que siempre cuando queremos salir a distraernos terminamos en las mismas actividades y lugares. Entonces, ¿Por qué no integrar este tipo de eventos en un solo lugar y exponer a los Sanpedranos a nuevos eventos? Aquí es donde nace [Insertar nombre de nuestra empresa], una plataforma web multidispositivo que nos dará la capacidad de seleccionar una junta con nuestras amistades y seres queridos a un lugar nuevo o también agendar una fecha para ir a ver un concierto y conocer nuevas personas. 

Si bien la idea nace en SPS, el movimiento de la aplicación tiene un alcance exponencial ya que con la ayuda de la comunidad y empresas se podrá hacer de este sitio web un punto de inicio para todos aquellos que estén pensando, "¿Qué puedo hacer hoy en la noche?" o de personas que vivan afuera de la ciudad y vengan a visitar, "¿Qué hay de bueno hoy en SPS?". De boca en boca se irá expandiendo hasta cubrir cada rinconcito de nuestro hermoso país. 

___

Nuestra plataforma está construida utilizando una combinación de tecnologías modernas, que incluyen:

- **Code Host**: Consideramos Github como la plataforma primaria de nuestro esfuerzo colectivo y desarrollo a largo plazo. 

- **Frontend**: Utilizamos Bootstrap para ofrecer una interfaz de usuario interactiva y receptiva. Del mismo modo, añadiendo confiabilidad a largo plazo en futuras versiones de la plataforma. 

- **Backend**: Hemos optado por Laravel que es un framework robusto para que maneje todas las operaciones relacionadas con eventos y usuarios.

- **Base de Datos**: Utilizamos MySQL en base a Laragon para hacer hosting local y eficiente y del mismo modo, para almacenar datos relacionados con eventos, usuarios y demás elementos que conforman la plataforma. 

___

### Como preparar tu Computadora para ejecutarlo localmente: Primero, hay que asegurarnos que tenemos lo siguiente instalado en nuestro ordenador: 

1. [Laragon](https://laragon.org/index.html)
2. [VS Code](https://code.visualstudio.com) o cualquier editor de código
3. [Laravel](https://laravel.com)
4. Node (desde terminal y en pasos posteriores se explica)
5. Composer (desde terminal)
6. Breeze (desde terminal)
___

##### _Nota:_ Debemos de tener instalados los programas bases antes de proceder con los siguientes pasos:
1. [Laragon](https://laragon.org/index.html)
2. [VS Code](https://code.visualstudio.com) 
3. [Laravel](https://laravel.com) 

Luego, procedemos a clonar el repositorio [Juntáte](https://github.com/EryxNosta/meeting-app)

***

Al asegurarnos que hayamos clonado correctamente el repositorio, procedemos a abrir VS Code
+ Acá buscamos en la carpeta general de nuestra plataforma y busca el archivo llamado `.env.example`
    - Cambia el nombre `.env.example` por `.env` para que se ajuste a la base de datos de Laragon, ya que por defecto este archivo no se sube a GitHub por la información sensible en el archivo.      
+ Luego de ese cambio de nombre, abre Laragon y haz click en el botón **Start All**
  - Esto subirá localmente el servidor de Apache y MySQL para trabajar cómodamente.
+  Luego, Click en el botón "Terminal"
    - Esto abrirá la terminal de comandos de Laragon para poder instalar las siguientes dependencias. 
+  Al abrir la terminal, por su defecto nos llevará a `C:\laragon\www` o donde se haya instalado Laragon. En la línea de comando escribir:
    - `cd meeting-app` que nos direccionará correcatamente a la carpeta de proyecto. Estando acá, ya podremos instalar las dependencias.       
+  Escribir en la terminal `install composer` (dejar que se instale y seguir con el siguiente paso)
+  Como es la primera vez que se generará el proyecto, se necesita una llave de autenticación con la base de datos. Así que pon esto en la terminal `php artisan key:generate`
    - Esto asegurará que se generé automáticamente la llave y no incurramos a mayor problema en el proceso de instalación
+  Instalamos node con el comando `npm Node` y esperamos que instale.
+  Seguir el formado y orden para instalar Breeze, que solamente es esperar a instalar y seguir con el siguiente comando: 

Breeze:

    `php artisan breeze:install blade` 
    `php artisan migrate`
    `npm run dev`
+ En su defecto, Breeze crea la forma de login en welcome.blade.php así que lo cambiaremos a nuestro index siguiendo estos pasos:
    - Irse al root de todo el proyecto y encontrar la carpeta llamada **routes**
    - Abrir esta misma y abrir el archivo web.php
    - Acá buscaremos la siguiente ruta:
```
Route::get('/', function () {
    return view('welcome');
});
```
+ Al estar acá, buscamos la siguiente carpeta en root del proyecto llamada `Resources>Views>Pagina_Index>index`
+ Luego, reemplazamos la ruta por defecto de welcome por index, del siguiente modo:
```
Route::get('/', function () {
    return view('./Pagina_Index/index');
});
```
Con esto hecho, nos aseguramos que la forma de autenticación es redirigida a nuestro index de proyecto. Luego de estos pasos seguidos, procedemos a abrir Laragon y pasar a la `terminal` y escribir el siguiente comando:
+ `php artisan serve`
    - Esto creará un servidor local en brackets []. Cópialo en tu URL y tará, bienvenido a la plataforma. 

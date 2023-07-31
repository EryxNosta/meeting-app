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
7. Git
___

##### _Nota:_ Debemos de tener instalados los programas bases antes de proceder con los siguientes pasos:
1. [Laragon](https://laragon.org/index.html)
2. [VS Code](https://code.visualstudio.com) 
3. [Laravel](https://laravel.com)
4. Git 

### Pasos para instalar Git
+ Descarga el instalador de Git desde el sitio web oficial: <https://git-scm.com/downloads>
+ Haz clic en el botón "Descargar" y selecciona la versión de Git que deseas instalar. Si no tienes experiencia previa con Git, te recomiendo instalar la versión más reciente.
+ Una vez descargado, haz clic en el archivo ".exe" para iniciar la instalación.
+ En la pantalla de bienvenida, haz clic en "Siguiente".
+ En la página de opciones de instalación, puedes elegir la ubicación donde quieres instalar Git. Puedes aceptar la ubicación predeterminada o seleccionar una diferente. También puedes elegir si deseas agregar Git a tu menú Iniciar de Windows.
+ Haz clic en "Siguiente".
+ En la página de configuración de la plataforma, selecciona la plataforma que deseas instalar. Por defecto, se selecciona la plataforma de 64 bits, pero si tu sistema es de 32 bits, selecciona la plataforma correspondiente.
+ Haz clic en "Siguiente".
+ En la página de confirmación de la instalación, revisa los detalles de la instalación y haz clic en "Instalar".
+ Una vez instalado, haz clic en "Finalizar".
+ Abre una ventana de Command Prompt o PowerShell para verificar que Git esté instalado correctamente. Puedes hacer esto escribiendo git --version y presionando Enter.

Luego, procedemos a clonar el repositorio [Juntáte](https://github.com/EryxNosta/meeting-app)

+ procedemos a clonar el repositorio `Juntáte`, para esto se debe apachurrar el botón `< >code` (botón verde, localizado en la página defecto del repositorio `https://github.com/EryxNosta/meeting-app`)
    -  Aparecerá un link en el apartado `SSH` (que ya aparece abierto), el cual debe copiar o pulsar el botón de `copiar (botón al lado del link)`
    -  Se va al Visual Studio Code nuevamente y en los botones del lado izquierdo, pulsamos la tercera opción que es el botón `source control`, luego pulsamos la opción `clone repository`.
    - Pegamos el link en el recuadro abierto y pulsamos en `clone from Github`.
    - Luego elegimos el proyecto `EryxNosta/meeting-app`, aparecerá una ventana para guardar la clonación del proyecto, para lo cual elegimos la carpeta de Laragon con nombre `www` y pulsamos el botón `select as repository destination`.

***

Al asegurarnos que hayamos clonado correctamente el repositorio, procedemos a abrir VS Code

+ Acá buscamos en la carpeta general (o mejor conocida como root) de nuestra plataforma de Visual Studio Code y busca el archivo llamado `.env.example`
    - Hacemos click derecho sobre el nombre del archivo `.env.example`
    - `Apachurra click derecho` o `F2` para elegir la opción `rename` para cambiar el nombre a `.env` para que se ajuste a la base de datos de Laragon.  
+ Luego de ese cambio de nombre, abre Laragon nuevamente y haz click en el botón **`Start All`** (iniciar todo)
  - Esto subirá localmente el servidor de `Apache y MySQL` para trabajar cómodamente.
+  Luego, Click en el botón `"Terminal"`
    - Esto abrirá la terminal de comandos de Laragon para poder instalar las siguientes dependencias. 
+  Al abrir la terminal, por su defecto nos llevará a `C:\laragon\www` o donde se haya instalado Laragon. En la línea de comando escribir:
    - `cd meeting-app` que nos direccionará correctamente a la carpeta de proyecto. Estando acá, ya podremos instalar las dependencias.       
+  Escribir en la terminal `composer install` (dejar que se instale y seguir con el siguiente paso)
+  Como es la primera vez que se generará el proyecto, se necesitará una llave de autenticación con la base de datos. Así que pon esto en la terminal `php artisan key:generate`
    - Esto asegurará que se generé automáticamente la llave y no incurramos a mayor problema en el proceso de instalación.
+  Instalamos Node con el comando `npm install` y esperamos que instale.

## Parte impotante: En caso ya tener una base de datos previa del mismo proyecto, proceder a realizar los siguientes pasos:
+  Abrir Laragon y seleccionar `Database`
+  Acá apareceerá una ventana con nombre `Session Manager`
+  En la parte de abajo, darle lick a `Open` y no tocar las demás opciones.
+  Luego, apareran dos columnas grandes. Ubícate en la izquierda y busca una base de datos llamada `laravel`
+  Haz click en la flechita `>` para expandir el menu.
    - DATO IMPORTANTE: Si ves que la base de datos de `laravel` está vacía, entonces no tendrás problema en hacer las migraciones y puedes seguir con los pasos siguientes para instalar `Breeze`.
    - Esto se debe a que si hay tablas previas de clonaciones pasadas, al crear la migración, puede causar un error de migración y la única forma, es borrándo cada tabla para dejar vacía la base de datos.
+  Seguir el formato y orden para instalar `Breeze`, que solamente es esperar a instalar y seguir con el siguiente comando: 

Breeze:
    `php artisan breeze:install blade` 
    `php artisan migrate`
    `npm run dev`
+ Breeze creará la página de login en welcome.blade.php (que es como un index, que por defecto se crea).
+ Así que lo cambiaremos a nuestro index siguiendo estos pasos:
    - Irse al Visual Studio Code y al root de todo el proyecto y encontrar la carpeta llamada **`views`**
    - Abrir esta misma y seguir el orden de apertura de archivos `views > Pagina_Index > index.blade.php`
    - Por los momentos, déjala abierta en ese archivo, ya que lo necesitaremos de referencia luego.
 
+ Luego, dentro de la carpeta root de todo el proyecto, vamos a irnos a la carpeta llamada  **`routes`**
    - Al estar acá apachurrala y abre el archivo llamado `web.php`
    - una vez abierto este archivo, verás este código a tu derecha:  
```
Route::get('/', function () {
    return view('welcome');
});
```
+ ¿Recuerdas  `views > Pagina_Index > index.blade.php`? Ahora necesitaremos de esta ruta para cambiar parte del código anterior que se encuentra en `web.php`. 
+ Teniendo en cuenta el orden en donde está `index.blade.php`, procedemos a cambiar el `welcome`, por la ruta de nuestro index, que es `./Pagina_Index/index`
    - Quedaría de esta forma:
```
Route::get('/', function () {
    return view('./Pagina_Index/index');
});
```
+ Con esto hecho, nos aseguramos que hemos cambiado el index previo, por el de nuestro repositorio. 

Luego de estos pasos seguidos, procedemos a abrir nuevamente Laragon y abrir una nueva `terminal`
    - Puedes abrir una nueva terminal con la combinación de `Ctrl + T` 
    - Luego de crearse, en la segunda casilla que dice `Startup directory for new process:` elige donde está alojado tu proyecto. 
    - Luego, apachurra `Start` y esto creará la nueva terminal. 

Por ultimo paso escribir el siguiente comando:
+ `php artisan serve`
    - Esto armará un servidor local específico para nuestro proyecto que estará en brackets de este modo `[http://127.0.0.1:5000]`. El puerto puede variar, dependiendo tu sistema.
    - Procede a copiar el `http://127.0.0.1:5000` y pégalo en tu navegador/
    - Apachurra `Enter` y tendrías que tener acceso a la plataforma. 

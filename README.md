# ¡Vení y Juntáte! 
## La primera plataforma de eventos para vos, de Honduras. 

#### 1. Creación de Eventos Personalizados

Los usuarios pueden crear eventos personalizados según sus preferencias y necesidades. Pueden agregar detalles como el título, la descripción, la fecha, la ubicación y la categoría del evento.

#### 2. Exploración de Eventos

Los usuarios pueden navegar por una amplia lista de eventos que se llevan a cabo en su área local o en cualquier otra ubicación. Pueden utilizar filtros para encontrar eventos específicos según sus intereses.

## Tecnología

Nuestra plataforma está construida utilizando una combinación de tecnologías modernas, que incluyen:

- **Code Host**: Consideramos Github como la plataforma primaria de nuestro esfuerzo colectivo y desarrollo a largo plazo. 

- **Frontend**: Utilizamos Bootstrap para ofrecer una interfaz de usuario interactiva y receptiva. Del mismo modo, añadiendo confiabilidad a largo plazo en futuras versiones de la plataforma. 

- **Backend**: Hemos optado por Laravel que es un framework robusto para que maneje todas las operaciones relacionadas con eventos y usuarios.

- **Base de Datos**: Utilizamos MySQL en base a Laragon para hacer hosting local y eficiente y del mismo modo, para almacenar datos relacionados con eventos, usuarios y demás elementos que conforman la plataforma. 

### Como preparar tu computadora para probar la mejor plataforma de eventos

#### Primero, hay que asegurarnos que tenemos lo siguiente instalado en nuestro ordenador: 

1. [Laragon](https://laragon.org/index.html)
2. [VS Code](https://code.visualstudio.com) o cualquier editor de código
3. [Laravel](https://laravel.com)
4. Node (desde terminal y en pasos posteriores se explica)
5. Composer (desde terminal)
6. Breeze (desde terminal)

##### Luego, instalamos los programas bases antes de proceder con los siguientes pasos:
1.[Laragon](https://laragon.org/index.html) 
2.[VS Code](https://code.visualstudio.com) 
3.[Laravel](https://laravel.com)

Luego, procedemos a clonar el repositorio [Juntáte](https://github.com/EryxNosta/meeting-app)

Al asegurarnos que hayamos clonado correctamente el repositorio, procedemos a abrir Laragon. 
+ Click en el botón **Start All**
  - Esto subirá localmente el servidor de Apache y MySQL para trabajar cómodamente.
+  Click en el botón "Terminal"
+  Irse a la ruta específica donde se clonó el repositorio
+  Escribir en la terminal `npm install` (dejar que se instale y seguir con el siguiente paso)
+  Escribir en la terminal `install composer` (mismnas instrucciones previas)
+  Seguir el formado y orden para instalar Breeze:

Breeze:

    line 1 of `php artisan breeze:install blade` 
    line 2 of `php artisan migrate`
    line 3 of `npm run dev`


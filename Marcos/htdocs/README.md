La organizacion de los archivos de la web, seguira MODELO VISTA CONTROLADOR, por lo que con el tiempo se iran familiarizando con la distribucion de las carpetas y demas.
Les dejo una Breve descripcion.
./Assets/
           |     /css/ -> Archivos css de toda la web
           |    /img/ -> Recursos de imagen
           |    /js/     -> Scripts de JS
           |    /scss/-> Macros de CSS (colores, tamaños, etc)
./config/           -> Archivos de configuracion de php, no deberian tener que tocar nada por ahora
./controller/     -> Controlador: Archivo de php que se encarga de armar el "arbol" de las distintas secciones, no deberian tener que tocarlo
./models/         -> Archivos donde se guardaran las funciones necesarias para el comando de la web, es todo PHP. No deberian tocarlo 
./View/             ->  Archivos de frontend, veran que son de extension PHP, pero adentro son 99,9% HTML. Actualmente trabajamos exclusivamente sobre el index.php ¡Aca si es donde van a trabajar 🤣 )
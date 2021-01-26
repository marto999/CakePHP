README

IMPORTANTE: DOCUMENTACIÓN OFICIAL CAKEPHP 4 => https://book.cakephp.org/4/en/index.html
____________________________________________________________________________________________________
 Paso 1:                                                                              
 Creación de la base de datos(Archivo bdclientes.sql),ejecutar en mysql o phpmyadmin  

____________________________________________________________________________________________________

 Paso 2:									        
 Instalación de Composer,para más infomacion: https://getcomposer.org/download/       

____________________________________________________________________________________________________

 Paso 3:									       
 Crear de Proyecto Cakephp mediante composer,ejecutar este comando en cmd:            
   composer create-project --prefer-dist cakephp/app:~4.0 my_app_name	    	       
 Mas información en: https://book.cakephp.org/4/es/installation.html	       

____________________________________________________________________________________________________
 Paso 4:									       
 Establecer conexión con la base de datos bdclientes(Modificar archivo app_local.php)

 'Datasources' => [
        'default' => [
            'host' => 'localhost',
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',

            'username' => 'root',
            'password' => '',

            'database' => 'bdclientes',
            /*
             * If not using the default 'public' schema with the PostgreSQL driver
             * set it here.
             */
            //'schema' => 'myapp',

            /*
             * You can use a DSN string to set the entire configuration
             */
            'url' => env('DATABASE_URL', null),
        ],

____________________________________________________________________________________________________

 Paso 5:									       
 Crear de Proyecto Cakephp mediante composer,ejecutar este comando en cmd:            
    composer create-project --prefer-dist cakephp/app:~4.0 my_app_name	    	       
 										       
	Mas información en: https://book.cakephp.org/4/es/installation.html	       
____________________________________________________________________________________________________

Paso 5:
Creación de Modelos,Vistas y Controladores mediante el comando cake bake all 'NombreDeTabla' 


____________________________________________________________________________________________________
Paso 6:
Creación del Método Search en el Controlador de Contratos.(Código adjunto)
____________________________________________________________________________________________________
Paso 7:
Modificación de vistas  para el método search(Código Adjunto)
____________________________________________________________________________________________________

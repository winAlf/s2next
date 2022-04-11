<?php

//Saner si estamos trabajando de forma local o remota
//define('IS_LOCAL'   ,in_array($_SERVER['REMOTE_ADDR'],['127.0.0.1','::1','http://phppoo.test/']));

//DEFINIR EL USO HORARIO O TIMEZONE DELS FilesystemIterator
date_default_timezone_set('America/Mexico_City');

//DEFINE LENGUAJE
define('LANG'       , 'es');

//Ruta base de nuestro proyecyo
//define('BASEPATH'   , '/');

//Sal del sistema
//define('AUTH_SALT'  , 'K0l0r5<3');

//puerto y url del sitio
//define('PORT'       , '');
define('URL'        , '/');

//RUTAS DE NUESTRO SISTEMA Y ARCHIVOS Y DIRECTORIOS
DEFINE('DS'         , DIRECTORY_SEPARATOR);
define('ROOT'       , getcwd().DS);

define('APP'        , ROOT.'app'.DS);
define('CLASES'     , APP.'clases'.DS);
define('CONFIG'     , APP.'config'.DS);
define('CONTROLLERS', APP.'controllers'.DS);
define('FUNCTIONS'  , APP.'functions'.DS);
define('MODELS' , APP.'models'.DS);

define('TEMPLATES'  , ROOT.'templates'.DS);
define('INCLUDES'   , TEMPLATES.'includes'.DS);
define('MODULES'    , TEMPLATES.'modules'.DS);
define('VIEWS'      , TEMPLATES.'views'.DS);


define('ASSETS'     , URL.'assets/');
define('IMAGES'     , ASSETS.'images/');
define('CSS'        , ASSETS.'css/');
define('JS'         , ASSETS.'js/');
define('PLUGINS'    , ASSETS.'plugins/');
/*

define('FAVICON'    , ASSETS.'favicon/');
define('FONTS'      , ASSETS.'fonts/');


define('PLUGINS'    , ASSETS.'plugins/');
define('UPLOADS'    , ASSETS.'uploads/');
*/


//CREDENCIALES O CONSTANTES DE BASE DE DATOS
//Set para conexión local o de desarrollo
/*
define('LDB_ENGINE' , 'mysql');
define('LDB_HOST'   , 'localhost');
define('LDB_NAME'   , 'u4_p1_db');
define('LDB_USER'   , 'root');
define('LDB_PASS'   , '');
define('LDB_CHARSET', 'utf8');
*/

//Set para conexión producción o servidor real
define('DB_ENGINE' , 'mysql');
define('DB_HOST'   , 'localhost');
define('DB_NAME'   , 's2next_et1_db1');
define('DB_USER'   , 'root');
define('DB_PASS'   , '');
define('DB_CHARSET', 'utf8');

//El controlador  y metodo por defecto //y el controlador por defecto
// El controlador por defecto / el método por defecto / y el controlador de errores por defecto
define('DEFAULT_CONTROLLER'      , 'home');
define('DEFAULT_ERROR_CONTROLLER', 'error');
define('DEFAULT_METHOD'          , 'index');

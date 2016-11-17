<?php

/**

* / linux

* \ windows

*/

define("DS", DIRECTORY_SEPARATOR);

define("ROOT", realpath(dirname(__FILE__)) . DS);

define("APP_PATH", ROOT . "aplication" . DS);

require_once(APP_PATH . "Config.php");

require_once(APP_PATH . "Request.php");

require_once(APP_PATH . "Bootstrap.php");

require_once(APP_PATH . "Controller.php");

require_once(APP_PATH . "Model.php");

require_once(APP_PATH . "View.php");

require_once(APP_PATH . "Database.php");

//Comprobar que los archivos se estan cargando correctamente

//echo "<pre>";print_r(get_required_files());

try{

Bootstrap::run(new Request);

}catch(Exception $e){

echo $e->getMessage();

}



<?php

define("DEFAULT_CONTROLLER", "tareas");

define("DEFAULT_LAYOUT", "default");

define("APP_FOLDER", "framework");

define("APP_URL", "http://".$_SERVER['SERVER_NAME']."/".APP_FOLDER."/");

define("APP_URL_CSS", APP_URL."public/css/");

define("APP_URL_IMG", APP_URL."public/img/");

define("APP_URL_JS", APP_URL."public/js/");

define("APP_NAME", "Framework");

define("DB_HOST", "localhost");

define("DB_USER", "root");

define("DB_PASS", "");

define("DB_NAME", "gestion");

define("DB_CHAR", "UTF8");

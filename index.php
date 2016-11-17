<?php 

// windows \
// unix  /

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)).DS);
define("APP_PATH", ROOT."aplication".DS);

require_once(APP_PATH."config.php");
require_once(APP_PATH."database.php");
require_once(APP_PATH."request.php");
require_once(APP_PATH."bootstrap.php");
require_once(APP_PATH."autoload.php");
require_once(APP_PATH."controller.php");
require_once(APP_PATH."model.php");
require_once(APP_PATH."view.php");


//echo "<pre>";
//print_r(get_required_files());

try {
	bootstrap::run(new Request);
    } catch (Exception $e){
    	echo $e->getMessage();
    }




/*corter y pegar en boostrap
if (isset($_GET['url'])){
	$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
	$url = explode("/", $url);
	$url = array_filter($url);

	$controller = array_shift($url);
	$action = array_shift($url);
	$args = $url;
}

if (!isset($controller)) {
	$controller = "pages";
}
if (!isset($action)) {
	$action = "index";
}
if (empty($args)) {
	$args = array(0=>NULL);
}
*/

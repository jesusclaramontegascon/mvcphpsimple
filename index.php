<?php 
include_once("autoload.php");
?>

<?php 
use system\database\Database;
use system\classes\Loader;
use system\database\Config;
use system\classes2\Loader2;
use system\classes\Router;


$db=new Database();;
$db2=new Loader2();
$db3=new Router();
$db4=new Config();
?>
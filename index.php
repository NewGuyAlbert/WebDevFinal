<?php 

require_once __DIR__ . './vendor/autoload.php';
use App\Router;
use App\Routes\Customer;
use App\Routes\Order;
use App\Routes\Album;
use App\Routes\Artist;
use App\Routes\Track;
define("DOMAIN", "/WebDevFinal");

$router = new Router();


// Navbar routes
$router->get(DOMAIN . '/', function() {include("./views/home.php");});
$router->get(DOMAIN . '/admin', function() {include("./views/admin.php");});
$router->get(DOMAIN . '/login', function() {include("./views/login.php");});
$router->get(DOMAIN . '/signup', function() {include("./views/signup.php");});


$router->run();

?>
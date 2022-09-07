<?php


$routes = [
'inicio'=> '/',
'poster' => 'poster/'
];
$urlactual= $_SERVER['REQUEST_URI'];
if ($urlactual == $routes["inicio"]){
    include_once ("views/index.php");
}else if($urlactual == $routes["poster"]){

    include_once ("views/about-us.php");
}else{

    require 'views/404-Not-Found.php';

}











?>

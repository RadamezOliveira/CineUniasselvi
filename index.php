<?php
$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "./controller/FilmesController.php";

if($rota === "/"){
    require "view/galeria.php";
    exit();
}
if($rota === "/cadastrar"){
    if($metodo == "GET") require "view/cadastrar.php";
    if($metodo == "POST") {
        $controller = new FilmesController();
        $controller->save($_REQUEST);
    };
    exit();
}
if(substr($rota, 0, strlen("/favoritar")) === "/favoritar"){
    $controller = new FilmesController();
    $controller->favorite(basename($rota));
    exit();
}
require "view/404.php";


// switch($rota){
//     case "/":
//         require "view/galeria.php";
//         break;
//     case "/novo":
//         if($metodo == "GET") require "view/cadastrar.php";
//         if($metodo == "POST") {
//             $controller = new FilmesController();
//             $controller->save($_REQUEST);
//         };
//         break;
//     default:
//         require "view/404.php";
//         break;
// }
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Steampixel\Route;
use App\Base\Page;

Route::add('/', function() {
  Page::render('home');
});

Route::add('/cliente/([0-9]*)',function($var1){
    echo $var1.' is a great number!';
});

// exibe / recebe o envio do formulario
Route::add('/formularioexemplo',function(){
    Page::render('contact');
},['get', 'post']);

// pagina nao encontrada
Route::pathNotFound(function($path){
    Page::render('404', 'default', ['path' => $path]);
});

// metodo nao permitido
Route::methodNotAllowed(function($path, $method){
    Page::render('405', 'default', ['path' => $path, 'method' => $method]);
});

// Run the router
Route::run('/');
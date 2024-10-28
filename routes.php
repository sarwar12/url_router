<?php 
Route::get('/', function(){
    echo "Welcome";
});

Route::get('/say/{name}', function($name){
    echo "Welcome {$name}";
});

Route::get('/hello/world', 'HelloController@sayHelloWorld');


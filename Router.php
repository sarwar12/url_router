<?php 
namespace OurApplication\Routing;
class Router{
    private static function getUrl(){
        return $_SERVER['REQUEST_URI'];
    }
    static function get(){
        echo sefl::getUrl();
    }
}


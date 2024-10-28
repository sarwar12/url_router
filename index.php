<?php
$url = $_SERVER['REQUEST_URI'];
//Match route name
if(preg_match("~^/url_router/hello/(\w+)/?$~", $url, $matches)){
    echo $matches[1];
}
//Homepage match with RegExp
if(preg_match("~^/$~", $url)){
    echo "Welcome Home";
}
//Match with number
if(preg_match("~^/url_router/number/(\d+)/do/(\w+)/?$~", $url, $matches)){
    echo $matches[1];
    echo "<br/>";
    echo $matches[2];
}


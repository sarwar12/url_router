<?php
$url = $_SERVER['REQUEST_URI'];
//Match route name
if(preg_match("~^/url_router/hello/(\w+)/?$~", $url, $matches)){
    echo $matches[1];
}
//Homepage match with RegExp
if(preg_match("~^/url_router/$~", $url)){
    echo "Welcome Home";
}

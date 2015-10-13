<?php

$request = $_SERVER['REQUEST_URI'];

$request = explode("?", $request)[0];

$request = trim($request, '/');

if (empty($request)) {

    $request = 'home';

}

$page = "pages/{$request}.php";

if ( ! is_file($page)) {

    $page = "pages/error.php";

}

$title = 'Premium Coffee';

require $page;
<?php

$documentRoot = getcwd();
$uri = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

define("BASE_PATH", $documentRoot);
define("BASE_URL", $uri);

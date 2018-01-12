<?php

require_once ('vendor/autoload.php');

$f3 = Base::instance();

$f3 -> route('GET /', function() {
    echo "<h1>Routing Demo</h1>";
}
);

//Run Fat-Free Framework
$f3->run();
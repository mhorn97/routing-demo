<?php

require_once ('vendor/autoload.php');



$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

$f3 -> route('GET /', function() {
    echo "<h1>Routing Demo</h1>";
}
);

//Define a page1 route
$f3 -> route('GET /page1', function() {
    echo "<h1>This is page1</h1>";
}
);

//Define a page2 route
$f3 -> route('GET /page2', function() {
    echo "<h1>This is page 2</h1>";
}
);

$f3 -> route('GET /jewelry/rings/toe-rings', function() {
    $template = new Template();
    echo $template->render('views/toe-rings.html');
});

$f3->route('GET /hello/@name', function($f3, $params){
    echo "<h1>Hello, " . $params['name']." <h1>";
});

$f3->route('GET /language/@lang', function($f3, $params){
    switch($params['lang']){
        case 'swahili':
            echo 'Jumbo!'; break;
        case 'spanish':
            echo "Hola!";break;
        case 'russian':
            echo "Privet";break;
        case 'farsi':
            echo "Salam!";break;
        default:
            echo "Hello!";
    }
    echo "<h1>Hello, " . $params['lang']." <h1>";
});

//Run Fat-Free Framework
$f3->run();
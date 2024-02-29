<?php

require '../vendor/autoload.php';
require 'Controller/Controller.php';

// Útválasztó példányosítása
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    // Itt definiáljuk az útvonalakat
    $r->addRoute('GET', '/gallery', [\Controller\Controller::class, 'gallery']);

    $r->addRoute('GET', '/about', function() {
        echo 'Rólunk';
    });
});

// Kérés információinak lekérése
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Query string eltávolítása az URI-ból
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

// Útválasztás
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // Nem létező útvonal
        http_response_code(404);
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        // Nem engedélyezett HTTP metódus
        $allowedMethods = $routeInfo[1];
        http_response_code(405);
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        // Útvonal megtalálva; meghívjuk a hozzárendelt callback függvényt
        $handler = $routeInfo[1];
        $handler();
        break;
}

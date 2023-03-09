<?php

$route = $_GET['route'] ?? '';

$routes = [

    'add' => '/add.php',
    'about' => '/about.php',
    '' => '/main.php',
];

include_once './../src/templates/header.html';

$isFound = false;

foreach ($routes as $key => $value){
    if($route == $key){
        $isFound = true;
        include_once './../src/templates/'.$value;
        break;
    }
}
if ($isFound == false){
    echo '<h1>404</h1>';
}

include_once './../src/templates/footer.php';


//$isRouteFound = false;
//foreach ($routes as $pattern => $controllerAndAction) {
//    preg_match($pattern, $route, $matches);
//    if (!empty($matches)) {
//        $isRouteFound = true;
//        break;
//    }
//}
//
//if (!$isRouteFound) {
//    echo 'Страница не найдена!';
//    return;
//}
//
//unset($route);
//
//var_dump ($matches);
//
//$controllerName = $controllerAndAction[0];
//$actionName = $controllerAndAction[1];
//
//$controller = new $controllerName();
//$controller->$actionName(...$matches);
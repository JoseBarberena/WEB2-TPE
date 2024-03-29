<?php


require_once "app/controllers/SaleController.php";
require_once "app\controllers\SellerController.php";

//require_once "Controller/LoginController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {  //si viene definida la reemplazamos
    $action = $_GET['action'];
}
else {
    $action = 'home'; //accion por defecto si no seleccionan nada
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode ('/', $action);

$saleController = new saleController();
$sellerController = new SellerController();
//$loginController = new LoginController();

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'login':
        $loginController->login();
        break;
    case 'logout':
        $loginController->logout();
        break;
    case 'verify':
        $loginController->verifyLogin();
        break;
    case 'home':
        $saleController->showHome();
        break;
    case 'showSales':
        $saleController->showSales();
        break;
    case 'saleDetail':
        $saleController->getSale($params[1]);
        break;
    case 'createSale':
        $saleController->createSale();
        break;
    case 'deleteSale':
        $saleController->deleteSale($params[1]);
        break;

    case 'updateSale':
        $saleController->updateSale($params[1]);
        break;


    case 'sellerfilter':
        $saleController->sellerfilter($params[1]);
        break; 

    case 'showSeller':
        $sellerController->showSellers();
        break;


    case 'createSeller':
        $sellerController->createSeller();
        break;


    case 'sellerDetail':
        $sellerController->getSeller($params[1]);
        break;


    case 'deleteSeller':
        $sellerController->deleteSeller($params[1]);
        break;



    case 'updateSeller':
        $sellerController->updateSeller($params[1]);
        break;
 
    default:
        echo ('404 Page not found');
        break;
}

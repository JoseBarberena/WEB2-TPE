<?php
require_once "app\models\VentasModel.php";
require_once "app/views/SaleView.php";



class saleController {

    private $model;
    private $view;

    
function __construct(){

    $this->model = new VentasModel();
    $this->view = new VentasView();
   // $this->model_vendedor = new VendedorModel();
    //$this->view_vendedor = new VendedorView();  
}

function showHome(){
    $this->view->showHome();
    
}

function showSales(){

    //obtengo las ventas 
    $Ventas = $this->model->getVentas();
    //Muestro las ventas desde la vista
    $this->view->ShowVentas($Ventas);
}

function createVenta(){

   
    // $this->model->createVenta($_POST['customer'], $_POST['invoice'], $_POST['dates'], $_POST['seller'], $_POST['product'], $_POST['quantity'], $_POST['unitprice'], $_POST['amount']);
    // $this->ShowVentas(); 



}

}
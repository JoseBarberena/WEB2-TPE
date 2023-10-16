<?php
require_once "app/models/SaleModel.php";
require_once "app/views/SaleView.php";
require_once "app/models/SellerModel.php";


class saleController {

    private $model;
    private $view;
    private $model_seller;

    
function __construct(){

    $this->model = new VentasModel();
    $this->view = new VentasView();
    $this->model_seller = new SellerModel();
    //$this->view_vendedor = new VendedorView();  
}

function showHome(){
    $this->view->showHome();
    
}

function showSales(){

    
    //obtengo las ventas 
    $sales = $this->model->getSales();
    //obtengo vendedores
    $sellers = $this->model_seller->getSellers();

    //Muestro las ventas desde la vista
    $this->view->showSales($sales, $sellers);
}

function getSale($id) {
       

    $sale =  $this->model->getSaleFromDB($id);
    $sellers = $this->model_seller->getSellers();
    $this->view->showSaleDetail($sale, $sellers);
}



function sellerfilter($id){
       

        $id = $_POST['seller'];
      
        if (
            !empty($id) 
        ) {
        $sellers = $this->model_seller->getSellerFromDBv1($id);
        $sales = $this->model->getSellerSaleFromDB($id);
        $this->view->showSalesFilter($sales, $sellers);
    } 
}


function createSale(){
    $sales = $this->model->getSales();
    $sellers = $this->model_seller->getSellers();
    $this->view->showFormVentas($sellers);

     //inserto todos los datos
        if (!empty($_POST)) {
            $cliente = $_POST['cliente'];
            $factura = $_POST['factura'];
            $fecha = $_POST['fecha'];
            $vendedor = $_POST['vendedor'];
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $p_unitario = $_POST['p_unitario'];
            $total = $_POST['total'];

            $this->model->insertSale($cliente,  $factura,  $fecha, $vendedor, $producto, $cantidad, $p_unitario, $total);
        } else {
          //  $this->view->showError("Complete todos los campos");
            die();
        }
        
        $this->view->showSales($sales, $sellers);

}
function deleteSale($id){
    //$this->authHelper->checkLoggedIn();  
    
    $this->model->deleteSaleFromDB($id); 
    $this->view->showHomeLocation();

}

function updateSale($id) {
   // $this->authHelper->checkLoggedIn(); 

   
    $id = $id;
    $cliente = $_POST['cliente'];
            $factura = $_POST['factura'];
            $fecha = $_POST['fecha'];
            $vendedor = $_POST['vendedor'];
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $p_unitario = $_POST['p_unitario'];
            $total = $_POST['total'];
   
    if (
        !empty($id) &&
        !empty($cliente) &&
        !empty( $factura) &&
        !empty($fecha ) &&
        !empty($vendedor) &&
        !empty($producto) &&
        !empty($cantidad) &&
        !empty($p_unitario) &&
        !empty($total)
    ) {
       
        $sale = $this->model->updateSaleFromDB($cliente,  $factura,  $fecha, $vendedor, $producto, $cantidad, $p_unitario, $total, $id);
        $this->getSale($id);
}}



}
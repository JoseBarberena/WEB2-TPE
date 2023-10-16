<?php
require_once "app/models/SaleModel.php";
require_once "app/views/SaleView.php";
require_once "app/models/SellerModel.php";
require_once "app\models\SellerModel.php";
require_once "app/views/SellerView.php";

class SellerController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){

        $this->model = new SellerModel();
        $this->view = new SellerView();
       // $this->authHelper = new AuthHelper();

    }

    function showSellers(){

        $sellers = $this->model->getSellers();
        $this->view->showSellers($sellers);

    }

    function createSeller()
    {
        //$this->authHelper->checkLoggedIn(); 
        $this->model->insertSeller($_POST['Vendedor'], $_POST['Zona'], $_POST['Comision']);
        $this->view->showSellerLocation();
    }

    function deleteSeller($id)
    {
        //$this->authHelper->checkLoggedIn(); 
        $this->model->deleteSellerFromDB($id);
        $this->view->showSellerLocation();
    }


    function getSeller($id)
    {
       
        $seller =  $this->model->getSellerFromDB($id);
        $this->view->showSellerDetail($seller);
    }

    function updateSeller($id)
    {
        //$this->authHelper->checkLoggedIn(); 

        $id = $id;
        $Vendedor = $_POST['Vendedor'];
        $Zona = $_POST['Zona'];
        $Comision = $_POST['Comision'];

        if (
            !empty($id) &&
            !empty($Vendedor) &&
            !empty($Zona) &&
            !empty($Comision)

        ) {
            $sellerup = $this->model->updateSellerFromDB($Vendedor, $Zona, $Comision, $id);
            $this->getSeller($id);
        }
    }

}
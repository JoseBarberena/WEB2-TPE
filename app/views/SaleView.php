<?php

require_once "libs/Smarty.class.php";
//require "templates\header.php";

class VentasView{

    private $smarty;
    
    function __construct()
    {
        $this->smarty = new Smarty();
    } 

    function showHome(){
        $this->smarty->assign('titulo', 'Nuestro negocio, su negocio...');
        $this->smarty->display('templates/home.tpl');
    }
    

    function showSales($sales, $seller){

        $this->smarty->assign('titulo', 'Nuestro negocio, su negocio...');
        $this->smarty->assign('titulo2', 'Ventas Diarias');
        $this->smarty->assign('sales', $sales);
        $this->smarty->assign('sellers', $seller);
        $this->smarty->display('templates/salesList.tpl');
               
    }
    function showSalesMod($sales, $seller){

        $this->smarty->assign('sales', $sales);
        $this->smarty->assign('sellers', $seller);
        $this->smarty->display('templates/salesListMod.tpl');
               
    }

    function showSaleDetail($sale, $sellers){
        $this->smarty->assign('titulo', 'Detalle de Venta');
        $this->smarty->assign('sale', $sale);
        $this->smarty->assign('sellers', $sellers);
        $this->smarty->display('templates/saleDetail.tpl');
    }


    function showFormVentas($sellers){
        $this->smarty->assign('titulo', 'Sale Detail');
        $this->smarty->assign('sellers', $sellers);
        $this->smarty->display('templates/form_alta.tpl');
        
    }

    function showSalesFilter($sales, $sellers) {
        $this->smarty->assign('titulo1', '....');
        $this->smarty->assign('titulo2', 'Daily Sales');
        $this->smarty->assign('sales', $sales);
        $this->smarty->assign('sellers', $sellers);
        $this->smarty->display('templates/salesListfilter.tpl');
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."showSales"); 
    }
}
    


    

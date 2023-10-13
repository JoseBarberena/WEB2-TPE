<?php

class VentasModel{

    private $db;

    function __construct(){

        $this->db = new PDO('mysql:host=localhost;dbname=web2-2023;charset=utf8', 'root', '');

    }

    function getVentas(){

        $query = $this->db->prepare('SELECT * FROM ventas');
            $query->execute();

            // $Ventas es un arreglo de tareas
            $Ventas = $query->fetchAll(PDO::FETCH_OBJ);

            return $Ventas;
        

        
    }

    function createVenta($customer, $invoice, $dates, $seller, $product, $quantity, $unitprice, $amount)
    {
        
        $sentencia = $this->db->prepare("INSERT INTO products_sales(Customer, Invoice, Date, Seller, Product, Quantity, Unit_Price, Amount) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->execute(array($customer, $invoice, $dates, $seller, $product, $quantity, $unitprice, $amount));
    }



}
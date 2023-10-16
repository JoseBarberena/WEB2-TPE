<?php

class VentasModel{

    private $db;

    function __construct(){

        $this->db = new PDO('mysql:host=localhost;dbname=web2-2023;charset=utf8', 'root', '');

    }

    function getSales(){

        $query = $this->db->prepare('SELECT * FROM ventas');
        $query->execute();

            // $Ventas es un arreglo de tareas
        $sale = $query->fetchAll(PDO::FETCH_OBJ);

            return $sale;
               
    }

    function getSaleFromDB($id){
        $sentencia = $this->db->prepare("SELECT * FROM ventas WHERE id=?");
        $sentencia->execute(array($id));
        $sale = $sentencia->fetch(PDO::FETCH_OBJ);
        return $sale;
    }

    function insertSale($cliente,  $factura,  $fecha, $vendedor, $producto, $cantidad, $p_unitario, $total)
    {
        
        $sentencia = $this->db->prepare("INSERT INTO ventas (Cliente, Factura, Fecha, id_vendedor, Producto, Cantidad, P_Unitario, Total) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $sentencia->execute(array($cliente, $factura, $fecha, $vendedor, $producto, $cantidad, $p_unitario, $total));
    }

    function deleteSaleFromDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM ventas WHERE id=?");
        $sentencia->execute(array($id));
    }



    function updateSaleFromDB($cliente,  $factura,  $fecha, $vendedor, $producto, $cantidad, $p_unitario, $total, $id)
    {
        $sentencia = $this->db->prepare("UPDATE ventas SET Cliente=?, Factura=?, Fecha=?, id_vendedor=?, Producto=?, Cantidad=?, P_Unitario=?, Total=? WHERE id=?");
        $sentencia->execute(array($cliente,  $factura,  $fecha, $vendedor, $producto, $cantidad, $p_unitario, $total, $id));
        $sale = $sentencia->fetch(PDO::FETCH_OBJ);
        return $sale;
    }


    function getSellerSaleFromDB($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM ventas WHERE id_vendedor=?");
        $sentencia->execute(array($id));
        $sales = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $sales;
    }

}
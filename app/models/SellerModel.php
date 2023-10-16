<?php

class SellerModel{
    private $db;

    
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=web2-2023;charset=utf8', 'root', '');
    }
     
    function getSellers()
    {
        $query = $this->db->prepare('SELECT * FROM vendedores');
       // $sentencia = $this->db->prepare("SELECT * FROM vendedores"); 
        $query->execute();
        $sellers = $query->fetchAll(PDO::FETCH_OBJ); 
        return $sellers;  
    }

    function getSellerFromDB($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM vendedores WHERE id_Vendedor=?");
        $sentencia->execute(array($id));
        $seller = $sentencia->fetch(PDO::FETCH_OBJ);
        return $seller;
    }

    function getSellerFromDBv1($id)
    {
        $sentencia = $this->db->prepare("SELECT Vendedor FROM vendedores WHERE id_Vendedor=?");
        $sentencia->execute(array($id));
        $sellers = $sentencia->fetch(PDO::FETCH_OBJ);
        return $sellers;
    }

    function insertSeller($Vendedor, $Zona, $Comision)
    {
        $sentencia = $this->db->prepare("INSERT INTO vendedores(Vendedor, Zona, Comision) VALUES(?, ?, ?)");
        $sentencia->execute(array($Vendedor, $Zona, $Comision));
    }

    function deleteSellerFromDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM vendedores WHERE id_Vendedor=?");
        $sentencia->execute(array($id));
    }
   





    function updateSellerFromDB($Vendedor, $Zona, $Comision, $id)
    {
        $sentencia = $this->db->prepare("UPDATE vendedores SET Vendedor=?, Zona=?, Comision=? WHERE id_Vendedor=?");
        $sentencia->execute(array($Vendedor, $Zona, $Comision, $id));
        $sellerup = $sentencia->fetch(PDO::FETCH_OBJ);
        return $sellerup;
    }
}

    


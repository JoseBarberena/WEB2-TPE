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
        $this->smarty->display('templates\home.tpl');
    }
    

    function ShowVentas($Ventas){

        $this->smarty->assing();

        include "templates\header.php";
        include 'templates\form_alta.php';
        //var_dump($Ventas);
        ?>
        <ul class="list-group">
        <?php foreach($Ventas as $ventas) { ?>
            <li class="list-group-item item-task ">
                <div>
                    <b><?php echo $ventas->id ?></b>  |  <b><?php echo $ventas->Cliente ?></b>
                    |  <b><?php echo $ventas->Factura ?></b> |  <b><?php echo $ventas->Fecha ?></b> 
                    |  <b><?php echo $ventas->id_vendedor ?></b> |  <b><?php echo $ventas->Producto ?></b>
                </div>
                <div class="actions">
                    <?php if(!$task->finalizada) { ?> <a href="finalizar/<?php echo $task->id ?>" type="button" class='btn btn-success ml-auto'>Finalizar</a> <?php } ?>
                    <a href="eliminar/<?php echo $task->id ?>" type="button" class='btn btn-danger ml-auto'>Borrar</a>
                </div>
            </li>
        <?php } ?>
        </ul>

        <?php
        //require 'templates/footer.php';
        
    }

    

}
    

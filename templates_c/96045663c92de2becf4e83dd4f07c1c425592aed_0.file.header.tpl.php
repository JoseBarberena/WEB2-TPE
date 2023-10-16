<?php
/* Smarty version 4.3.4, created on 2023-10-16 15:00:12
  from 'C:\XAAMP\htdocs\Web2-2023\TPE-WEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_652d33dc4b3ca6_48270608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96045663c92de2becf4e83dd4f07c1c425592aed' => 
    array (
      0 => 'C:\\XAAMP\\htdocs\\Web2-2023\\TPE-WEB2\\templates\\header.tpl',
      1 => 1697461208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652d33dc4b3ca6_48270608 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet2">
    <title>BI</title>
</head>

<body class="container">

<h1><span class="d-block p-2 text-bg-dark align-middle d-flex justify-content-center">Soluciones Integradas</span></h1>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">- HOME -</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="showSales">Ventas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="showSeller">Vendedores</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="createSale">Agregar Ventas</a>
            </li>
            </ul>
           <div>
            <button class="d-flex btn btn-outline-success" role="search" type="submit">
              <a href="login" class="nav-link active">Login</a>
            </button>
            </div>
            <div>
            <button class="d-flex btn btn-outline-success" role="search" type="submit">
              <a href="logout" class="nav-link active">Logout</a>
            </button>
            </div>
          </div>
        </div>
      </nav>

  
          
     
      
      
      
   
    <?php }
}

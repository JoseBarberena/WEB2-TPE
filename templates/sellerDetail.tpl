{include file="header.tpl"}

<div class="container">
  
  <h2 class="my-4 d-flex justify-content-center">{$titulo}</h2>


  <div class="container">
    <ul class="list-group">
      <li class="list-group-item">ID: {$seller->id_Vendedor}</li>
      <li class="list-group-item">Vendedor: {$seller->Vendedor}</li>
      <li class="list-group-item">Zona: {$seller->Zona}</li>
      <li class="list-group-item">Comision: {$seller->Comision}</li>

    </ul>
  </div>

</div>

<div class="container">
  <div class="container text-center btn-group">
    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
      data-bs-display="static" aria-expanded="false">
      - Actulizar Datos de Vendedores -
    </button>
    <div class="dropdown-menu dropdown-menu-dark dropdown dropdown-menu-end dropdown-menu-lg-start">
      <form class="row gx-3 gy-2 align-items-center container dropdown-menu-end "
        action="updateSeller/{$seller->id_Vendedor}" method="post">


               <div class="col-sm-3">
          <label>Seller</label><input type="text" name="Vendedor" value="{$seller->Vendedor}" class="form-control"
            id="specificSizeInputName" placeholder="">
        </div>

        <div class="col-sm-3">
          <label>Sales_Area</label><input type="text" name="Zona" value="{$seller->Zona}"
            class="form-control" id="specificSizeInputName" placeholder="">
        </div>

        <div class="col-sm-3">
          <label>Sales_Commission</label><input type="double" name="Comision"
            value="{$seller->Comision}" class="form-control" id="specificSizeInputName" placeholder="">
        </div>

        <div class="col-auto">
          <button type="submit" class="btn btn-dark">Send</button>
        </div>

      </form>

    </div>
  </div>


</div class="container">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSeller">Return</a></button>
  <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
</div>




{include file="footer.tpl"}
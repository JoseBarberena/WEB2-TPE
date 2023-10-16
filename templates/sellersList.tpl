{include file="header.tpl"}

<div class="container">

  <h4 class="mt-2">{$titulo1}</h4>


  <div class="dropdown dropend">
    <button class="btn btn-secondary btn-lg dropdown-toggle dropend" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    - Agregar Vendedor -
    </button>
    <div class="dropdown-menu dropdown-menu-dark dropend">
      <form class="row gx-3 gy-2 align-items-center container " action="createSeller" method="post">
        <div class="col-sm-3">
          <input type="text" name="Vendedor" class="form-control" id="specificSizeInputName" placeholder="Vendedor">
        </div>
        <div class="col-sm-3">
          <input type="text" name="Zona" class="form-control" id="specificSizeInputName" placeholder=" Zona">
        </div>
        <div class="col-sm-3">
          <input type="double" name="Comision" class="form-control" id="specificSizeInputName" placeholder=" Comision">
        </div>


        <div class="col-auto">
          <button type="submit" class="btn btn-dark">Agregar</button>
        </div>
      </form>

    </div>
  </div>

  

  <h1 class="my-4 d-flex justify-content-center">{$titulo2}</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Vendedor</th>
        <th scope="col">Zona</th>
        <th scope="col">Comision por Ventas</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$sellers item=$seller}
        <tr>
          <td><a href="sellerDetail/{$seller->id_Vendedor}" class="btn btn-outline-success btn-sm">{$seller->id_Vendedor}</a></td>
          <td>{$seller->Vendedor}</td>
          <td>{$seller->Zona}</td>
          <td>{$seller->Comision}</td>
          
          <td><a href="deleteSeller/{$seller->id_Vendedor}" class="btn btn-outline-danger btn-sm">Delete</a></td>
          <td><a href="sellerDetail/{$seller->id_Vendedor}" class="btn btn-outline-success btn-sm">Display/Update</a></td>
        </tr>
      {/foreach}
    </tbody>
  </table>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSeller">On the top</a></button>
  <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
  </div>
</div>

{include file="footer.tpl"}
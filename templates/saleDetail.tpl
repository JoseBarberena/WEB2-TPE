{include file="header.tpl"}

<div class="container">

    <h1 class="my-4 d-flex justify-content-center">{$titulo}</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Cliente</th>
                <th scope="col"> Producto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$sale->id}</td>
                <td>{$sale->Cliente}</td>
                <td>{$sale->Producto}</td>
            </tr>
        </tbody>
    </table>


    <div class="container">
        <ul class="list-group">
            <li class="list-group-item">Factura: {$sale->Factura}</li>
            <li class="list-group-item">Fecha: {$sale->Fecha}</li>
            <li class="list-group-item">Vendedor: {$sale->id_vendedor}</li>
            <li class="list-group-item">Cantidad: {$sale->Cantidad}</li>
            <li class="list-group-item">Pcio U: {$sale->P_Unitario}</li>
            <li class="list-group-item">Total: {$sale->Total}</li>
        </ul>

    </div>

<div class="
container text-center btn-group">
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
        - Actualizar Operacion -
        </button>
        <div class="dropdown-menu dropdown-menu-dark dropdown dropdown-menu-end dropdown-menu-lg-start">Select the field to change and update it 
          <form class="row gx-3 gy-2 align-items-center container dropdown-menu-end " action="updateSale/{$sale->id}" method="post">
            <div class="col-sm-3">
    
              
            <label>Cliente</label><input type="text" name="cliente" value="{$sale->Cliente}" class="form-control" id="specificSizeInputName" placeholder="Cliente">
            </div>
            <div class="col-sm-3">
            <label>Factura</label><input type="text" name="factura" value="{$sale->Factura}" class="form-control" id="specificSizeInputName" placeholder="Factura">
            </div>
            <div class="col-sm-3">
            <label>Fecha</label><input type="date" name="fecha" value="{$sale->Fecha}" class="form-control" id="specificSizeInputName" placeholder="Fecha">
            </div>


            <div class="col-sm-3">
              <label  for="specificSizeSelect">Perro</label>
              <select type="number" class="form-select" id="priority" name="vendedor" value="{$sale->Vendedor}" >
                    {foreach from=$sellers item=$seller}
                         <option value='{$seller->id_Vendedor}'>{$seller->id_Vendedor} - {$seller->Vendedor}</option>
                    {/foreach} 

              </select>
            </div>


            <div class="col-sm-3">
            <label>Producto</label><input type="text" name="producto" value="{$sale->Producto}" class="form-control" id="specificSizeInputName" placeholder="Product">
            </div>
            <div class="col-sm-3">
            <label>Cantidad</label><input type="number" name="cantidad" value="{$sale->Cantidad}" class="form-control" id="specificSizeInputName" placeholder="Quantity">
            </div>
            <div class="col-sm-3">
            <label>P Unitario</label><input type="number" name="p_unitario" value="{$sale->P_Unitario}" class="form-control" id="specificSizeInputName"
                placeholder="Unit_Price">
            </div>
            <div class="col-sm-3">
            <label>Total</label><input type="number" name="total" class="form-control" value="{$sale->Cantidad}" id="specificSizeInputName" placeholder="Amount">
            </div>
    
            <div class="col-auto">
              <button type="submit" class="btn btn-dark">EDIT</button>
            </div>
          </form>
    
        </div>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSales">Return</a></button>
      <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
      </div>
  

</div>


{include file="footer.tpl"}
{include file="header.tpl"}

<h2>{$titulo}</h2>




 {* ---Tabla para mostrar la lista de ventas --- *}

 <h2 class="my-4 d-flex justify-content-center">{$titulo2}</h2>
 <table class="table">
   <thead>
     <tr>
       <th scope="col">ID</th>
       <th scope="col">Cliente</th>
       <th scope="col">Comprobante N°</th>
       <th scope="col">Fecha</th>
       <th scope="col">Vendedor</th>
       <th scope="col">Producto</th>
       <th scope="col">Cantidad</th>
       <th scope="col">Pcio U</th>
       <th scope="col">Total</th>
       <th scope="col">Delete</th>
       <th scope="col">Update</th>
     </tr>
   </thead>
   <tbody>
     {foreach from=$sales item=$sale}
       <tr>
         <td><a href="saleDetail/{$sale->id}" class="btn btn-outline-success btn-sm">{$sale->id}
             - Display</a></td>
         <td>{$sale->Cliente}</td>
         <td>{$sale->Factura}</td>
         <td>{$sale->Fecha}</td>
         <td>{$sale->id_vendedor}</td>
         <td>{$sale->Producto}</td>
         <td>{$sale->Cantidad}</td>
         <td>{$sale->P_Unitario}</td>
         <td>{$sale->Total}</td>
         <td><a href="deleteSale/{$sale->id}" class="btn btn-outline-danger btn-sm">Delete</a></td>
         <td><a href="saleDetail/{$sale->id}" class="btn btn-outline-success btn-sm">Display/Update</a>
         </td>
       </tr>
     {/foreach}
   </tbody>
 </table>

 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
   <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSales">back to top /
       return</a></button>
   <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
 </div>
</div>





 {* ---Formulario para agregar ventas --- *}

 <div class="dropdown d-flex justify-content-between my-4">
  
 <div>
   <button class="btn btn-secondary btn-lg dropdown-toggle " type="button" data-bs-toggle="dropdown"
     aria-expanded="false">
     - Agregar Venta -
   </button>
   <div class="dropdown-menu dropdown-menu-dark ">

     <form class="row gx-3 gy-2 align-items-center container " action="createSale" method="post">

       <div class="col-sm-3">
         <input type="text" name="cliente" class="form-control" id="specificSizeInputName" placeholder="Cliente">
       </div>
       <div class="col-sm-3">
         <input type="text" name="factura" class="form-control" id="specificSizeInputName" placeholder="Factura">
       </div>
       <div class="col-sm-3">
         <input type="date" name="fecha" class="form-control" id="specificSizeInputName" placeholder="Fecha">
       </div>
       <div class="col-sm-3">
         <label class="visually-hidden" for="specificSizeSelect">Vendedor</label>
         <select type="number" class="form-select" id="priority" name="vendedor" value="{$sale->Vendedor}">
           {foreach from=$sellers item=$seller}
             <option value='{$seller->id_Vendedor}'>{$seller->id_Vendedor} -  {$seller->Vendedor}</option>
           {/foreach}
         </select>
       </div>
       <div class="col-sm-3">
         <input type="text" name="producto" class="form-control" id="specificSizeInputName" placeholder="Producto">
       </div>
       <div class="col-sm-3">
         <input type="number" name="cantidad" class="form-control" id="specificSizeInputName" placeholder="Cantidad">
       </div>
       <div class="col-sm-3">
         <input type="number" name="p_unitario" class="form-control" id="specificSizeInputName"
           placeholder="P Unitario">
       </div>
       <div class="col-sm-3">
         <input type="number" name="total" class="form-control" id="specificSizeInputName" placeholder="Total">
       </div>

       <div class="col-auto">
         <button type="submit" class="btn btn-dark">Submit</button>
       </div>
     </form>

   </div>
 </div>



  {* ---Formulario para filtrar ventas por vendedor --- *}

  <div class="dropdown dropstart">
  <button class="btn btn-secondary btn-lg dropdown-toggle " type="button" data-bs-toggle="dropdown"
    aria-expanded="false">

    - Filtro por Vendedor -
  </button>
  <div class="dropdown-menu dropdown-menu-dark ">
  
    <form action="sellerfilter/{$seller->id_Vendedor}" method="post">

      <div class="col-sm-3 input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect02">Opciones</label>
        <select type="number" class="form-select" id="priority" name="seller" value=""
          placeholder="Elija un Vendedor">
          <option selected>Elegir...</option>
          {foreach from=$sellers item=$seller}
            <option value="{$seller->id_Vendedor}">{$seller->id_Vendedor} - {$seller->Vendedor}</option>
          {/foreach}
        </select>
      </div>

      <div class="col-auto">
        <button type="submit" class="btn btn-dark">Select</button>
      </div>
    </form>
  </div>
</div>
</div>

{include file="footer.tpl"}
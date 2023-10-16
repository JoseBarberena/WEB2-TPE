

{include file="header.tpl"}

<div class="container">

  <h2>{$titulo1}</h2>

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
          <td><a href="saleDetail/{$sale->id}" class="btn btn-outline-success btn-sm">{$sale->id}</a></td>
          <td>{$sale->Cliente}</td>
          <td>{$sale->Factura}</td>
          <td>{$sale->Fecha}</td>
          <td>{$sale->id_vendedor} - {$sellers->Vendedor}</td>  
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
    <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="showSales">back to top / return</a></button>
    <button class="btn btn-outline-secondary"><a class="btn btn-secondary" href="home">Home</a></button>
  </div>
</div>

{include file="footer.tpl"}   
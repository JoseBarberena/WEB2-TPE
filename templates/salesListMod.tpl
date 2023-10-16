{* ---Tabla para mostrar la lista de ventas --- *}


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


</div>


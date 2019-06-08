<div class="modal fade modal-stock" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="title_dialog_detalle">Exportar listado de stock</h4>
      </div>  
      <div class="modal-body">
        <p>Incluye:</p>
        <ul>
          <li>Codigo</li>
          <li>Producto</li>
          <li>Stock mínimo</li>
          <li>Stock actual</li>
          <li>Precio de venta</li>
        </ul>
      </div>
      <div class="modal-footer p-botones">
        <div class="col-xs-6">
          <a href="{{url('/exportar/stock/xls')}}" id="" class="boton boton-confirmar boton_verde text-center col-xs-12" download=""><img src="images/iconos_botones/excel.png" style="width: 50%"><p>Exportar en Excel</p></a>
        </div>
        <div class="col-xs-6">
          <a href="{{url('/exportar/stock/pdf')}}" id="" class="boton boton-confirmar text-center col-xs-12 boton_rojo"><img src="images/iconos_botones/pdf3.png" style="width: 50%"><p>Exportar en PDF</p></a>
        </div>
      </div>
    </div>
  </div>
</div>
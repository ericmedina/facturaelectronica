<div class="modal fade modal-precios" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="title_dialog_detalle">Exportar listado de precios</h4>
      </div>  
      <div class="modal-body">
        <p>Incluye:</p>
        <ul>
          <li>Codigo</li>
          <li>Producto</li>
          <li>Precio de venta</li>
        </ul>
      </div>
      <div class="modal-footer">
        <a href="{{url('/exportar/precios/xls')}}" id="" class="boton boton-confirmar" download="">Exportar en excel</a>
        <a href="{{url('/exportar/precios/pdf')}}" id="" class="boton boton-confirmar">Exportar en PDF</a>
      </div>
    </div>
  </div>
</div>
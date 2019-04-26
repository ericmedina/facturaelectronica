<div class="modal fade modal-agregar-producto" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="title_dialog_detalle">Agregar producto</h4>
      </div>
      <div class="modal-body row">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
          <div class="col-md-12 col-xs-12 form-item">
            <label class="col-xs-4 col-md-3 label-control" for="buscar_producto">Producto:</label>
            <div class=" col-md-9 col-xs-8" style="padding-left: 0px;">
            <div class="autocomplete col-xs-12" style="padding-left: 0px;padding-right: 0px;">
              <input type="text" name="buscar_producto" class="form-control col-xs-12" id="buscar_producto" placeholder="Codigo/Producto..">
            </div>
          </div>
          </div>
          <div class="col-md-6 col-xs-12  form-item">
            <label class="col-xs-5 col-md-4 label-control" for="precio_servicio">IVA:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <select name="iva_producto" id ="iva_producto" class="form-control">
                @foreach($iva as $alicuota)
                  @if($alicuota->id == 5)
                    <option selected="" value="{{ $alicuota->id }}">{{ $alicuota->alicuota }}</option>
                  @else
                    <option value="{{ $alicuota->id }}">{{ $alicuota->alicuota }}</option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6 col-xs-12  form-item">
            <label class="col-xs-5 col-md-4 label-control" for="precio_producto">Precio:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <span class="hidden-xs hidden-sm input-group-addon">$</span>
              <input type="text" name="precio_producto" class="form-control" id="precio_producto" value="">
            </div>
          </div>
          <div class="col-md-6 col-xs-12 form-item">
            <label class="col-xs-5 col-md-4 label-control" for="cantidad_detalle">Cantidad:</label>
            <div class=" col-xs-7 col-md-8 input-group">
              <input type="text" name="cantidad_detalle" class="form-control" id="cantidad_detalle" value="1">
            </div>
          </div>
          <div class="col-md-6 col-xs-12  form-item">
            <label class="col-xs-5 col-md-4 label-control" for="total_detalle">Total:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <span class="hidden-xs hidden-sm input-group-addon">$</span>
              <input type="text" name="total_detalle" class="form-control" id="total_detalle" value="0">
              <input type="hidden" name="hidden_id" id="hidden_id" value="0">
            </div>
          </div>
        </div>
        <br>
      </div>
      <div class="clearfix"></div>
      <div class="modal-footer">
        <button type="button" class="boton boton-cancelar" data-dismiss="modal">Cerrar</button>
        <button type="button" name="boton-confirmar" id="boton-confirmar" class="boton boton-confirmar">Añadir</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade modal-agregar-descripcion" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="title_dialog_detalle">Insertar detalle</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="col-md-8 col-xs-12 form-item">
            <label class="col-xs-12 col-md-4 label-control" for="descripcion">Descripcion:</label>
            <div class=" col-xs-12  col-md-8 input-group">
              <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="codigo/producto" value="">
            </div>
          </div>
          <div class="col-md-4 col-xs-12 form-item">
            <label class="col-xs-5 col-md-4 label-control" for="cantidad_descripcion">Cantidad:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <input type="text" name="cantidad_descripcion" class="form-control" id="cantidad_descripcion" value="1">
            </div>
          </div>
          <div class="col-md-4 col-xs-12  form-item">
            <label class="col-xs-5 col-md-4 label-control" for="">IVA:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <select name="iva_descripcion" id ="iva_descripcion" class="form-control">
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
          <div class="col-md-4 col-xs-12  form-item">
            <label class="col-xs-5 col-md-4 label-control" for="precio_descripcion">Precio:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <span class="input-group-addon">$</span>
              <input type="text" name="precio_descripcion" class="form-control" id="precio_descripcion" value="">
            </div>
          </div>
          <div class="col-md-4 col-xs-12  form-item">
            <label class="col-xs-5 col-md-4 label-control" for="total_descripcion">Total:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <span class="input-group-addon">$</span>
              <input type="text" name="total_descripcion" class="form-control" id="total_descripcion" value="0">
            </div>
          </div>
        </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="boton boton-cancelar" data-dismiss="modal">Cerrar</button>
        <button type="button" name="boton_confirmar_descripcion" id="boton_confirmar_descripcion" class="boton boton-confirmar">Añadir</button>
      </div>

    </div>
  </div>
</div>

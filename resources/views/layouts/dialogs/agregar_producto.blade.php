<div class="modal fade modal-agregar-producto" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="title_dialog_detalle">Agregar producto</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="col-md-8 col-xs-12 form-item">
            <label class="col-xs-12 col-md-4 label-control" for="buscar_producto">Producto:</label>
            <div class=" col-xs-12  col-md-8 input-group">
              <input type="text" name="buscar_producto" class="form-control" id="buscar_producto" placeholder="codigo/producto" value="">
            </div>
          </div>
          <div class="col-md-4 col-xs-12 form-item">
            <label class="col-xs-5 col-md-4 label-control" for="cantidad_detalle">Cantidad:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <input type="text" name="cantidad_detalle" class="form-control" id="cantidad_detalle" value="1">
            </div>
          </div>
          <div class="col-md-4 col-xs-12  form-item">
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
          <div class="col-md-4 col-xs-12  form-item">
            <label class="col-xs-5 col-md-4 label-control" for="precio_producto">Precio:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <span class="input-group-addon">$</span>
              <input type="text" name="precio_producto" class="form-control" id="precio_producto" value="">
            </div>
          </div>
          <div class="col-md-4 col-xs-12  form-item">
            <label class="col-xs-5 col-md-4 label-control" for="total_detalle">Total:</label>
            <div class=" col-xs-7  col-md-8 input-group">
              <span class="input-group-addon">$</span>
              <input type="text" name="total_detalle" class="form-control" id="total_detalle" value="0">
              <input type="hidden" name="hidden_id" id="hidden_id" value="0">
            </div>
          </div>
        </div>
        <br>
        <br class="clearfix">
        <div id="card" class="table-modal hidden">
          <table id="tabla_productos" name="tabla_productos" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Detalle</th>
                  <th>IVA</th>
                  <th>Precio</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="boton boton-cancelar" data-dismiss="modal">Cerrar</button>
        <button type="button" name="boton-confirmar" id="boton-confirmar" class="boton boton-confirmar">Añadir</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade modal-agregar-compras" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-lg m-0">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="title_dialog_detalle">Agregar producto</h4>
      </div>  
      <div class="modal-body p-botones">
                <div class="container-fluid p-botones">
          <div class="col-md-8 col-xs-12 form-item">
            <label class="col-md-3 col-xs-3 label-control" for="buscar_producto">Producto:</label>
            <div class=" col-md-9 col-xs-9 input-group">
              <input type="text" name="buscar_producto" class="form-control" id="buscar_producto" placeholder="codigo/producto" value="">
            </div>
          </div>
          <div class="col-md-4 col-xs-6 form-item">
            <label class="col-md-4 col-xs-6 label-control" for="cantidad_detalle">Cantidad:</label>
            <div class=" col-md-8 col-xs-6 input-group">
              <input type="text" name="cantidad_detalle" class="form-control" id="cantidad_detalle" value="1">
            </div>
          </div>
          <div class="col-md-6 col-xs-6  form-item">
            <label class="col-md-4 col-xs-5 label-control" for="precio_producto">Precio:</label>
            <div class=" col-md-8 col-xs-7 input-group">
              <span class="input-group-addon pc">$</span>
              <input type="text" name="precio_producto" class="form-control" readonly="" id="precio_producto" value="0">
            </div>
          </div>
          <div class="col-md-6 col-xs-12  form-item">
            <label class="col-md-4 col-xs-5 label-control" for="total_detalle">Total:</label>
            <div class=" col-md-8 col-xs-7 input-group">
              <span class="input-group-addon">$</span>
              <input type="text" name="total_detalle" class="form-control" id="total_detalle" value="0">
              <input type="hidden" name="hidden_id" id="hidden_id" value="0">
              <input type="hidden" name="hidden_id" id="hidden_iva" value="">
            </div>
          </div>
        </div>
        <br>
        <br class="clearfix">
        <div id="card" class=" table-modal hidden">
          <table id="tabla_productos" name="tabla_productos" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Producto</th>
                  <th>Precio compra</th>
                  <th>Stock actual</th>
                  <th>Proveedor</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer p-botones">
        <button type="button" class="boton boton-cancelar" data-dismiss="modal">Cerrar  <i class="fa fa-times size-17"></i></button>
        <button type="button" name="boton-confirmar" id="boton-confirmar" class="boton boton-confirmar boton_verde" >Añadir <i class="fa fa-check size-17"></i></button>
      </div>

    </div>
  </div>
</div>
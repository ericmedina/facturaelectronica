<div class="modal fade modal-buscar-proveedor" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-center" id="title_dialog_detalle">Buscar proveedor</h4>
      </div>  
      <div class="modal-body">
        <div class="form-group form-item">
          <label class="control-label col-md-3 col-sm-3 col-xs-4" for="buscar_proveedor">Buscar:
          </label>
          <div class="col-md-6 col-sm-6 col-xs-8">
            <input type="text" id="buscar_proveedor" name="buscar_proveedor" class="form-control col-md-7 col-xs-12" placeholder="Proveedor">
          </div>
        </div>
        <br>
        <br>
        <div id="card" class=" table-modal">
          <table id="tabla_clientes" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>CUIT</th>
                  <th>Deuda</th>
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
      </div>

    </div>
  </div>
</div>
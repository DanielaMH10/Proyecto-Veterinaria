<div class="modal fade" id="ModalUpdateUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Actualizar datos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form id="formUpdateUser" >
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombres</label>
                    <input type="text" class="form-control" id="inputNombreUpdate" name="inputNombreUpdate" >
                </div>
                <div class="form-group col-md-6">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" id="inputApellidosUpdate" name="inputApellidosUpdate" >
                </div>
            </div>     
            <div class="form-group">
                <label>Correo electronico</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="inputCorreoUpdate" name="inputCorreoUpdate" placeholder="ejemplo123@misena.edu.co">
                    <div class="input-group-prepend" disabled>
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-at icono"></i></div>
                    </div> 
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="inputPasswordUpdate" name="inputPasswordUpdate">                   
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Telefono</label>
                    <input type="text" class="form-control" id="inputTelefonoUpdate" name="inputTelefonoUpdate" >
                </div>
                <div class="form-group col-md-6">
                    <label>Direccion</label>
                    <input type="text" class="form-control" id="inputDireccionUpdate" name="inputDireccionUpdate" >
                </div>
            </div> 
            <div class="form-group">
                <label>Estado</label>
                <select class="form-control" id="inputEstadoUpdate" name="inputEstadoUpdate">
                    <option value=1>Activo</option>
                    <option value=2>Inactivo</option>
                </select>
            </div>
            <div class="form-group">
                <label>Rol / Cargo</label>
                <select class="form-control" id="inputRolUpdate" name="inputRolUpdate">
                    <option value="Paciente">Paciente</option>
                    <option value="Medico" selected>Medico</option>
                </select>
            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">cancelar</button>
                        <button type="button" class="btn btn-primary" id="btnUpdateUser" name="btnUpdateUser" data-dismiss="modal">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
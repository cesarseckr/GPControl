<div class="modal fade" id="add_usuario" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="add"><i class="fas fa-user-plus"></i>&nbsp; Registro de usuarios</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<form>
		    	<div class="modal-body">
					<div class="form-row">
				    	<div class="form-group col-md-12">
				    		<div class="row">
					    		<div class="form-group col-sm-12">
					      			<label for="input" >* Nombre de Usuario</label>
					      			<input  class="form-control" id="frm_usuario" placeholder="Nombre de usuario" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un nombre</p>">
					    		</div>
							    <div class="form-group col-sm-6">
							    	<label for="input" >* Contraseña</label>
							      	<input type="password" class="form-control" id="frm_pass1" placeholder="Contraseña" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese placas de motocicleta</p>">
							    </div>
							    <div class="form-group col-sm-6">
							    	<label for="input" >* Repetir la contraseña</label>
							      	<input type="password" class="form-control" id="frm_pass2" placeholder="Repetir la contraseña" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese placas de motocicleta</p>">
							    </div>
							    <div class="form-group col-sm-6">
							      	<label for="input" >* Area</label>
							      	<select class="form-control" id="frm_area" placeholder="Area" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un serie</p>">
							      		<option value="99">Administrador</option>
							      		<option value="1">Monitoreo</option>
							      		<option value="2">Mantenimiento</option>
							      	</select>
							    </div>
							    <div class="form-group col-sm-6">
							      	<label for="input" >* Estatus</label>
							      	<select class="form-control" id="frm_estatus" placeholder="Estatus" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un serie</p>">
							      		<option value="1">Activo</option>
							      		<option value="2">Inactivo</option>
							      	</select>
							    </div>
							</div>
						</div>  
		      		</div>
		    	</div>
		      	
	      		<div class="modal-footer">
	      			<button class="btn btn-primary btn-sm">
	      				<i class="fa fa-play-circle"></i>Registrar
	      			</button>
	      			<button type="reset" class="btn btn-secondary btn-sm">
	        			<i class="fa fa-eraser"></i>
	    			</button>
	        		<button class="btn btn-danger btn-sm" data-dismiss="modal">
	        			<i class="fa fa-times"></i>Cerrar
	        		</button>
	        	</div>
	    	</form>
      	</div>
    </div>
</div>

<script>
	$successMsg = $(".alert");
	$.validate({
	    form : '#add_usuario',
	    errorMessageClass: "error",
	    onSuccess: function(){
	      	add_usuario(); 
	  		$successMsg.show();
	      	return false; 
	    }
	});
</script>
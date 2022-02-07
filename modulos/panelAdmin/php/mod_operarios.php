<div class="modal fade" id="mod_operarios" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="add"><i class="menu-icon fa fa-user-circle"></i>&nbsp; Modificar datos de Operarios</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<form>
		    	<div class="modal-body">
					<div class="form-row">
				    	<div class="form-group col-md-12">
				    		<div class="row">
					    		<div class="form-group col-sm-12"  style="display: none">
					      			<label for="input" >ID Operarios</label>
					      			<input  class="form-control" id="mod_oper_id_operario">
					    		</div>
					    		<div class="form-group col-sm-4">
					      			<label for="input" >* Apellido Paterno</label>
					      			<input  class="form-control" id="mod_oper_apaterno" placeholder="Apellido paterno del operario" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese el apellido paterno del operario</p>">
					    		</div>
					    		<div class="form-group col-sm-4">
					      			<label for="input" >* Apellido Materno</label>
					      			<input  class="form-control" id="mod_oper_amaterno" placeholder="Apellido materno del operario" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese apellido materno del operario</p>">
					    		</div>
					    		<div class="form-group col-sm-4">
					      			<label for="input" >* Nombre </label>
					      			<input  class="form-control" id="mod_oper_nombre" placeholder="Nombre del operario" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese el nombre del operario</p>">
					    		</div>
							    <div class="form-group col-sm-4">
							    	<label for="input" >*Fecha exp. de la licencia</label>
							      	<input type="date" class="form-control" id="mod_oper_fExp" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese fecha de expiración de la licencia</p>">
							    </div>
							    <div class="form-group col-sm-4">
							    	<label for="input" >Telefono</label>
							      	<input class="form-control" id="mod_oper_tel" placeholder="Telefono del Operario">
							    </div>
							    <div class="form-group col-sm-4">
							    	<label for="input" >Dirección</label>
							      	<input class="form-control" id="mod_oper_dir" placeholder="Dirección del Operario">
							    </div>
							    <div class="form-group col-sm-12">
							    	<label for="input" >Email</label>
							      	<input class="form-control" id="mod_oper_email" placeholder="Email del Operario">
							    </div>
							    <div class="form-group col-sm-6">
							      <label for="input" >* Disponibilidad</label>
							      <select class="form-control" id="mod_oper_disponibilidad" placeholder="Estatus" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Seleccione la disponibilidad de este equipo</p>">
							      	<option value="1">Disponible</option>
							      	<option value="2">En viaje</option>
							      	<option value="3">Indispuesto</option>
							      </select>
							    </div>
							    <div class="form-group col-sm-6">
							      	<label for="input" >* Estatus</label>
							      	<select class="form-control" id="mod_oper_estatus" placeholder="Estatus" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Seleccione el estatus del operario</p>">
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
	    form : '#mod_operarios',
	    errorMessageClass: "error",
	    onSuccess: function(){
	      	mod_operarios(); 
	  		$successMsg.show();
	      	return false; 
	    }
	});
</script>
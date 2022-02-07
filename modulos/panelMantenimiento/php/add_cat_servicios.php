<div class="modal fade" id="add_cat_servicios" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="add"><i class="menu-icon fas fa-clipboard-list"></i>&nbsp; Nuevo servicio</h5>
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
					      			<label for="input" >* Nombre:</label>
					      			<input  class="form-control" id="add_cat_nombre" placeholder="Nombre del servicio" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese el nombre del nuevo servicio</p>">
					    		</div>
					    		<div class="form-group col-sm-12">
							      	<label for="input" >* Categoría:</label>
							      	<select class="form-control" id="add_cat_categoria" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Seleccione la categoria del servicio</p>">
							      		<option value="MOTOR">Motor</option>
							      		<option value="ENFRIAMIENTO">Enfriamiento</option>
							      		<option value="COMBUSTIBLE">Combustible</option>
							      		<option value="DIRECCION">Direccion</option>
							      		<option value="CLUTCH">Clutch</option>
							      		<option value="ELECTRICIDAD">Electricidad</option>
							      		<option value="TREN MOTRIZ">Tren Motriz</option>
							      		<option value="SUSPENSION">Suspensión</option>
							      		<option value="FRENOS Y RODAMIENTOS">Frenos y Rodamientos</option>
							      		<option value="LLANTAS">Llantas</option>
							      		<option value="CHASIS">Chasis</option>
							      		<option value="DOLLY">Dolly</option>
							      		<option value="MOTOCICLETA">Motocicleta</option>
							      		<option value="MONTACARGAS">Montacargas</option>
							      	</select>
							    </div>
							    <div class="form-group col-sm-12">
							      	<label for="input" >* Tipo:</label>
							      	<select class="form-control" id="add_cat_tipo" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Seleccione el tipo</p>">
							      		<option value="1">Unidad</option>
							      		<option value="2">Motocicleta</option>
							      		<option value="3">Motontacargas</option>
							      		<option value="4">Chasis</option>
							      		<option value="5">Dolly</option>
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
	    form : '#add_cat_servicios',
	    errorMessageClass: "error",
	    onSuccess: function(){
	      	add_cat_servicios(); 
	  		$successMsg.show();
	      	return false; 
	    }
	});
</script>
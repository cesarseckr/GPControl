<div class="modal fade" id="mod_data_r_salida" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="add"><i class="fas fa-sign-out-alt"></i>&nbsp; Registro de salida</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			     	<span aria-hidden="true">&times;</span>
			    </button>
			</div>
			<form>
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col-md-12">
					    	<div class="row">
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >* ID Viaje</label>
							      	<input  class="form-control" id="reg_sal_id_viaje" placeholder="ID Viaje">
							    </div>
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Unidad</label>
							      	<input  class="form-control" id="reg_sal_id_unidad">
							    </div>
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Moto</label>
							      	<input  class="form-control" id="reg_sal_id_moto">
							    </div>
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Montacargas</label>
							      	<input  class="form-control" id="reg_sal_id_montacargas">
							    </div>
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Dolly</label>
							      	<input  class="form-control" id="reg_sal_id_dolly">
							    </div>
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Chasis</label>
							      	<input  class="form-control" id="reg_sal_id_chasis">
							    </div>
							    <div class="form-group col-sm-12">
							    	<label for="input" ><i class="fas fa-tachometer-alt"></i> * Kilometraje</label>
							      	<input  class="form-control" id="reg_sal_km" placeholder="KM" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese el kilometraje de la unidad</p>">
							    </div>
							    <div class="form-group col-sm-12">
							    	<label for="input" ><i class="fas fa-gas-pump"></i> * Nivel de combustible</label>
							      	<input  class="form-control" id="reg_sal_disel" placeholder="Litros" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese el Nivel de combustible de la unidad</p>">
							    </div>
							    <div class="form-group col-sm-12">
							    	<label for="input" ><i class="fas fa-sticky-note"></i> * Folio de tapón de combustible</label>
							      	<input  class="form-control" id="reg_sal_folio" placeholder="123" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese el folio de la etiqueta del tapón de combustible</p>">
							    </div>
							    <div class="form-group col-sm-12">
							    	<label for="input" ><i class="far fa-comment-dots"></i> Comentario</label>
							      	<TEXTAREA class="form-control" id="reg_sal_comentario" placeholder="Comentario"></TEXTAREA>
							    </div>
							    <div class="form-group col-sm-8">
							      	<label for="input" ><i>Los campos marcados con (*) son obligatorios.</i></label>
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
	    form : '#mod_data_r_salida',
	    errorMessageClass: "error",
	    onSuccess: function(){
	    	mod_data_r_salida(); 
	  		$successMsg.show();
	      	return false; 
	    }
	});
</script>
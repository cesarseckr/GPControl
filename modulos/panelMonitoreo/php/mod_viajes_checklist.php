<div class="modal fade" id="mod_viajes_checklist" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="add"><i class="fas fa-clipboard-check"></i>&nbsp;Revisión del Checklist</h5>
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
							    	<label for="input" >ID Viaje</label>
							      	<input  class="form-control" id="checklist_id_viaje">
							    </div>	
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Unidad</label>
							      	<input  class="form-control" id="checklist_id_unidad">
							    </div>
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Moto</label>
							      	<input  class="form-control" id="checklist_id_moto">
							    </div>
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Montacargas</label>
							      	<input  class="form-control" id="checklist_id_montacargas">
							    </div>
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Dolly</label>
							      	<input  class="form-control" id="checklist_id_dolly">
							    </div>
							    <div class="form-group col-sm-4" style="display:none;">
							    	<label for="input" >ID Chasis</label>
							      	<input  class="form-control" id="checklist_id_chasis">
							    </div>					   
							    <!--<div class="form-group col-sm-12">
							    	<label for="input" >Tipo</label>
							      	<select class="form-control" id="tipo_man">
							      		<option value="1">PREVENTIVA</option>
							      		<option value="2">CORRECTIVA</option>
							      	</select>
							    </div>-->
							    <div class="col-sm-3">
						      		<p class="text-success">
						      			<i class="fa fa-check-circle"></i> BUENO
						      			<br>
						      			<small>
						      				<i>En excelente estado</i>
						      			</small>
						      		</p>
						  		</div>
							    <div class="col-sm-5">
	  								<p class="text-warning">
	  									<i class="fa fa-exclamation-circle"></i> REGULAR
	  									<br>
	  									<small>
	  										<i>Requiere mantenimiento próximo o servicio preventivo</i>
	  									</small>
	  								</p>
	  							</div>
	  							<div class="col-sm-4">
						      		<p class="text-danger">
						      			<i class="fa fa-exclamation-triangle"></i> MALO
						      			<br>
						      			<small>
						      				<i>Requiere mantenimiento urgente o servicio correctivo</i>
						      			</small>
						      		</p>
						      	</div>





						    	<div id="servicios" class="input-group"></div>




							    <div class="form-group col-sm-12">
							    	<label for="input" >
							    		Diagnóstico y observaciones de taller mecánico
							    	</label>
							    	<textarea class="form-control" id="diagnostico"></textarea>
							    </div>
							    <div class="form-group col-sm-8">
							    	<label for="input" >
							    		<i>Los campos marcados con (*) son obligatorios.</i>
							    	</label>
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
	    form : '#mod_viajes_checklist',
	    errorMessageClass: "error",
	    onSuccess: function(){
	    	add_checklist(); 
	  		$successMsg.show();
	      	return false; 
	    }
	});
</script>
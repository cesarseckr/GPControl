<div class="modal fade" id="mod_viaje" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="add"><i class="fas fa-road"></i>&nbsp; Modificar datos viaje</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			     	<span aria-hidden="true">&times;</span>
			    </button>
			</div>
			<form>
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col-md-12">
					    	<div class="row">
							    <div class="form-group col-sm-12" style="display:none;">
							    	<label for="input" >* ID Viaje</label>
							      	<input  class="form-control" id="mod_id_viaje" placeholder="ID Viaje">
							    </div>
							    <div class="form-group col-sm-6">
							    	<label for="input" >* Ingresar dirección de destino</label>
							      	<input  class="form-control" id="mod_destino_viaje" placeholder="Dirección" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese la dirección de destino</p>">
							    </div>
							    <div class="form-group col-sm-6">
							    	<label for="input" >* Fecha y hora</label>
							      	<input  type="date" class="form-control" id="mod_fecha_viaje" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese la fecha y hora del viaje</p>">
							    </div>

							    <!-- INDICACIONES COLOR-->
								    <div class="col-sm-4">
							      		<p class="text-success">
							      			<i class="fa fa-check-circle"></i> 
							      			En patio disponible
							      			</small>
							      		</p>
							  		</div>
								    <div class="col-sm-4">
		  								<p class="text-secondary">
		  									<i class="fa fa-clock"></i> En patio en espera
		  								</p>
		  							</div>
		  							<div class="col-sm-4">
							      		<p class="text-info">
							      			<i class="fas fa-road"></i> En viaje
							      		</p>
							      	</div>
							      	<div class="col-sm-2">
							      	</div>
							      	<div class="col-sm-4">
							      		<p class="text-warning">
							      			<i class="fas fa-search"></i> En revisión
							      		</p>
							      	</div>
							      	<div class="col-sm-4">
							      		<p class="text-danger">
							      			<i class="fas fa-wrench"></i> En mantenimiento
							      		</p>
							      	</div>
							      	<div class="col-sm-2">
							      	</div>
						      	<!-- INDICACIONES COLOR-->							    
							    <div class="form-group col-sm-6">
							      	<label for="input"><i class="menu-icon fa fa-user-circle"></i>&nbsp; Seleccionar operario</label>
							      	<SELECT name="mod_operario_viaje" id="mod_operario_viaje" class="selectpicker form-control col-10" data-live-search="true" data-live-search-normalize="true" title="Seleccione operario" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Seleccione un operario</p>"></SELECT>
							    </div>
							    <div class="form-group col-sm-6">
							      	<label for="input" ><i class="menu-icon fa fa-truck"></i>&nbsp;Seleccionar unidad</label>
							      	<SELECT name="mod_unidad_viaje" id="mod_unidad_viaje" class="selectpicker form-control col-10" data-live-search="true" data-live-search-normalize="true" title="Seleccione unidad"></SELECT>
							    </div>
							    <div class="form-group col-sm-6">
							      	<label for="input" ><i class="menu-icon fa fa-motorcycle"></i>&nbsp;Seleccionar moto</label>
							      	<SELECT name="mod_moto_viaje" id="mod_moto_viaje" class="selectpicker form-control col-10" data-live-search="true" data-live-search-normalize="true" title="Seleccione moto"></SELECT>
							    </div>
							    <div class="form-group col-sm-6">
							      	<label for="input" ><i class="menu-icon fa fa-snowplow"></i>&nbsp; Seleccionar montacargas</label>
							      	<SELECT name="mod_montacargas_viaje" id="mod_montacargas_viaje" class="selectpicker form-control col-10" data-live-search="true" data-live-search-normalize="true" title="Seleccione montacargas"></SELECT>
							    </div>
							    <div class="form-group col-sm-6">
							      	<label for="input" ><i class="menu-icon fa fa-truck-loading"></i>&nbsp; Seleccionar dolly</label>
							      	<SELECT name="mod_dolly_viaje" id="mod_dolly_viaje" class="selectpicker form-control col-10" data-live-search="true" data-live-search-normalize="true" title="Seleccione dolly"></SELECT>
							    </div>
							    <div class="form-group col-sm-6">
							      	<label for="input" ><i class="menu-icon fa fa-truck-moving"></i>&nbsp; Seleccionar chasis</label>
							      	<SELECT id="mod_chasis_viaje" class="selectpicker form-control col-10" data-live-search="true" data-live-search-normalize="true" title="Seleccione chasis"></SELECT>
							    </div>
							    <div class="form-group col-sm-12">
							    	<label for="input" >Comentario</label>
							      	<TEXTAREA class="form-control" id="mod_comentario_viaje" placeholder="Comentario"></TEXTAREA>
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
	    form : '#mod_viaje',
	    errorMessageClass: "error",
	    onSuccess: function(){
	    	mod_viaje(); 
	  		$successMsg.show();
	      	return false; 
	    }
	});
</script>
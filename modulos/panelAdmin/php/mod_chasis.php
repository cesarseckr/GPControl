<div class="modal fade" id="mod_chasis" tabindex="-1" role="dialog" aria-labelledby="mod" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		    <h5 class="modal-title" id="mod"><i class="fa fa-edit"></i>&nbsp;Modificar Chasis</h5>
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		    </button>
		  </div>
			<form>
			  	<div class="modal-body">
				  	<div class="form-row">
					    <div class="form-group col-md-12">
					    	<input id="mod_chasis_id_chasis" style="display:none;">
					    	<div class="row">
						    	<div class="form-group col-sm-12">
							      <label for="input" >* No. económico</label>
							      <input  class="form-control" id="mod_chasis_economico" placeholder="No. económico" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un no. económico</p>">
							    </div>
								<div class="form-group col-sm-12">
							      <label for="input" >* Nombre de chasis</label>
							      <input  class="form-control" id="mod_chasis_nombre" placeholder="Nombre" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un nombre</p>">
							    </div>
							    <div class="form-group col-sm-6">
							      <label for="input" >* Placas</label>
							      <input class="form-control" id="mod_chasis_placas" placeholder="Placas" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese placas de chasis</p>">
							    </div>
							    <div class="form-group col-sm-6">
							      <label for="input" >* Serie</label>
							      <input class="form-control" id="mod_chasis_serie" placeholder="Serie" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un serie</p>">
							    </div>
							    <div class="form-group col-sm-6">
							      <label for="input" >* Marca</label>
							      <input class="form-control" id="mod_chasis_marca" placeholder="Ejemplo: MAGU" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese una marca de chasis</p>">
							    </div>
							    <div class="form-group col-sm-6">
							      <label for="input" >* Modelo</label>
							      <input class="form-control" type="number" id="mod_chasis_modelo" placeholder="Ejemplo: 2010" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un modelo de chasis</p>">
							    </div>
							    <div class="form-group col-sm-12">
							      <label for="input" >* Disponibilidad</label>
							      <select class="form-control" id="mod_chasis_disponibilidad" placeholder="Estatus" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Seleccione la disponibilidad de este equipo</p>">
							      	<option value="1">En patio disponible</option>
							      	<option value="2">En patio en espera de viaje</option>
							      	<option value="3">En viaje</option>
							      	<option value="4">En revisión</option>
							      	<option value="5">En Mantenimiento</option>
							      </select>
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
				    	<i class="fa fa-play-circle"></i>Modificar
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
		form : '#mod_chasis',
	  	errorMessageClass: "error",
	  	onSuccess: function(){
	  		mod_chasis();
			$successMsg.show();
	  		return false; 
	    }
	});
</script>
<div class="modal fade" id="mod_dolly" tabindex="-1" role="dialog" aria-labelledby="mod" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mod">
					<i class="fa fa-edit"></i>&nbsp; Modificar Dolly
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form>
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col-md-12">
							<input id="mod_dolly_id_dolly" style="display:none;">
							<div class="row">
								<div class="form-group col-sm-6">
									<label for="input" >* No. económico</label>
									<input  class="form-control" id="mod_dolly_economico" placeholder="No. económico" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un no. económico</p>">
								</div>
								<div class="form-group col-sm-6">
									<label for="input" >* Serie</label>
									<input class="form-control" id="mod_dolly_serie" placeholder="Serie" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un serie</p>">
								</div>
								<div class="form-group col-sm-6">
									<label for="input" >* Marca</label>
									<input class="form-control" id="mod_dolly_marca" placeholder="Ejemplo: MAGU" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese una marca de dolly</p>">
								</div>
								<div class="form-group col-sm-6">
									<label for="input" >* Modelo</label>
									<input class="form-control" type="number" id="mod_dolly_modelo" placeholder="Ejemplo: 2010" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un modelo de dolly</p>">
								</div>
								<div class="form-group col-sm-6">
									<label for="input" >* Suspensión</label>
									<select class="form-control" id="mod_dolly_suspension">
										<option value="AIRE">AIRE</option>
										<option value="MUELLES">MUELLES</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label for="input" >* Disponibilidad</label>
									<select class="form-control" id="mod_dolly_disponibilidad" placeholder="Estatus" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Seleccione la disponibilidad de este equipo</p>">
										<option value="1">En patio disponible</option>
								      	<option value="2">En patio en espera de viaje</option>
								      	<option value="3">En viaje</option>
								      	<option value="4">En revisión</option>
								      	<option value="5">En Mantenimiento</option>
									</select>
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
		form : '#mod_dolly',
		errorMessageClass: "error",
		onSuccess: function(){
			mod_dolly(); 
			$successMsg.show();
			return false; 
		}
	});
</script>
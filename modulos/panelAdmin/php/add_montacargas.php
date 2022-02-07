<div class="modal fade" id="add_montacargas" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="add">
					<i class="fa fa-plus"></i>&nbsp; Añadir Montacargas
				</h5>
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
									<label for="input" >* Nombre de montacargas</label>
									<input  class="form-control" id="add_montacargas_nombre" placeholder="Nombre" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un nombre</p>">
								</div>
								<div class="form-group col-sm-6">
									<label for="input" >* Tipo de combustible</label>
									<select class="form-control" id="add_montacargas_combustible">
										<option value="GASOLINA">GASOLINA</option>
										<option value="GAS">GAS</option>
										<option value="DIESEL">DIESEL</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label for="input" >* Serie</label>
									<input class="form-control" id="add_montacargas_serie" placeholder="Serie" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un serie</p>">
								</div>
								<div class="form-group col-sm-6">
									<label for="input" >* Marca</label>
									<input class="form-control" id="add_montacargas_marca" placeholder="Marca" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese una marca de montacargas</p>">
								</div>
								<div class="form-group col-sm-6">
									<label for="input" >* Modelo</label>
									<input class="form-control" type="number" id="add_montacargas_modelo" placeholder="Modelo" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un modelo de montacargas</p>">
								</div>
								<div class="form-group col-sm-12">
							     	<label for="input" >* Disponibilidad</label>
							     	<select class="form-control" id="add_montacargas_disponibilidad" placeholder="Estatus" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Seleccione la disponibilidad de este equipo</p>">
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
		form : '#add_montacargas',
		errorMessageClass: "error",
		onSuccess: function(){
			add_montacargas(); 
			$successMsg.show();
			return false; 
		}
	});
</script>
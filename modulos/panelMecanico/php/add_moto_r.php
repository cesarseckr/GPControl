			<div class="modal fade" id="add_moto_r" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="add"><i class="fa fa-plus"></i>&nbsp; Nueva Revisión</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
					  <div class="form-row">
					    <div class="form-group col-md-12">
					    	<form>
					    		<input id="variable" value="2" style="display:none;">
					    	<div class="row">
						    <div class="form-group col-sm-6">
						      <label for="input">Motocicleta a revisar</label>
						      <select class="selectpicker form-control" id="vehiculos" 
						      data-live-search="true"></select>
						    </div>
						      <div class="form-group col-sm-3">
						      <label for="input" >Fecha y Hora</label>
						      <input class="form-control" value="<? echo date('d/m/Y h:iA');?>" disabled>
						    </div>
						    <div class="form-group col-sm-3">
						      <label for="input" >Tipo</label>
						      <select class="form-control" id="tipo_man">
						      	<option value="1">PREVENTIVA</option>
						      	<option value="2">CORRECTIVA</option>
						      </select>
						    </div>
						    <div class="form-group col-sm-6">
						      <label for="input" >Kilometraje</label>
						      <input type="number" class="form-control" placeholder="Kilometraje actual de la unidad" id="km">
						    </div>
						    <div class="form-group col-sm-6">
						    </div>
						    
      <div class="col-sm-3">
      <p class="text-success"><i class="fa fa-check-circle"></i> BUENO<br>
      <small><i>En excelente estado</i></small></p></div>
      <div class="col-sm-5">
      <p class="text-warning"><i class="fa fa-exclamation-circle"></i> REGULAR<br>
      <small><i>Requiere mantenimiento próximo o servicio preventivo</i></small></p></div>
      <div class="col-sm-4">
      <p class="text-danger"><i class="fa fa-exclamation-triangle"></i> MALO<br>
      <small><i>Requiere mantenimiento urgente o servicio correctivo</i></small></p></div>
						    <div id="servicios" class="input-group"></div>

						    <div class="form-group col-sm-8">
						    	<div class="form-row">
						    	<div class="form-group col-sm-12"><b>Observaciones de llantas</b>
						    	</div>
						    	<div class="form-group col-sm-6">
						    	<input type="text" class="form-control" placeholder="1" id="ll1">
						  		</div>
						  		<div class="form-group col-sm-6">
						    	<input type="text" class="form-control" placeholder="2" id="ll2">
						  		</div>
						  		<div class="form-group col-sm-6" style="display:none;">
						    	<input type="text" class="form-control" placeholder="3" id="ll3">
						  		</div>
						  		<div class="form-group col-sm-6" style="display:none;">
						    	<input type="text" class="form-control" placeholder="4" id="ll4">
						  		</div>
						  		<div class="form-group col-sm-6" style="display:none;">
						    	<input type="text" class="form-control" placeholder="5" id="ll5">
						  		</div>
						  		<div class="form-group col-sm-6" style="display:none;">
						    	<input type="text" class="form-control" placeholder="6" id="ll6">
						  		</div>
						  		<div class="form-group col-sm-6" style="display:none;">
						    	<input type="text" class="form-control" placeholder="7" id="ll7">
						  		</div>
						  		<div class="form-group col-sm-6" style="display:none;">
						    	<input type="text" class="form-control" placeholder="8" id="ll8">
						  		</div>
						  		<div class="form-group col-sm-6" style="display:none;">
						    	<input type="text" class="form-control" placeholder="9" id="ll9">
						  		</div>
						  		<div class="form-group col-sm-6" style="display:none;">
						    	<input type="text" class="form-control" placeholder="10" id="ll10">
						  		</div>
						  	</div>
						  </div>


						  
						    <div class="form-group col-sm-4"><br>
						    	<img class="img-fluid" src="../../images/llantas/moto.png">
						    </div>

						    <div class="form-group col-sm-12">
						      <label for="input" >Causas y observaciones</label>
						      <textarea class="form-control" id="observaciones"></textarea>
						    </div>
						    <div class="form-group col-sm-12">
						      <label for="input" >Diagnóstico y observaciones de taller mecánico</label>
						      <textarea class="form-control" id="diagnostico"></textarea>
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
			      	<i class="fa fa-play-circle"></i>Registrar</button>
			      	<button type="reset" class="btn btn-secondary btn-sm">
			        <i class="fa fa-eraser"></i></button>
			        <button class="btn btn-danger btn-sm" data-dismiss="modal">
			        <i class="fa fa-times"></i>Cerrar</button>

				             </form>
			      </div>
			    </div>
			  </div>
			</div>
<script>
         $successMsg = $(".alert");
                $.validate({
                  form : '#add_moto_r',
              errorMessageClass: "error",
              onSuccess: function(){
              add_r(); 
          $successMsg.show();
              return false; 
                }
              });
</script>
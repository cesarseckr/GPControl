			<div class="modal fade" id="mod_dolly" tabindex="-1" role="dialog" aria-labelledby="mod" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="mod"><i class="fa fa-edit"></i>&nbsp; Modificar Dolly</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
					  <div class="form-row">
					    <div class="form-group col-md-12">
						      
					    	<form>
					    	<input id="id_m" style="display:none;">
					    	<div class="row">
					    		<div class="form-group col-sm-6">
						      <label for="input" >* No. económico</label>
						      <input  class="form-control" id="economico_m" placeholder="No. económico" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un no. económico</p>">
						    </div>
						    <div class="form-group col-sm-6">
						      <label for="input" >* Serie</label>
						      <input class="form-control" id="serie_m" placeholder="Serie" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un serie</p>">
						    </div>
						    <div class="form-group col-sm-6">
						      <label for="input" >* Marca</label>
						      <input class="form-control" id="marca_m" placeholder="Ejemplo: MAGU" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese una marca de dolly</p>">
						    </div>
						    <div class="form-group col-sm-6">
						      <label for="input" >* Modelo</label>
						      <input class="form-control" type="number" id="modelo_m" placeholder="Ejemplo: 2010" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un modelo de dolly</p>">
						    </div>
						    <div class="form-group col-sm-6">
						      <label for="input" >* Suspensión</label>
						      <select class="form-control" id="suspension_m">
						      	<option value="AIRE">AIRE</option>
						      	<option value="MUELLES">MUELLES</option>
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
			      	<i class="fa fa-play-circle"></i>Modificar</button>
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
                  form : '#mod_dolly',
              errorMessageClass: "error",
              onSuccess: function(){
              mod_dolly(); 
          $successMsg.show();
              return false; 
                }
              });
</script>
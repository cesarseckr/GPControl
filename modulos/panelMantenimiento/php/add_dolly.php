			<div class="modal fade" id="add_dolly" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="add"><i class="fa fa-plus"></i>&nbsp; Añadir Dolly</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
					  <div class="form-row">
					    <div class="form-group col-md-12">
					    	<form>
					    	<div class="row">
					    		<div class="form-group col-sm-6">
						      <label for="input" >* No. económico</label>
						      <input  class="form-control" id="economico" placeholder="No. económico" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un no. económico</p>">
						    </div>
						    <div class="form-group col-sm-6">
						      <label for="input" >* Serie</label>
						      <input class="form-control" id="serie" placeholder="Serie" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un serie</p>">
						    </div>
						    <div class="form-group col-sm-6">
						      <label for="input" >* Marca</label>
						      <input class="form-control" id="marca" placeholder="Ejemplo: MAGU" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese una marca de dolly</p>">
						    </div>
						    <div class="form-group col-sm-6">
						      <label for="input" >* Modelo</label>
						      <input class="form-control" type="number" id="modelo" placeholder="Ejemplo: 2010" data-validation="required" data-validation-error-msg="<p style='color:#B40431;'>Ingrese un modelo de dolly</p>">
						    </div>
						    <div class="form-group col-sm-6">
						      <label for="input" >* Suspensión</label>
						      <select class="form-control" id="suspension">
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
                  form : '#add_dolly',
              errorMessageClass: "error",
              onSuccess: function(){
              add_dolly(); 
          $successMsg.show();
              return false; 
                }
              });
</script>
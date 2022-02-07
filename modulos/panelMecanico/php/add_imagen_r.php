			<div class="modal fade" id="add_imagen_r" tabindex="-1" role="dialog" aria-labelledby="add_img" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="add_img"><i class="fa fa-plus"></i>&nbsp; Agregar imágen</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
					  <div class="form-row">
					    <div class="form-group col-md-12">
						    	<form id="form-foto" action="php/foto_servicios.php" method="post" enctype="multipart/form-data">
						    	<input type="text" id="id_servicio" name="id_servicio" style="display:none;">
 				<div class="box"><center>
					<input type="file" name="foto[]" id="foto" class="inputfile inputfile-4" data-multiple-caption="{count} archivos seleccionados" multiple style="display:none;" accept="image/png, image/jpeg, image/jpg">
					<label for="foto"><figure>
					<svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve" width="20" height="17">
					<path d="M50,40c-8.285,0-15,6.718-15,15c0,8.285,6.715,15,15,15c8.283,0,15-6.715,15-15 C65,46.718,58.283,40,50,40z M90,25H78c-1.65,0-3.428-1.28-3.949-2.846l-3.102-9.309C70.426,11.28,68.65,10,67,10H33 c-1.65,0-3.428,1.28-3.949,2.846l-3.102,9.309C25.426,23.72,23.65,25,22,25H10C4.5,25,0,29.5,0,35v45c0,5.5,4.5,10,10,10h80 c5.5,0,10-4.5,10-10V35C100,29.5,95.5,25,90,25z M50,80c-13.807,0-25-11.193-25-25c0-13.806,11.193-25,25-25 c13.805,0,25,11.194,25,25C75,68.807,63.805,80,50,80z M86.5,41.993c-1.932,0-3.5-1.566-3.5-3.5c0-1.932,1.568-3.5,3.5-3.5 c1.934,0,3.5,1.568,3.5,3.5C90,40.427,88.433,41.993,86.5,41.993z"/>
				    </svg></figure> 
				    <span><h4>Selecciona las imágenes&hellip;</h4></span></label><br>
				    <p><i>Seleccione uno o varios archivos de imágen "JPG, PNG, GIF o tome una fotografía con su móvil." 
				    <b><br>Importante:</b> Las imágenes no deben de superar los 3 MegaByte de peso (3072Kb) de peso, lo recomendable es menos de 1 MegaByte de peso (1024Kb).</i></p> </center>
				</div>
     		    </form>

						</div> 
						       
					  </div> 
			      </div>
			    </div>
			  </div>
			</div>
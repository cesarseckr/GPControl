		   // <---  Función actualizar foto de perfil ---> \\
		    $(document).on("change","#foto", 
		      function(e){
   var data = new FormData("#foto_perfil"); //Creamos los datos a enviar con el formulario
    $.ajax({
        url: 'php/foto_perfil.php', //URL destino
        data: data,
        processData: false, //Evitamos que JQuery procese los datos, daría error
        contentType: false, //No especificamos ningún tipo de dato
        type: 'POST',
        success: function (resultado) {
            alert(resultado);
        }
    }); 
    });
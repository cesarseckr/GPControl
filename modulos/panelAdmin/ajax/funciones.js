$(document).on('click', 'button[type="reset"]',function(){
  $('.selectpicker').val(0);
  $('.selectpicker').selectpicker('render');
});

$(document).on('click', '#filtrar',function(){
  alerta_cargando("Buscando","Espere mientras se realiza la busqueda");
  var ffecha_ini=escape($("#fecha_ini_f").val());
  var ffecha_fin=escape($("#fecha_fin_f").val());
  var festatus=escape($("#estatus_f").val());
  var ftipo=escape($("#tipo_f").val());
  var fvehiculo=escape($("#vehiculo_f").val());
  var filtro=true;
  $("#fdesc").load("php/aplicar_filtro.php?filtro="+filtro+"&festatus="+festatus+"&ftipo="+ftipo+"&fvehiculo="+fvehiculo+"&ffecha_ini="+ffecha_ini+"&ffecha_fin="+ffecha_fin, function() {
    $( "#tabla" ).load(" #tabla", function() {
      tabla("Listado de mantenimientos");
      setTimeout('alerta_info("Correcto","Busqueda completada");', timer+500);
    });
  });
});

var timer=1000;
//INSERTAR FUNCIONES
$(document).on("change","#foto", function(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var form='#form-foto';
  var datos = new FormData($(form)[0]);
  var action= $(form).attr("action");
  var enctype= $(form).attr("enctype");
  var method= $(form).attr("method");
  $.ajax({
    url: action,
    enctype: enctype,
    type: method,
    processData: false,
    contentType: false,
    data: datos,
    success: function (data) {
      $('#foto').val(null); 
      if(data==1){
        setTimeout('alerta_correcto("Correcto","Imagenes añadidas correctamente");', timer);  
      }else{
        setTimeout('alerta_info("Error","No se han podido añadir todas las imagenes, verifique que su peso sea menor a 3 MegaBytes");', timer);  
        console.log(data);                            
      }
    },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
    }
    
  }); 
});

/*--------------FUNCIONES PARA EDITAR UNIDAD--------------------*/
  //LIMPIAR FORMULARIO ADD UNIDAD
    $(document).on('click', '#add_modal_vehiculo',function(){
      $("#add_vehiculo_nombre").val('');
      $("#add_vehiculo_placas").val('');
      $("#add_vehiculo_serie").val('');
      $("#add_vehiculo_marca").val('');
      $("#add_vehiculo_submarca").val('');
      $("#add_vehiculo_modelo").val('');
      $("#add_vehiculo_km").val('');
      $("#add_vehiculo_combustible").val('');
      $("#add_vehiculo_disponibilidad").val('1');
    })

  //AGRAGAR NUEVO UNIDAD
    function add_vehiculo(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var nombre =$("#add_vehiculo_nombre").val();
      var placas= $("#add_vehiculo_placas").val();
      var serie= $("#add_vehiculo_serie").val();
      var marca=$("#add_vehiculo_marca").val();
      var submarca=$("#add_vehiculo_submarca").val();
      var modelo=$("#add_vehiculo_modelo").val();
      var km=$("#add_vehiculo_km").val();
      var combustible=$("#add_vehiculo_combustible").val();
      var disponibilidad=$("#add_vehiculo_disponibilidad").val();
      $.ajax({
        url:"php/add_vehiculoE.php",
        method:"POST",
        data:{
          nombre:nombre, 
          placas: placas,
          serie: serie,
          marca: marca,
          submarca: submarca,
          modelo: modelo,
          km:km,
          combustible:combustible,
          disponibilidad:disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Vehículo registrado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de vehículos");
            });
            $('#add_vehiculo').modal('toggle');
          }else if(data=="DUP"){ 
            setTimeout('alerta_error("Error","Este vehículo ya se encuentra registrado");', timer);  
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }

  //MODIFICAR UNIDAD
    $(document).on('click', '#modificar_vehiculo',function(){
      document.getElementById("mod_vehiculo_id_vehiculo").value = $(this).attr('id_unidad');
      document.getElementById("mod_vehiculo_nombre").value = $(this).attr('nombre');
      document.getElementById("mod_vehiculo_placas").value = $(this).attr('placas');
      document.getElementById("mod_vehiculo_marca").value = $(this).attr('marca');
      document.getElementById("mod_vehiculo_submarca").value = $(this).attr('submarca');
      document.getElementById("mod_vehiculo_serie").value = $(this).attr('serie');
      document.getElementById("mod_vehiculo_modelo").value = $(this).attr('modelo');
      document.getElementById("mod_vehiculo_km").value = $(this).attr('km');
      document.getElementById("mod_vehiculo_combustible").value = $(this).attr('combustible');
      document.getElementById("mod_vehiculo_disponibilidad").value = $(this).attr('disponibilidad');        
    });

    function mod_vehiculo(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var id_m =$("#mod_vehiculo_id_vehiculo").val();
      var nombre =$("#mod_vehiculo_nombre").val();
      var placas= $("#mod_vehiculo_placas").val();
      var serie= $("#mod_vehiculo_serie").val();
      var marca=$("#mod_vehiculo_marca").val();
      var submarca=$("#mod_vehiculo_submarca").val();
      var modelo=$("#mod_vehiculo_modelo").val();
      var km=$("#mod_vehiculo_km").val();
      var combustible=$("#mod_vehiculo_combustible").val();
      var disponibilidad=$("#mod_vehiculo_disponibilidad").val();
      $.ajax({
        url:"php/mod_vehiculoE.php",
        method:"POST",
        data:{id_m: id_m,
          nombre:nombre, 
          placas: placas,
          serie: serie,
          marca: marca,
          submarca: submarca,
          modelo: modelo,
          km:km,
          combustible:combustible,
          disponibilidad:disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Vehículo registrado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de vehículos");
            });
            $('#mod_vehiculo').modal('toggle');
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }
/*--------------FIN FUNCIONES PARA EDITAR UNIDAD--------------------*/

/*--------------FUNCIONES PARA EDITAR MOTO--------------------*/
  //LIMPIAR FORMULARIO ADD MOTO
    $(document).on('click', '#add_modal_moto',function(){
      $("#add_moto_nombre").val('');
      $("#add_moto_placas").val('');
      $("#add_moto_serie").val('');
      $("#add_moto_marca").val('');
      $("#add_moto_modelo").val('');
      $("#add_moto_disponibilidad").val('1');
    })

  //AGRAGAR NUEVO MOTO
    function add_moto(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var nombre =$("#add_moto_nombre").val();
      var placas= $("#add_moto_placas").val();
      var serie= $("#add_moto_serie").val();
      var marca=$("#add_moto_marca").val();
      var modelo=$("#add_moto_modelo").val();
      var disponibilidad=$("#add_moto_disponibilidad").val();
      
      $.ajax({
        url:"php/add_motoE.php",
        method:"POST",
        data:{
          nombre:nombre, 
          placas: placas,
          serie: serie,
          marca: marca,
          modelo: modelo,
          disponibilidad:disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Motocicleta registrada correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de Motocicletas");
            });
            $('#add_moto').modal('toggle');
          }else if(data=="DUP"){ 
            setTimeout('alerta_error("Error","Esta motocicleta ya se encuentra registrado");', timer);  
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }

  //MODIFICAR MOTO
    $(document).on('click', '#modificar_moto',function(){
      document.getElementById("mod_moto_id_moto").value = $(this).attr('id_moto');
      document.getElementById("mod_moto_nombre").value = $(this).attr('nombre');
      document.getElementById("mod_moto_placas").value = $(this).attr('placas');
      document.getElementById("mod_moto_serie").value = $(this).attr('serie');
      document.getElementById("mod_moto_marca").value = $(this).attr('marca');
      document.getElementById("mod_moto_modelo").value = $(this).attr('modelo');
      document.getElementById("mod_moto_disponibilidad").value = $(this).attr('disponibilidad');    
    });

    function mod_moto(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var id_m =$("#mod_moto_id_moto").val();
      var nombre =$("#mod_moto_nombre").val();
      var placas= $("#mod_moto_placas").val();
      var serie= $("#mod_moto_serie").val();
      var marca=$("#mod_moto_marca").val();
      var modelo=$("#mod_moto_modelo").val();
      var disponibilidad=$("#mod_moto_disponibilidad").val();
      
      $.ajax({
        url:"php/mod_motoE.php",
        method:"POST",
        data:{id_m: id_m,
          nombre:nombre, 
          placas: placas,
          serie: serie,
          marca: marca,
          modelo: modelo,
          disponibilidad:disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Motocicleta registrada correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de Motocicletas");
            });
            $('#mod_moto').modal('toggle');
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }
/*--------------FIN FUNCIONES PARA EDITAR MOTO--------------------*/

/*--------------FUNCIONES PARA EDITAR DOLLY--------------------*/
  //LIMPIAR FORMULARIO ADD DOLLY
    $(document).on('click', '#add_modal_dolly',function(){
      $("#add_dolly_economico").val('');
      $("#add_dolly_serie").val('');
      $("#add_dolly_marca").val('');
      $("#add_dolly_modelo").val('');
      $("#add_dolly_suspension").val('');
      $("#add_dolly_disponibilidad").val('1');
    })

  //AGRAGAR NUEVO DOLLY
    function add_dolly(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var economico =$("#add_dolly_economico").val();
      var serie= $("#add_dolly_serie").val();
      var marca= $("#add_dolly_marca").val();
      var modelo=$("#add_dolly_modelo").val();
      var suspension=$("#add_dolly_suspension").val();
      var disponibilidad=$("#add_dolly_disponibilidad").val();
      $.ajax({
        url:"php/add_dollyE.php",
        method:"POST",
        data:{economico:economico,
          serie:serie, 
          marca: marca,
          modelo: modelo,
          suspension: suspension,
          disponibilidad:disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Dolly registrado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de dollys");
            });
            $('#add_dolly').modal('toggle');
          }else if(data=="DUP"){ 
            setTimeout('alerta_error("Error","Este dolly ya se encuentra registrado");', timer);  
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }

  //MODIFICAR DOLLY
    $(document).on('click', '#modificar_dolly',function(){
      document.getElementById("mod_dolly_id_dolly").value = $(this).attr('id_dolly');
      document.getElementById("mod_dolly_economico").value = $(this).attr('economico');
      document.getElementById("mod_dolly_serie").value = $(this).attr('serie');
      document.getElementById("mod_dolly_marca").value = $(this).attr('marca');
      document.getElementById("mod_dolly_modelo").value = $(this).attr('modelo');
      document.getElementById("mod_dolly_suspension").value = $(this).attr('suspension');
      document.getElementById("mod_dolly_disponibilidad").value = $(this).attr('disponibilidad');        
    });

    function mod_dolly(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var id_m =$("#mod_dolly_id_dolly").val();
      var economico =$("#mod_dolly_economico").val();
      var serie= $("#mod_dolly_serie").val();
      var marca= $("#mod_dolly_marca").val();
      var modelo=$("#mod_dolly_modelo").val();
      var suspension=$("#mod_dolly_suspension").val();
      var disponibilidad=$("#mod_dolly_disponibilidad").val();
      $.ajax({
        url:"php/mod_dollyE.php",
        method:"POST",
        data:{id_m: id_m,
          economico:economico, 
          serie: serie,
          marca: marca,
          modelo: modelo,
          suspension: suspension,
          disponibilidad:disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Dolly registrado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de dollys");
            });
            $('#mod_dolly').modal('toggle');
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }
/*--------------FIN FUNCIONES PARA EDITAR DOLLY--------------------*/

/*--------------FUNCIONES PARA EDITAR MONTACARGAS--------------------*/
  //LIMPIAR FORMULARIO ADD MONTACARGAS
    $(document).on('click', '#add_modal_montacargas',function(){
      $("#add_montacargas_nombre").val('');
      $("#add_montacargas_combustible").val('');
      $("#add_montacargas_serie").val('');
      $("#add_montacargas_marca").val('');
      $("#add_montacargas_modelo").val('');
      $("#add_montacargas_disponibilidad").val('1');
    })

  //AGRAGAR NUEVO MONTACARGAS
    function add_montacargas(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var nombre=$("#add_montacargas_nombre").val();
      var combustible= $("#add_montacargas_combustible").val();
      var serie= $("#add_montacargas_serie").val();
      var marca=$("#add_montacargas_marca").val();
      var modelo=$("#add_montacargas_modelo").val();
      var disponibilidad=$("#add_montacargas_disponibilidad").val();
      $.ajax({
        url:"php/add_montacargasE.php",
        method:"POST",
        data:{nombre:nombre,
          combustible:combustible, 
          serie: serie,
          marca: marca,
          modelo: modelo,
          disponibilidad:disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Montacargas registrado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de montacargas");
            });
            $('#add_montacargas').modal('toggle');
          }else if(data=="DUP"){ 
            setTimeout('alerta_error("Error","Este montacargas ya se encuentra registrado");', timer);  
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }

  //MODIFICAR MONTACARGAS
    $(document).on('click', '#modificar_montacargas',function(){
      document.getElementById("mod_montacargas_id_montacargas").value = $(this).attr('id_montacargas');              
      document.getElementById("mod_montacargas_nombre").value = $(this).attr('nombre');
      document.getElementById("mod_montacargas_combustible").value = $(this).attr('combustible');
      document.getElementById("mod_montacargas_serie").value = $(this).attr('serie');
      document.getElementById("mod_montacargas_marca").value = $(this).attr('marca');
      document.getElementById("mod_montacargas_modelo").value = $(this).attr('modelo');
      document.getElementById("mod_montacargas_disponibilidad").value = $(this).attr('disponibilidad');
    });

    function mod_montacargas(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var id_montacargas=$("#mod_montacargas_id_montacargas").val();
      var nombre=$("#mod_montacargas_nombre").val();
      var combustible= $("#mod_montacargas_combustible").val();
      var serie= $("#mod_montacargas_serie").val();
      var marca=$("#mod_montacargas_marca").val();
      var modelo=$("#mod_montacargas_modelo").val();
      var disponibilidad=$("#mod_montacargas_disponibilidad").val();
      $.ajax({
        url:"php/mod_montacargasE.php",
        method:"POST",
        data:{id_m: id_montacargas,
          nombre:nombre, 
          combustible: combustible,
          serie: serie,
          marca: marca,
          modelo: modelo,
          disponibilidad:disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Montacargas registrado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de montacargas");
            });
            $('#mod_montacargas').modal('toggle');
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }
/*--------------FIN FUNCIONES PARA EDITAR MONTACARGAS--------------------*/

/*--------------FUNCIONES PARA EDITAR CHASIS--------------------*/
  //LIMPIAR FORMULARIO ADD CHASIS
    $(document).on('click', '#add_modal_chasis',function(){
      $("#add_chasis_nombre").val('');
      $("#add_chasis_placas").val('');
      $("#add_chasis_economico").val('');
      $("#add_chasis_serie").val('');
      $("#add_chasis_marca").val('');
      $("#add_chasis_modelo").val('');
      $("#add_chasis_disponibilidad").val('1');
    })

  //AGRAGAR NUEVO CHASIS
    function add_chasis(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var nombre =$("#add_chasis_nombre").val();
      var placas= $("#add_chasis_placas").val();
      var economico= $("#add_chasis_economico").val();
      var serie=$("#add_chasis_serie").val();
      var marca=$("#add_chasis_marca").val();
      var modelo=$("#add_chasis_modelo").val();
      var disponibilidad=$("#add_chasis_disponibilidad").val();
      $.ajax({
        url:"php/add_chasisE.php",
        method:"POST",
        data:{nombre:nombre, 
              economico:economico,
              placas: placas,
              serie: serie,
              marca: marca,
              modelo: modelo,
              disponibilidad:disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Chasis registrado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de chasis");
            });
            $('#add_chasis').modal('toggle');
          }else if(data=="DUP"){ 
            setTimeout('alerta_error("Error","Esta motocicleta ya se encuentra registrada");', timer);  
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer); 
          }
        } 
      })
    }

  //MODIFICAR CHASIS
    $(document).on('click', '#modificar_chasis',function(){
      document.getElementById("mod_chasis_id_chasis").value = $(this).attr('id_chasis');
      document.getElementById("mod_chasis_economico").value = $(this).attr('economico');
      document.getElementById("mod_chasis_nombre").value = $(this).attr('nombre');
      document.getElementById("mod_chasis_placas").value = $(this).attr('placas');
      document.getElementById("mod_chasis_serie").value = $(this).attr('serie');
      document.getElementById("mod_chasis_marca").value = $(this).attr('marca');
      document.getElementById("mod_chasis_modelo").value = $(this).attr('modelo');
      document.getElementById("mod_chasis_disponibilidad").value = $(this).attr('disponibilidad');        
    });

    function mod_chasis(){
      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      var id_m =$("#mod_chasis_id_chasis").val();
      var economico =$("#mod_chasis_economico").val();
      var nombre =$("#mod_chasis_nombre").val();
      var placas= $("#mod_chasis_placas").val();
      var serie=$("#mod_chasis_serie").val();
      var marca=$("#mod_chasis_marca").val();
      var modelo=$("#mod_chasis_modelo").val();
      var disponibilidad=$("#mod_chasis_disponibilidad").val();
      $.ajax({
        url:"php/mod_chasisE.php",
        method:"POST",
        data:{id_m: id_m,
          economico:economico, 
          nombre:nombre, 
          placas: placas,
          serie: serie,
          marca: marca,
          modelo: modelo,
          disponibilidad: disponibilidad},
        success: function(data){
          if(data=="OK"){
            setTimeout('alerta_correcto("Correcto","Chasis modificado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de chasis");
            });
            $('#mod_chasis').modal('toggle');
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }
/*--------------FIN FUNCIONES PARA EDITAR CHASIS--------------------*/

/*--------------FUNCIONES PARA EDITAR USUARIOS--------------------*/
  //LIMPIAR FORMULARIO ADD USUARIOS
    $(document).on('click', '#add_modal_usuario',function(){
      $("#frm_usuario").val('');
      $("#frm_pass1").val('');
      $("#frm_pass2").val('');
      $("#frm_area").val('');
      $("#frm_estatus").val('');
    })

  //AGRAGAR NUEVO USUARIOS
    function add_usuario(){
      var usuario =$("#frm_usuario").val();
      var pass1= $("#frm_pass1").val();
      var pass2=$("#frm_pass2").val();
      var area=$("#frm_area").val();
      var estatus=$("#frm_estatus").val();
      if (pass1==pass2) {
        alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
        $.ajax({
          url:"php/add_usuariosE.php",
          method:"POST",
          data:{usuario:usuario, 
            pass1: pass1,
            pass2: pass2,
            area: area,
            estatus: estatus},
          success: function(data){
            if(data=="OK"){
              setTimeout('alerta_correcto("Correcto","Usuario registrado correctamente");', timer);  
              $( "#menu-sidebar" ).load(" #menu-sidebar");
              $( "#menu-navbar" ).load(" #menu-navbar");
              $( "#tabla" ).load(" #tabla", function() {
                tabla("Listado de usuarios");
              });
              $('#add_usuario').modal('toggle');
            }else if(data=="DUP"){ 
              setTimeout('alerta_error("Error","Esta usuario ya se encuentra registrado");', timer);  
            }else{
              setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
            }
          } 
        })
      }else{
        alert("Las contraseñas no coiciden");
      }
    }

  //MODIFICAR USUARIOS
    $(document).on('click', '#modificar_usuarios',function(){
      document.getElementById("mod_id_usuario").value = $(this).attr('id_usuario');
      document.getElementById("mod_nombre_usuario").value = $(this).attr('usuario');
      document.getElementById("mod_pass1").value = $(this).attr('pass');
      document.getElementById("mod_pass2").value = $(this).attr('pass');
      document.getElementById("mod_area").value = $(this).attr('id_tipo');
      document.getElementById("mod_estatus").value = $(this).attr('estatus');
    }); 

    function mod_usuario(){
      var id_usuario =$("#mod_id_usuario").val();
      var usuario =$("#mod_nombre_usuario").val();
      var pass1= $("#mod_pass1").val();
      var pass2=$("#mod_pass2").val();
      var area=$("#mod_area").val();
      var estatus=$("#mod_estatus").val();
      if (pass1==pass2) {
        alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
        $.ajax({
          url:"php/mod_usuariosE.php",
          method:"POST",
          data:{id_usuario:id_usuario,
            usuario:usuario, 
            pass1: pass1,
            pass2: pass2,
            area: area,
            estatus: estatus},
          success: function(data){
            if(data==1){
              setTimeout('alerta_correcto("Correcto","Usuario modificado correctamente");', timer);  
              $( "#menu-sidebar" ).load(" #menu-sidebar");
              $( "#menu-navbar" ).load(" #menu-navbar");
              $( "#tabla" ).load(" #tabla", function() {
                tabla("Listado de usuarios");
              });
              $('#mod_usuario').modal('toggle');
            }else if(data==2){ 
              setTimeout('alerta_error("Error","Esta usuario ya se encuentra registrado");', timer);  
            }else{
              setTimeout('alerta_error("Error","A ocurrido un error al tratar de hacer la modificación");', timer);  
            }
          } 
        })
      }else{
        alert("Las contraseñas no coiciden");
      }
    }
/*--------------FIN FUNCIONES PARA EDITAR USUARIOS--------------------*/

/*--------------FUNCIONES PARA EDITAR OPERARIOS--------------------*/
  //LIMPIAR FORMULARIO ADD OPERARIOS
    $(document).on('click', '#add_modal_operarios',function(){
      $("#add_oper_apaterno").val('');
      $("#add_oper_amaterno").val('');
      $("#add_oper_nombre").val('');
      $("#add_oper_fExp").val('');
      $("#add_oper_tel").val('');
      $("#add_oper_dir").val('');
      $("#add_oper_email").val('');
      $("#add_oper_disponibilidad").val('');
      $("#add_oper_estatus").val('');
    })

  //AGRAGAR NUEVO OPERARIOS
    function add_operarios(){
      var apaterno =$("#add_oper_apaterno").val();
      var amaterno= $("#add_oper_amaterno").val();
      var nombre=$("#add_oper_nombre").val();
      var fecha_exp=$("#add_oper_fExp").val();
      var telefono=$("#add_oper_tel").val();
      var direccion=$("#add_oper_dir").val();
      var email=$("#add_oper_email").val();
      var disponibilidad=$("#add_oper_disponibilidad").val();
      var estatus=$("#add_oper_estatus").val();

      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      $.ajax({
        url:"php/add_operariosE.php",
        method:"POST",
        data:{apaterno:apaterno, 
          amaterno: amaterno,
          nombre: nombre,
          fecha_exp: fecha_exp,
          telefono: telefono,
          direccion: direccion,
          email: email,
          disponibilidad:disponibilidad,
          estatus: estatus},
        success: function(data){
          if(data==1){
            setTimeout('alerta_correcto("Correcto","Operario registrado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de operarios");
            });
            $('#add_operarios').modal('toggle');  
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }

  //MODIFICAR OPERARIOS
    $(document).on('click', '#modificar_operarios',function(){
      document.getElementById("mod_oper_id_operario").value = $(this).attr('id_operario');
      document.getElementById("mod_oper_apaterno").value = $(this).attr('apaterno');
      document.getElementById("mod_oper_amaterno").value = $(this).attr('amaterno');
      document.getElementById("mod_oper_nombre").value = $(this).attr('nombre');
      document.getElementById("mod_oper_fExp").value = $(this).attr('fecha_exp');
      document.getElementById("mod_oper_tel").value = $(this).attr('telefono');
      document.getElementById("mod_oper_dir").value = $(this).attr('direccion');
      document.getElementById("mod_oper_email").value = $(this).attr('email');
      document.getElementById("mod_oper_disponibilidad").value = $(this).attr('disponibilidad');
      document.getElementById("mod_oper_estatus").value = $(this).attr('estatus');
    });

    function mod_operarios(){
      var id_operario =$("#mod_oper_id_operario").val();
      var apaterno =$("#mod_oper_apaterno").val();
      var amaterno= $("#mod_oper_amaterno").val();
      var nombre=$("#mod_oper_nombre").val();
      var fecha_exp=$("#mod_oper_fExp").val();
      var telefono=$("#mod_oper_tel").val();
      var direccion=$("#mod_oper_dir").val();
      var email=$("#mod_oper_email").val();
      var disponibilidad=$("#mod_oper_disponibilidad").val();
      var estatus=$("#mod_oper_estatus").val();

      alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
      $.ajax({
        url:"php/mod_operariosE.php",
        method:"POST",
        data:{id_operario:id_operario,
          apaterno:apaterno, 
          amaterno: amaterno,
          nombre: nombre,
          fecha_exp: fecha_exp,
          telefono: telefono,
          direccion: direccion,
          email: email,
          disponibilidad:disponibilidad,
          estatus: estatus},
        success: function(data){
          if(data==1){
            setTimeout('alerta_correcto("Correcto","Operario modificado correctamente");', timer);  
            $( "#menu-sidebar" ).load(" #menu-sidebar");
            $( "#menu-navbar" ).load(" #menu-navbar");
            $( "#tabla" ).load(" #tabla", function() {
              tabla("Listado de operarios");
            });
            $('#mod_operarios').modal('toggle');  
          }else{
            setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
          }
        } 
      })
    }
/*--------------FIN FUNCIONES PARA EDITAR OPERARIOS--------------------*/

$(document).ready(function () { 

  $(document).on('click', '#add_imagen',function(){
    document.getElementById("id_servicio").value = $(this).attr('id_servicio');       
  });

});

$( "#servicios" ).ready(function() {
  var tipo=$("#variable").attr('value');
  $("#servicios").append('<style>option.bueno {color: #38BC75;}option.regular {color: orange;}option.malo {color: red;} </style>');

  $.ajax({
    url:"php/cargar_unidadesE.php",
    method:"POST",
    data:{tipo: tipo},
    dataType: 'json',
    success: function(data){
    var array=Array.isArray(data);
      if(array==true){
        for(var i=0; i < data.length; i++){
          $("#vehiculos").append('<option value='+data[i].id+'>'+data[i].nombre+' ('+data[i].placas+')</option>');
        }
      }
    }
  })

  $.ajax({
    url:"php/cargar_servicioE.php",
    method:"POST",
    data:{tipo: tipo},
    dataType: 'json',
    success: function(data){
      var categoria_comp="";
      var categoria="";
      var array=Array.isArray(data);
      if(array==true){
        for(var i=0; i < data.length; i++){
          categoria=data[i].categoria;
          if (categoria!=categoria_comp){
            $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><hr><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
          }
          $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="d'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'"></div><hr></div>');
          categoria_comp=data[i].categoria;
        }
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
    }
  })
}); 

$( "#variable_f" ).ready(function() {
  var tipo=$("#variable_f").attr('value');
  $.ajax({
    url:"php/cargar_unidadesE.php",
    method:"POST",
    data:{tipo: tipo},
    dataType: 'json',
    success: function(data){
      var array=Array.isArray(data);
      if(array==true){
        for(var i=0; i < data.length; i++){
          $("#vehiculo_f").append('<option value='+data[i].id+'>'+data[i].nombre+' ('+data[i].placas+')</option>');
        }
        $('#vehiculo_f').selectpicker('refresh');
      }
    }
  })
}); 

function add_r(){ 
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var vehiculo =  $("#vehiculos option:selected").val();
  var tipo= $("#tipo_man option:selected").val();
  var tipo_vehiculo=$("#variable").val();
  var observaciones=$("#observaciones").val();
  var diagnostico=$("#diagnostico").val();
  var km=$("#km").val();
  var ll1=$("#ll1").val();
  var ll2=$("#ll2").val();
  var ll3=$("#ll3").val();
  var ll4=$("#ll4").val();
  var ll5=$("#ll5").val();
  var ll6=$("#ll6").val();
  var ll7=$("#ll7").val();
  var ll8=$("#ll8").val();
  var ll9=$("#ll9").val();
  var ll10=$("#ll10").val();

  $.ajax({
    url:"php/add_rE.php",
    method:"POST",
    data:{vehiculo:vehiculo, 
      tipo_vehiculo:tipo_vehiculo,
      tipo: tipo,
      km:km,
      observaciones: observaciones,
      diagnostico: diagnostico,
      ll1: ll1,
      ll2: ll2,
      ll3: ll3,
      ll4: ll4,
      ll5: ll5,
      ll6: ll6,
      ll7: ll7,
      ll8: ll8,
      ll9: ll9,
      ll10: ll10
    },
    success: function(data){
      var id_mantenimiento=data;
      if(data!="ERROR"){
        $.ajax({
          url:"php/cargar_servicioE.php",
          method:"POST",
          data:{tipo: tipo_vehiculo},
          dataType: 'json',
          success: function(data){
            var servicio="";
            var estatus="";
            var diagnostico_s="";
            var array=Array.isArray(data);
            if(array==true){
              for(var i=0; i < data.length; i++){
                servicio=data[i].id_catalogo;
                estatus=$("#"+servicio+" option:selected").val();
                diagnostico_s=$("#d"+servicio).val();
                $.ajax({
                  url:"php/add_serviciosE.php",
                  method:"POST",
                  data:{id_mantenimiento: id_mantenimiento,
                  id_catalogo: servicio,
                  estatus: estatus,
                  diagnostico_s: diagnostico_s},
                  dataType: 'json'
                })
              }
              
              $.ajax({
                url:"php/comp_estatus.php",
                method:"POST",
                data:{id_mantenimiento:id_mantenimiento},
                success: function(data){ 
                  setTimeout('alerta_correcto("Correcto","Mantenimiento creado correctamente");', timer); 
                  $( "#menu-sidebar" ).load(" #menu-sidebar");
                  $( "#menu-navbar" ).load(" #menu-navbar");
                  $( "#tabla" ).load(" #tabla", function() {
                    tabla("Listado de mantenimientos"); 
                  });
                } 
              })
            }else {
              setTimeout('alerta_correcto("Correcto","Mantenimiento creado correctamente");', timer);  
              $( "#menu-sidebar" ).load(" #menu-sidebar");
              $( "#menu-navbar" ).load(" #menu-navbar");
              $( "#tabla" ).load(" #tabla", function() {
                tabla("Listado de mantenimientos");
              });
            }
          } 
        })
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer); 
      } 
    } 
  })
}

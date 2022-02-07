/*_____________________ FUNCIONES MONITOREO _________________________________*/

  //LLENAR SELECT ADD_OPERARIO_VIAJE
  $(document).on('click', '#btn_add_viaje',function(){
    $('#add_destino_viaje').val('');
    $('#add_fecha_viaje').val('');
    $('#add_comentario_viaje').val('');
    $.ajax({
      url:"php/cargar_operarios.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#add_operario_viaje').empty();
        var array=Array.isArray(data);
        if(array==true){
          for(var i=0; i < data.length; i++){
            if(data[i].disponibilidad==1){
              $("#add_operario_viaje").append('<option value="'+data[i].id_operario+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2){
              $("#add_operario_viaje").append('<option value="'+data[i].id_operario+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#add_operario_viaje").append('<option value="'+data[i].id_operario+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }
          }
          $('#add_operario_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  });

  //Registrar nuevo Viaje
  function add_viaje(){
    alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
    var destino=$("#add_destino_viaje").val();
    var fecha=$("#add_fecha_viaje").val();
    var operario=$("#add_operario_viaje").val();
    var unidad=$("#add_unidad_viaje").val();
    var moto=$("#add_moto_viaje").val();
    var montacargas=$("#add_montacargas_viaje").val();
    var dolly=$("#add_dolly_viaje").val();
    var chasis=$("#add_chasis_viaje").val();
    var comentario=$("#add_comentario_viaje").val();
    $.ajax({
      url:"php/add_viajeE.php",
      method:"POST",
      data:{destino:destino, 
        fecha: fecha,
        operario: operario,
        unidad: unidad,
        moto: moto,
        montacargas: montacargas,
        dolly: dolly,
        chasis: chasis,
        comentario: comentario},
      success: function(data){
        if(data==1){
          setTimeout('alerta_correcto("Correcto","Viaje registrado correctamente");', timer);  
          $( "#menu-sidebar" ).load(" #menu-sidebar");
          $( "#menu-navbar" ).load(" #menu-navbar");
          $( "#tabla" ).load(" #tabla", function() {
            tabla("Listado de viajes");
          });
          $('#add_viaje').modal('toggle'); 
        }else{
          setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
        }
      } 
    })
  }

  //LLENAR SELECT ADD_UNIDAD
  $(document).on('click', '#btn_add_viaje',function(){
    $.ajax({
      url:"php/cargar_unidades.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#add_unidad_viaje').empty();
        var array=Array.isArray(data);
        if(array==true){
          $("#add_unidad_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if(data[i].disponibilidad==1){
              $("#add_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2){
              $("#add_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#add_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==4){
              $("#add_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==5){
              $("#add_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');
            }       
          }
          $('#add_unidad_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  });

  //LLENAR SELECT ADD_MOTO
  $(document).on('click', '#btn_add_viaje',function(){
    $.ajax({
      url:"php/cargar_moto.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#add_moto_viaje').empty();
        var array=Array.isArray(data);
        if(array==true){
          $("#add_moto_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if(data[i].disponibilidad==1){
              $("#add_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2){
              $("#add_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#add_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==4){
              $("#add_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==5){
              $("#add_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');
            } 
          }
          $('#add_moto_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  });

  //LLENAR SELECT ADD_MONTACARGAS
  $(document).on('click', '#btn_add_viaje',function(){
    $.ajax({
      url:"php/cargar_montacargas.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#add_montacargas_viaje').empty();
        var array=Array.isArray(data);
        if(array==true){
          $("#add_montacargas_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if(data[i].disponibilidad==1){
              $("#add_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2){
              $("#add_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#add_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==4){
              $("#add_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==5){
              $("#add_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');
            }
          }
          $('#add_montacargas_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  });

  //LLENAR SELECT ADD_DOLLY
  $(document).on('click', '#btn_add_viaje',function(){
    $.ajax({
      url:"php/cargar_dollys.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#add_dolly_viaje').empty();
        var array=Array.isArray(data);
        if(array==true){
          $("#add_dolly_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if(data[i].disponibilidad==1){
              $("#add_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2){
              $("#add_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#add_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==4){
              $("#add_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==5){
              $("#add_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');
            }
          }
          $('#add_dolly_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  });

  //LLENAR SELECT ADD_CHASIS
  $(document).on('click', '#btn_add_viaje',function(){
    $.ajax({
      url:"php/cargar_chasis.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#add_chasis_viaje').empty();
        var array=Array.isArray(data);
        if(array==true){
          $("#add_chasis_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if (data[i].disponibilidad==1){
              $("#add_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #28a745;">'+data[i].nombre+'</option>');              
            }else if (data[i].disponibilidad==2){
              $("#add_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');              
            }else if (data[i].disponibilidad==3){
              $("#add_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');              
            }else if (data[i].disponibilidad==4){
              $("#add_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');              
            }else if (data[i].disponibilidad==5){
              $("#add_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');              
            }
          }
          $('#add_chasis_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  });

  //Llenar modal mod_viajes
  $(document).on('click', '#btn_modificar_viaje',function(){
    document.getElementById("mod_id_viaje").value = $(this).attr('id_viaje');
    document.getElementById("mod_destino_viaje").value = $(this).attr('destino');
    document.getElementById("mod_fecha_viaje").value = $(this).attr('fecha');
    document.getElementById("mod_comentario_viaje").value = $(this).attr('comentario');
    var id_operario=$(this).attr('id_operario');
    var id_unidad= $(this).attr('id_unidad');
    var id_moto= $(this).attr('id_moto');
    var id_montacargas = $(this).attr('id_montacargas');
    var id_dolly= $(this).attr('id_dolly');
    var id_chasis= $(this).attr('id_chasis');
    llenar_select_mod_operario(id_operario);
    llenar_select_mod_unidad(id_unidad);
    llenar_select_mod_moto(id_moto);
    llenar_select_mod_montacargas(id_montacargas);
    llenar_select_mod_dolly(id_dolly);
    llenar_select_mod_chasis(id_chasis);
  });

  //LLENAR SELECT MOD_OPERARIO_VIAJE
  function llenar_select_mod_operario(id_operario){
    $.ajax({
      url:"php/cargar_operarios.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#mod_operario_viaje').empty();
        $('#mod_operario_viaje').selectpicker('refresh');
        var array=Array.isArray(data);
        if(array==true){
          for(var i=0; i < data.length; i++){
            if(data[i].disponibilidad==1){
              $("#mod_operario_viaje").append('<option value="'+data[i].id_operario+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2){
              $("#mod_operario_viaje").append('<option value="'+data[i].id_operario+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#mod_operario_viaje").append('<option value="'+data[i].id_operario+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }
          }
          $('#mod_operario_viaje').val(id_operario);
          $('#mod_operario_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  };

  //LLENAR SELECT MOD_UNIDAD
  function llenar_select_mod_unidad(id_unidad){
    $.ajax({
      url:"php/cargar_unidades.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#mod_unidad_viaje').empty();
        $('#mod_unidad_viaje').selectpicker('refresh');
        var array=Array.isArray(data);
        if(array==true){
          $("#mod_unidad_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if(id_unidad==data[i].id_unidad){
              $("#mod_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #6c757d;">'+data[i].nombre+'</option>');  
            }
            if(data[i].disponibilidad==1){
              $("#mod_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2 && id_unidad!=data[i].id_unidad){
              $("#mod_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#mod_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==4){
              $("#mod_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==5){
              $("#mod_unidad_viaje").append('<option value="'+data[i].id_unidad+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');
            }
          }
          $('#mod_unidad_viaje').val(id_unidad);
          $('#mod_unidad_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  };

  //LLENAR SELECT MOD_MOTO
  function llenar_select_mod_moto(id_moto){
    $.ajax({
      url:"php/cargar_moto.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#mod_moto_viaje').empty();
        $('#mod_moto_viaje').selectpicker('refresh');
        var array=Array.isArray(data);
        if(array==true){
          $("#mod_moto_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if(data[i].disponibilidad==1){
              $("#mod_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2){
              $("#mod_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#mod_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==4){
              $("#mod_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==5){
              $("#mod_moto_viaje").append('<option value="'+data[i].id_moto+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');
            }
          }
          $('#mod_moto_viaje').val(id_moto);
          $('#mod_moto_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  };

  //LLENAR SELECT MOD_MONTACARGAS
  function llenar_select_mod_montacargas(id_montacargas){
    $.ajax({
      url:"php/cargar_montacargas.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#mod_montacargas_viaje').empty();
        $('#mod_montacargas_viaje').selectpicker('refresh');
        var array=Array.isArray(data);
        if(array==true){
          $("#mod_montacargas_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if(data[i].disponibilidad==1){
              $("#mod_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2){
              $("#mod_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#mod_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==4){
              $("#mod_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==5){
              $("#mod_montacargas_viaje").append('<option value="'+data[i].id_montacargas+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');
            }
          }
          $('#mod_montacargas_viaje').val(id_montacargas);
          $('#mod_montacargas_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  };

  //LLENAR SELECT MOD_DOLLY
  function llenar_select_mod_dolly(id_dolly){
    $.ajax({
      url:"php/cargar_dollys.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#mod_dolly_viaje').empty();
        $('#mod_dolly_viaje').selectpicker('refresh');
        var array=Array.isArray(data);
        if(array==true){
          $("#mod_dolly_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if(data[i].disponibilidad==1){
              $("#mod_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #28a745;">'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==2){
              $("#mod_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==3){
              $("#mod_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==4){
              $("#mod_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');
            }else if(data[i].disponibilidad==5){
              $("#mod_dolly_viaje").append('<option value="'+data[i].id_dolly+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');
            }
          }
          $('#mod_dolly_viaje').val(id_dolly);
          $('#mod_dolly_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  };

  //LLENAR SELECT MOD_CHASIS
  function llenar_select_mod_chasis(id_chasis){
    $.ajax({
      url:"php/cargar_chasis.php",
      method:"POST",
      dataType: 'json',
      success: function(data){
        $('#mod_chasis_viaje').empty();
        $('#mod_chasis_viaje').selectpicker('refresh');
        var array=Array.isArray(data);
        if(array==true){
          $("#mod_chasis_viaje").append('<option value="0">NINGUNO</option>');
          for(var i=0; i < data.length; i++){
            if (data[i].disponibilidad==1){
              $("#mod_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #28a745;">'+data[i].nombre+'</option>');              
            }else if (data[i].disponibilidad==2){
              $("#mod_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #6c757d;" disabled>'+data[i].nombre+'</option>');              
            }else if (data[i].disponibilidad==3){
              $("#mod_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #8862E0;" disabled>'+data[i].nombre+'</option>');              
            }else if (data[i].disponibilidad==4){
              $("#mod_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #ffc107;" disabled>'+data[i].nombre+'</option>');              
            }else if (data[i].disponibilidad==5){
              $("#mod_chasis_viaje").append('<option value="'+data[i].id_chasis+'" style="color: #dc3545;" disabled>'+data[i].nombre+'</option>');              
            }
          }
          $('#mod_chasis_viaje').val(id_chasis);
          $('#mod_chasis_viaje').selectpicker('refresh');
        }
      },error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status+" - "+textStatus+" "+errorThrown);   
      }
    })
  };

  //Modificar datos Viaje
  function mod_viaje(){
    alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
    var id_viaje=$("#mod_id_viaje").val();
    var destino=$("#mod_destino_viaje").val();
    var fecha=$("#mod_fecha_viaje").val();
    var operario=$("#mod_operario_viaje").val();
    var unidad=$("#mod_unidad_viaje").val();
    var moto=$("#mod_moto_viaje").val();
    var montacargas=$("#mod_montacargas_viaje").val();
    var dolly=$("#mod_dolly_viaje").val();
    var chasis=$("#mod_chasis_viaje").val();
    var comentario=$("#mod_comentario_viaje").val();
    $.ajax({
      url:"php/mod_viajeE.php",
      method:"POST",
      data:{id_viaje:id_viaje,
        destino:destino, 
        fecha: fecha,
        operario: operario,
        unidad: unidad,
        moto: moto,
        montacargas: montacargas,
        dolly: dolly,
        chasis: chasis,
        comentario: comentario},
      success: function(data){
        if(data==1){
          setTimeout('alerta_correcto("Correcto","Viaje modificado correctamente");', timer);  
          $( "#menu-sidebar" ).load(" #menu-sidebar");
          $( "#menu-navbar" ).load(" #menu-navbar");
          $( "#tabla" ).load(" #tabla", function() {
            tabla("Listado de viajes");
          });
          $('#mod_viaje').modal('toggle'); 
        }else{
          setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
        }
      } 
    })
  }

  //Cancelar nuevo Viaje
  $(document).on('click', '#btn_can_viaje',function(){
    var titulo ="Cancelar viaje";
    var mensaje = "¿Esta seguro que desea cancelar este viaje?";
    var mensaje_ok = "Viaje cancelada correctamente";
    var mensaje_no = "No se pudo cancelar";
    var listado = "Listado de viajes";
    var id_m = $(this).attr('id_viaje');
    var ruta = "php/cancelar_viajeE.php";
    alerta_confirmacion(titulo,mensaje,mensaje_ok,mensaje_no,listado,id_m,ruta);
  });

  //registrar datos de salida del Viaje
  $(document).on('click', '#btn_registro_salida',function(){
    id_viaje=$(this).attr('id_viaje');
    $('#reg_sal_id_viaje').val(id_viaje);
    $('#reg_sal_id_unidad').val($(this).attr('id_unidad'));
    $('#reg_sal_id_moto').val($(this).attr('id_moto'));
    $('#reg_sal_id_montacargas').val($(this).attr('id_montacargas'));
    $('#reg_sal_id_dolly').val($(this).attr('id_dolly'));
    $('#reg_sal_id_chasis').val($(this).attr('id_chasis'));
    $('#reg_sal_km').val('');
    $('#reg_sal_disel').val('');
    $('#reg_sal_folio').val('');
    $('#reg_sal_comentario').val('');
    $.ajax({
      url:"php/revisar_salidas.php",
      method:"POST",
      data:{id_viaje: id_viaje},
      success: function(data){
        if(data==1){
          Swal.fire({
            title: 'Modificar datos de salida',
            text: 'Ya se han registrado los datos de salida de este viaje, ¿Desea modificarlos?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#424964',
            cancelButtonColor: '#d33',
            confirmButtonText: "Confirmar",
            cancelButtonText: "Anular"
          }).then((result) => {
            if(result.value) {
              $.ajax({
                url: "php/cargar_datos_salida.php",
                method:"POST",
                data:{id_viaje: id_viaje},
                dataType: 'json',
                success: function(data){
                  var array=Array.isArray(data);
                  if(array==true){
                    for(var i=0; i < data.length; i++){
                      $('#reg_sal_km').val(data[i].km);
                      $('#reg_sal_disel').val(data[i].disel);
                      $('#reg_sal_folio').val(data[i].folio);
                      $('#reg_sal_comentario').val(data[i].comentario);
                    }
                    $('#mod_data_r_salida').modal('show'); 
                  }else{
                    console.log("Error: "+data);
                  }
                }
              })
            }
          })
        }else if(data==2){
          $('#mod_data_r_salida').modal('toggle'); 
        }else{
          setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
        }
      }
    })
  });

  //Revisiomn de salidas
  function mod_data_r_salida(){
    var id_viaje=$("#reg_sal_id_viaje").val();
    var id_unidad=$("#reg_sal_id_unidad").val();
    var km=$("#reg_sal_km").val();
    var disel=$("#reg_sal_disel").val();
    var folio=$("#reg_sal_folio").val();
    var tipo='1';
    var comentario=$("#reg_sal_comentario").val();
    $.ajax({
      url:"php/revisar_salidas.php",
      method:"POST",
      data:{id_viaje: id_viaje},
      success: function(data){
        if(data==1){
          $.ajax({
            url:"php/mod_reg_salida_unidad.php",
            method:"POST",
            data:{id_viaje: id_viaje,
                  id_unidad:id_unidad,
                  km:km,
                  disel:disel,
                  folio:folio,
                  tipo:tipo,
                  comentario:comentario},
            success: function(data){
              if(data==1){
                setTimeout('alerta_correcto("Correcto","Viaje modificado correctamente");', timer);  
                $( "#menu-sidebar" ).load(" #menu-sidebar");
                $( "#menu-navbar" ).load(" #menu-navbar");
                $( "#tabla" ).load(" #tabla", function() {
                  tabla("Listado de viajes");
                });
                $('#mod_data_r_salida').modal('toggle'); 
              }else{
                setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
              }
            }
          })
        }else if(data==2){
          $.ajax({
            url:"php/reg_salida_unidad.php",
            method:"POST",
            data:{id_viaje: id_viaje,
                  id_unidad:id_unidad,
                  km:km,
                  disel:disel,
                  folio:folio,
                  tipo:tipo,
                  comentario:comentario},
            success: function(data){
              if(data==1){
                setTimeout('alerta_correcto("Correcto","Viaje modificado correctamente");', timer);  
                $( "#menu-sidebar" ).load(" #menu-sidebar");
                $( "#menu-navbar" ).load(" #menu-navbar");
                $( "#tabla" ).load(" #tabla", function() {
                  tabla("Listado de viajes");
                });
                $('#mod_data_r_salida').modal('toggle'); 
              }else{
                setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
              }
            }
          })
        }
      }
    });
  }

  //registrar datos de entrada del Viaje
  $(document).on('click', '#btn_registro_entrada',function(){
    id_viaje=$(this).attr('id_viaje');
    $('#reg_ent_id_viaje').val(id_viaje);
    $('#reg_ent_id_unidad').val($(this).attr('id_unidad'));
    $('#reg_ent_id_moto').val($(this).attr('id_moto'));
    $('#reg_ent_id_montacargas').val($(this).attr('id_montacargas'));
    $('#reg_ent_id_dolly').val($(this).attr('id_dolly'));
    $('#reg_ent_id_chasis').val($(this).attr('id_chasis'));
    $('#reg_ent_km').val('');
    $('#reg_ent_disel').val('');
    $('#reg_ent_folio').val('');
    $('#reg_ent_comentario').val('');
    $('#reg_ent_id_viaje').val(id_viaje);
    $.ajax({
      url:"php/revisar_entradas.php",
      method:"POST",
      data:{id_viaje: id_viaje},
      success: function(data){
        if(data==1){
          Swal.fire({
            title: 'Modificar datos de entrada',
            text: 'Ya se han registrado los datos de entrada de este viaje, ¿Desea modificarlos?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#424964',
            cancelButtonColor: '#d33',
            confirmButtonText: "Confirmar",
            cancelButtonText: "Anular"
          }).then((result) => {
            if(result.value) {
              $.ajax({
                url: "php/cargar_datos_entrada.php",
                method:"POST",
                data:{id_viaje: id_viaje},
                dataType: 'json',
                success: function(data){
                  var array=Array.isArray(data);
                  if(array==true){
                    for(var i=0; i < data.length; i++){
                      $('#reg_ent_km').val(data[i].km);
                      $('#reg_ent_disel').val(data[i].disel);
                      $('#reg_ent_folio').val(data[i].folio);
                      $('#reg_ent_comentario').val(data[i].comentario);
                    }
                    $('#mod_data_r_entrada').modal('show'); 
                  }else{
                    console.log("Error: "+data);
                  }
                }
              })
            }
          })
        }else if(data==2){
          $('#mod_data_r_entrada').modal('toggle'); 
        }else{
          setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
        }
      }
    })
  });

  //Revisiomn de entrada
  function mod_data_r_entrada(){
    var id_viaje=$("#reg_ent_id_viaje").val();
    var id_unidad=$("#reg_ent_id_unidad").val();
    var km=$("#reg_ent_km").val();
    var disel=$("#reg_ent_disel").val();
    var folio=$("#reg_ent_folio").val();
    var tipo='2';
    var comentario=$("#reg_ent_comentario").val();
    $.ajax({
      url:"php/revisar_entradas.php",
      method:"POST",
      data:{id_viaje: id_viaje},
      success: function(data){
        if(data==1){
          $.ajax({
            url:"php/mod_reg_entrada_unidad.php",
            method:"POST",
            data:{id_viaje: id_viaje,
                  id_unidad:id_unidad,
                  km:km,
                  disel:disel,
                  folio:folio,
                  tipo:tipo,
                  comentario:comentario},
            success: function(data){
              if(data==1){
                setTimeout('alerta_correcto("Correcto","Viaje modificado correctamente");', timer);  
                $( "#menu-sidebar" ).load(" #menu-sidebar");
                $( "#menu-navbar" ).load(" #menu-navbar");
                $( "#tabla" ).load(" #tabla", function() {
                  tabla("Listado de viajes");
                });
                $('#mod_data_r_entrada').modal('toggle'); 
              }else{
                setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
              }
            }
          })
        }else if(data==2){
          $.ajax({
            url:"php/reg_entrada_unidad.php",
            method:"POST",
            data:{id_viaje: id_viaje,
                  id_unidad:id_unidad,
                  km:km,
                  disel:disel,
                  folio:folio,
                  tipo:tipo,
                  comentario:comentario},
            success: function(data){
              if(data==1){
                setTimeout('alerta_correcto("Correcto","Viaje modificado correctamente");', timer);  
                $( "#menu-sidebar" ).load(" #menu-sidebar");
                $( "#menu-navbar" ).load(" #menu-navbar");
                $( "#tabla" ).load(" #tabla", function() {
                  tabla("Listado de viajes");
                });
                $('#mod_data_r_entrada').modal('toggle'); 
              }else{
                setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
              }
            }
          })
        }
      }
    });
  }

/*_____________________ FUNCIONES MONITOREO _________________________________*/

$(document).on('click', '#btn_viajes_checklist',function(){
  $('#checklist_id_viaje').empty();
  $('#checklist_id_unidad').empty();
  $('#checklist_id_moto').empty();
  $('#checklist_id_montacargas').empty();
  $('#checklist_id_dolly').empty();
  $('#checklist_id_chasis').empty();
  $("#servicios").empty();
  $("#diagnostico").val('');
  var id_viaje=$(this).attr('id_viaje');
  var id_unidad=$(this).attr('id_unidad');
  var id_moto=$(this).attr('id_moto');
  var id_montacargas=$(this).attr('id_montacargas');
  var id_dolly=$(this).attr('id_dolly');
  var id_chasis=$(this).attr('id_chasis');
  var nombre_unidad=$(this).attr('nombre_unidad');
  var nombre_moto=$(this).attr('nombre_moto');
  var nombre_montacargas=$(this).attr('nombre_montacargas');
  var nombre_dolly=$(this).attr('nombre_dolly');
  var nombre_chasis=$(this).attr('nombre_chasis');
  $('#checklist_id_viaje').val(id_viaje);
  $('#checklist_id_unidad').val(id_unidad);
  $('#checklist_id_moto').val(id_moto);
  $('#checklist_id_montacargas').val(id_montacargas);
  $('#checklist_id_dolly').val(id_dolly);
  $('#checklist_id_chasis').val(id_chasis);
  $("#servicios").append('<style>option.bueno {color: #38BC75;}option.regular {color: orange;}option.malo {color: red;} </style>');

  $.ajax({
    url:"php/revisar_checklist.php",
    method:"POST",
    data:{id_viaje: id_viaje},
    success: function(data){
      if(data==1){
        Swal.fire({
          title: 'Modificar datos del Checklist',
          text: 'Ya se han registrado los datos en el checklist de este viaje, ¿Desea modificarlos?',
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#424964',
          cancelButtonColor: '#d33',
          confirmButtonText: "Confirmar",
          cancelButtonText: "Anular"
        }).then((result) => {
          if(result.value){
            $.ajax({
              url: "php/revisar_id_checklist.php",
              method:"POST",
              data:{id_viaje: id_viaje},
              dataType:'json',
              success: function(data){
                var array=Array.isArray(data);
                var id_checklist="";
                var diagnostico="";
                if(array==true){
                  for(var i=0; i < data.length; i++){
                    id_checklist=data[i].id_checklist;
                    diagnostico=data[i].diagnostico;
                  }
                  llenar_formulario_checklist(id_checklist,diagnostico,id_viaje,id_unidad,id_moto,id_montacargas,id_dolly,id_chasis,nombre_unidad,nombre_moto,nombre_montacargas,nombre_dolly,nombre_chasis);
                }
              }
            })
          }
        })
      }else if(data==2){
        if(id_unidad>0){
            var tipo='1';
            $.ajax({
              url:"php/cargar_servicioE.php",
              method:"POST",
              data:{tipo: tipo},
              dataType: 'json',
              success: function(data){
                var categoria_comp="";
                var categoria="";
                var array=Array.isArray(data);
                $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-truck"></i> Unidad: '+nombre_unidad+'<h3></div></div>');
                if(array==true){
                  for(var i=0; i < data.length; i++){
                    categoria=data[i].categoria;
                    if (categoria!=categoria_comp){
                      $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
                    }
                    $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="unidad_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_unidad_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'"></div><hr></div>');
                    categoria_comp=data[i].categoria;
                  }
                  $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="unidad_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="unidad_ll2"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="3" id="unidad_ll3"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="4" id="unidad_ll4"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="5" id="unidad_ll5"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="6" id="unidad_ll6"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="7" id="unidad_ll7"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="8" id="unidad_ll8"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="9" id="unidad_ll9"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="10" id="unidad_ll10"></div></div></div>');
                  $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/vehiculo.png"></div>');        
                  $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="unidad_observaciones"></textarea></div>');
                }
              },
              error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
              }
            })
          }

          if(id_moto>0){
            var tipo='2';
            $.ajax({
              url:"php/cargar_servicioE.php",
              method:"POST",
              data:{tipo: tipo},
              dataType: 'json',
              success: function(data){
                var categoria_comp="";
                var categoria="";
                var array=Array.isArray(data);
                $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-motorcycle"></i> Moto: '+nombre_moto+'<h3></div></div>');
                if(array==true){
                  for(var i=0; i < data.length; i++){
                    categoria=data[i].categoria;
                    if (categoria!=categoria_comp){
                      $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
                    }
                    $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="moto_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_moto_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'"></div><hr></div>');
                    categoria_comp=data[i].categoria;
                  }
                  $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="moto_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="moto_ll2"></div></div></div>');
                  $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/moto.png"></div>');        
                  $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="moto_observaciones"></textarea></div>');
                }
              },
              error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
              }
            })
          }

          if(id_montacargas>0){
            var tipo='3';
            $.ajax({
              url:"php/cargar_servicioE.php",
              method:"POST",
              data:{tipo: tipo},
              dataType: 'json',
              success: function(data){
                var categoria_comp="";
                var categoria="";
                var array=Array.isArray(data);
                $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-snowplow"></i> Montacargas: '+nombre_montacargas+'<h3></div></div>');
                if(array==true){
                  for(var i=0; i < data.length; i++){
                    categoria=data[i].categoria;
                    if (categoria!=categoria_comp){
                      $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
                    }
                    $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="montacargas_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_montacargas_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'"></div><hr></div>');
                    categoria_comp=data[i].categoria;
                  }
                  $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="montacargas_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="montacargas_ll2"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="3" id="montacargas_ll3"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="4" id="montacargas_ll4"></div></div></div>');
                  $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/montacargas.png"></div>');        
                  $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="montacargas_observaciones"></textarea></div>');
                }
              },
              error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
              }
            })
          }

          if(id_dolly>0){
            var tipo='4';
            $.ajax({
              url:"php/cargar_servicioE.php",
              method:"POST",
              data:{tipo: tipo},
              dataType: 'json',
              success: function(data){
                var categoria_comp="";
                var categoria="";
                var array=Array.isArray(data);
                $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-truck-loading"></i> Dolly: '+nombre_dolly+'<h3></div></div>');
                if(array==true){
                  for(var i=0; i < data.length; i++){
                    categoria=data[i].categoria;
                    if (categoria!=categoria_comp){
                      $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
                    }
                    $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="dolly_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_dolly_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'"></div><hr></div>');
                    categoria_comp=data[i].categoria;
                  }
                  $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="dolly_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="dolly_ll2"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="3" id="dolly_ll3"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="4" id="dolly_ll4"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="5" id="dolly_ll5"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="6" id="dolly_ll6"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="7" id="dolly_ll7"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="8" id="dolly_ll8"></div></div></div>');
                  $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/dolly.png"></div>');        
                  $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="dolly_observaciones"></textarea></div>');
                }
              },
              error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
              }
            })
          }

          if(id_chasis>0){
            var tipo='5';
            $.ajax({
              url:"php/cargar_servicioE.php",
              method:"POST",
              data:{tipo: tipo},
              dataType: 'json',
              success: function(data){
                var categoria_comp="";
                var categoria="";
                var array=Array.isArray(data);
                $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-truck-moving"></i> Chasis: '+nombre_chasis+'<h3></div></div>');
                if(array==true){
                  for(var i=0; i < data.length; i++){
                    categoria=data[i].categoria;
                    if (categoria!=categoria_comp){
                      $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
                    }
                    $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="chasis_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_chasis_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'"></div><hr></div>');
                    categoria_comp=data[i].categoria;
                  }
                  $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="chasis_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="chasis_ll2"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="3" id="chasis_ll3"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="4" id="chasis_ll4"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="5" id="chasis_ll5"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="6" id="chasis_ll6"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="7" id="chasis_ll7"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="8" id="chasis_ll8"></div></div></div>');
                  $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/chasis.png"></div>');        
                  $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="chasis_observaciones"></textarea></div>');
                }
              },
              error: function (jqXHR, textStatus, errorThrown) {
                console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
              }
            })
          }

          $('#mod_viajes_checklist').modal('show');
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
      }
    }
  })

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

function add_checklist(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var id_viaje =$('#checklist_id_viaje').val();
  var id_unidad =$('#checklist_id_unidad').val();
  var id_moto =$('#checklist_id_moto').val();
  var id_montacargas =$('#checklist_id_montacargas').val();
  var id_dolly =$('#checklist_id_dolly').val();
  var id_chasis =$('#checklist_id_chasis').val();
  var diagnostico =$('#diagnostico').val();

  $.ajax({
    url:"php/revisar_checklist.php",
    method:"POST",
    data:{id_viaje: id_viaje},
    success: function(data){
      if (data==1) {
        $.ajax({
          url:"php/mod_checklistE.php",
          method:"POST",
          data:{id_viaje: id_viaje,
                diagnostico:diagnostico},
          success: function(data){
            var id_checklist = data;
            mod_checklist(id_checklist,id_viaje,id_unidad,id_moto,id_montacargas,id_dolly,id_chasis);
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
          }
        })
      }else if(data==2){
        $.ajax({
          url:"php/add_checklistE.php",
          method:"POST",
          data:{id_viaje: id_viaje,
                diagnostico:diagnostico},
          success: function(data){
            var id_checklist = data;
            contenido_checklist(id_checklist,id_viaje,id_unidad,id_moto,id_montacargas,id_dolly,id_chasis);
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
          }
        })
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
      }
    }
  })
}

function contenido_checklist(id_checklist,id_viaje,id_unidad,id_moto,id_montacargas,id_dolly,id_chasis){ 
  if(id_unidad>0){
    var unidad_ll1=$("#unidad_ll1").val();
    var unidad_ll2=$("#unidad_ll2").val();
    var unidad_ll3=$("#unidad_ll3").val();
    var unidad_ll4=$("#unidad_ll4").val();
    var unidad_ll5=$("#unidad_ll5").val();
    var unidad_ll6=$("#unidad_ll6").val();
    var unidad_ll7=$("#unidad_ll7").val();
    var unidad_ll8=$("#unidad_ll8").val();
    var unidad_ll9=$("#unidad_ll9").val();
    var unidad_ll10=$("#unidad_ll10").val();
    var unidad_observaciones=$("#unidad_observaciones").val();

    $.ajax({
      url:"php/add_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:unidad_ll1,
      ll2:unidad_ll2,
      ll3:unidad_ll3,
      ll4:unidad_ll4,
      ll5:unidad_ll5,
      ll6:unidad_ll6,
      ll7:unidad_ll7,
      ll8:unidad_ll8,
      ll9:unidad_ll9,
      ll10:unidad_ll10,
      observaciones:unidad_observaciones,
      tipo:'1'},
      dataType: 'json'
    })      
    
    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '1'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#unidad_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_unidad_"+id_catalogo).val();
          $.ajax({
            url:"php/cargar_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'1',
            id_unidad:id_unidad,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }

  if(id_moto>0){
    var moto_ll1=$("#moto_ll1").val();
    var moto_ll2=$("#moto_ll2").val();
    var moto_ll3='0';
    var moto_ll4='0';
    var moto_ll5='0';
    var moto_ll6='0';
    var moto_ll7='0';
    var moto_ll8='0';
    var moto_ll9='0';
    var moto_ll10='0';
    var moto_observaciones=$("#moto_observaciones").val();

    $.ajax({
      url:"php/add_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:moto_ll1,
      ll2:moto_ll2,
      ll3:moto_ll3,
      ll4:moto_ll4,
      ll5:moto_ll5,
      ll6:moto_ll6,
      ll7:moto_ll7,
      ll8:moto_ll8,
      ll9:moto_ll9,
      ll10:moto_ll10,
      observaciones:moto_observaciones,
      tipo:'2'},
      dataType: 'json'
    }) 

    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '2'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#moto_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_moto_"+id_catalogo).val();
          $.ajax({
            url:"php/cargar_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'2',
            id_unidad:id_moto,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }
  
  if(id_montacargas>0){
    var montacargas_ll1=$("#montacargas_ll1").val();
    var montacargas_ll2=$("#montacargas_ll2").val();
    var montacargas_ll3=$("#montacargas_ll3").val();
    var montacargas_ll4=$("#montacargas_ll4").val();
    var montacargas_ll5='0';
    var montacargas_ll6='0';
    var montacargas_ll7='0';
    var montacargas_ll8='0';
    var montacargas_ll9='0';
    var montacargas_ll10='0';
    var montacargas_observaciones=$("#montacargas_observaciones").val();

    $.ajax({
      url:"php/add_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:montacargas_ll1,
      ll2:montacargas_ll2,
      ll3:montacargas_ll3,
      ll4:montacargas_ll4,
      ll5:montacargas_ll5,
      ll6:montacargas_ll6,
      ll7:montacargas_ll7,
      ll8:montacargas_ll8,
      ll9:montacargas_ll9,
      ll10:montacargas_ll10,
      observaciones:montacargas_observaciones,
      tipo:'3'},
      dataType: 'json'
    })      

    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '3'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#montacargas_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_montacargas_"+id_catalogo).val();
          $.ajax({
            url:"php/cargar_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'3',
            id_unidad:id_montacargas,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }
  
  if(id_dolly>0){
    var dolly_ll1=$("#dolly_ll1").val();
    var dolly_ll2=$("#dolly_ll2").val();
    var dolly_ll3=$("#dolly_ll3").val();
    var dolly_ll4=$("#dolly_ll4").val();
    var dolly_ll5=$("#dolly_ll5").val();
    var dolly_ll6=$("#dolly_ll6").val();
    var dolly_ll7=$("#dolly_ll7").val();
    var dolly_ll8=$("#dolly_ll8").val();
    var dolly_ll9='0';
    var dolly_ll10='0';
    var dolly_observaciones=$("#dolly_observaciones").val();

    $.ajax({
      url:"php/add_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:dolly_ll1,
      ll2:dolly_ll2,
      ll3:dolly_ll3,
      ll4:dolly_ll4,
      ll5:dolly_ll5,
      ll6:dolly_ll6,
      ll7:dolly_ll7,
      ll8:dolly_ll8,
      ll9:dolly_ll9,
      ll10:dolly_ll10,
      observaciones:dolly_observaciones,
      tipo:'4'},
      dataType: 'json'
    })      

    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '4'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#dolly_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_dolly_"+id_catalogo).val();
          $.ajax({
            url:"php/cargar_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'4',
            id_unidad:id_dolly,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }
  
  if(id_chasis>0){
    var chasis_ll1=$("#chasis_ll1").val();
    var chasis_ll2=$("#chasis_ll2").val();
    var chasis_ll3=$("#chasis_ll3").val();
    var chasis_ll4=$("#chasis_ll4").val();
    var chasis_ll5=$("#chasis_ll5").val();
    var chasis_ll6=$("#chasis_ll6").val();
    var chasis_ll7=$("#chasis_ll7").val();
    var chasis_ll8=$("#chasis_ll8").val();
    var chasis_ll9='0';
    var chasis_ll10='0';
    var chasis_observaciones=$("#chasis_observaciones").val();

    $.ajax({
      url:"php/add_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:chasis_ll1,
      ll2:chasis_ll2,
      ll3:chasis_ll3,
      ll4:chasis_ll4,
      ll5:chasis_ll5,
      ll6:chasis_ll6,
      ll7:chasis_ll7,
      ll8:chasis_ll8,
      ll9:chasis_ll9,
      ll10:chasis_ll10,
      observaciones:chasis_observaciones,
      tipo:'5'},
      dataType: 'json'
    })  

    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '5'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#chasis_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_chasis_"+id_catalogo).val();
          $.ajax({
            url:"php/cargar_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'5',
            id_unidad:id_chasis,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }
  $('#mod_viajes_checklist').modal('toggle');
  setTimeout('alerta_correcto("Correcto","Imagenes añadidas correctamente");', timer);
}

function mod_checklist(id_checklist,id_viaje,id_unidad,id_moto,id_montacargas,id_dolly,id_chasis){ 
  
  if(id_unidad>0){
    var unidad_ll1=$("#unidad_ll1").val();
    var unidad_ll2=$("#unidad_ll2").val();
    var unidad_ll3=$("#unidad_ll3").val();
    var unidad_ll4=$("#unidad_ll4").val();
    var unidad_ll5=$("#unidad_ll5").val();
    var unidad_ll6=$("#unidad_ll6").val();
    var unidad_ll7=$("#unidad_ll7").val();
    var unidad_ll8=$("#unidad_ll8").val();
    var unidad_ll9=$("#unidad_ll9").val();
    var unidad_ll10=$("#unidad_ll10").val();
    var unidad_observaciones=$("#unidad_observaciones").val();

    $.ajax({
      url:"php/mod_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:unidad_ll1,
      ll2:unidad_ll2,
      ll3:unidad_ll3,
      ll4:unidad_ll4,
      ll5:unidad_ll5,
      ll6:unidad_ll6,
      ll7:unidad_ll7,
      ll8:unidad_ll8,
      ll9:unidad_ll9,
      ll10:unidad_ll10,
      observaciones:unidad_observaciones,
      tipo:'1'},
      dataType: 'json'
    })      
    
    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '1'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#unidad_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_unidad_"+id_catalogo).val();
          $.ajax({
            url:"php/mod_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'1',
            id_unidad:id_unidad,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }

  if(id_moto>0){
    var moto_ll1=$("#moto_ll1").val();
    var moto_ll2=$("#moto_ll2").val();
    var moto_ll3='0';
    var moto_ll4='0';
    var moto_ll5='0';
    var moto_ll6='0';
    var moto_ll7='0';
    var moto_ll8='0';
    var moto_ll9='0';
    var moto_ll10='0';
    var moto_observaciones=$("#moto_observaciones").val();

    $.ajax({
      url:"php/mod_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:moto_ll1,
      ll2:moto_ll2,
      ll3:moto_ll3,
      ll4:moto_ll4,
      ll5:moto_ll5,
      ll6:moto_ll6,
      ll7:moto_ll7,
      ll8:moto_ll8,
      ll9:moto_ll9,
      ll10:moto_ll10,
      observaciones:moto_observaciones,
      tipo:'2'},
      dataType: 'json'
    }) 

    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '2'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#moto_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_moto_"+id_catalogo).val();
          $.ajax({
            url:"php/mod_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'2',
            id_unidad:id_moto,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }
  
  if(id_montacargas>0){
    var montacargas_ll1=$("#montacargas_ll1").val();
    var montacargas_ll2=$("#montacargas_ll2").val();
    var montacargas_ll3=$("#montacargas_ll3").val();
    var montacargas_ll4=$("#montacargas_ll4").val();
    var montacargas_ll5='0';
    var montacargas_ll6='0';
    var montacargas_ll7='0';
    var montacargas_ll8='0';
    var montacargas_ll9='0';
    var montacargas_ll10='0';
    var montacargas_observaciones=$("#montacargas_observaciones").val();

    $.ajax({
      url:"php/mod_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:montacargas_ll1,
      ll2:montacargas_ll2,
      ll3:montacargas_ll3,
      ll4:montacargas_ll4,
      ll5:montacargas_ll5,
      ll6:montacargas_ll6,
      ll7:montacargas_ll7,
      ll8:montacargas_ll8,
      ll9:montacargas_ll9,
      ll10:montacargas_ll10,
      observaciones:montacargas_observaciones,
      tipo:'3'},
      dataType: 'json'
    })      

    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '3'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#montacargas_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_montacargas_"+id_catalogo).val();
          $.ajax({
            url:"php/mod_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'3',
            id_unidad:id_montacargas,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }
  
  if(id_dolly>0){
    var dolly_ll1=$("#dolly_ll1").val();
    var dolly_ll2=$("#dolly_ll2").val();
    var dolly_ll3=$("#dolly_ll3").val();
    var dolly_ll4=$("#dolly_ll4").val();
    var dolly_ll5=$("#dolly_ll5").val();
    var dolly_ll6=$("#dolly_ll6").val();
    var dolly_ll7=$("#dolly_ll7").val();
    var dolly_ll8=$("#dolly_ll8").val();
    var dolly_ll9='0';
    var dolly_ll10='0';
    var dolly_observaciones=$("#dolly_observaciones").val();

    $.ajax({
      url:"php/mod_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:dolly_ll1,
      ll2:dolly_ll2,
      ll3:dolly_ll3,
      ll4:dolly_ll4,
      ll5:dolly_ll5,
      ll6:dolly_ll6,
      ll7:dolly_ll7,
      ll8:dolly_ll8,
      ll9:dolly_ll9,
      ll10:dolly_ll10,
      observaciones:dolly_observaciones,
      tipo:'4'},
      dataType: 'json'
    })      

    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '4'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#dolly_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_dolly_"+id_catalogo).val();
          $.ajax({
            url:"php/mod_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'4',
            id_unidad:id_dolly,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }
  
  if(id_chasis>0){
    var chasis_ll1=$("#chasis_ll1").val();
    var chasis_ll2=$("#chasis_ll2").val();
    var chasis_ll3=$("#chasis_ll3").val();
    var chasis_ll4=$("#chasis_ll4").val();
    var chasis_ll5=$("#chasis_ll5").val();
    var chasis_ll6=$("#chasis_ll6").val();
    var chasis_ll7=$("#chasis_ll7").val();
    var chasis_ll8=$("#chasis_ll8").val();
    var chasis_ll9='0';
    var chasis_ll10='0';
    var chasis_observaciones=$("#chasis_observaciones").val();

    $.ajax({
      url:"php/mod_checklist_llantasE.php",
      method:"POST",
      data:{id_checklist:id_checklist,
      ll1:chasis_ll1,
      ll2:chasis_ll2,
      ll3:chasis_ll3,
      ll4:chasis_ll4,
      ll5:chasis_ll5,
      ll6:chasis_ll6,
      ll7:chasis_ll7,
      ll8:chasis_ll8,
      ll9:chasis_ll9,
      ll10:chasis_ll10,
      observaciones:chasis_observaciones,
      tipo:'5'},
      dataType: 'json'
    })  

    $.ajax({
      url:"php/cargar_servicioE.php",
      method:"POST",
      data:{tipo: '5'},
      dataType: 'json',
      success: function(data){
        for(var i=0; i < data.length; i++){
          id_catalogo=data[i].id_catalogo;
          estatus=$("#chasis_"+id_catalogo+" option:selected").val();
          diagnostico=$("#diagnostico_chasis_"+id_catalogo).val();
          $.ajax({
            url:"php/mod_rchecklistE.php",
            method:"POST",
            data:{id_checklist:id_checklist,
            id_catalogo:id_catalogo,
            tipo:'5',
            id_unidad:id_chasis,
            estatus:estatus,
            diagnostico:diagnostico},
            dataType: 'json'
          })
        }
      }
    })
  }
  $('#mod_viajes_checklist').modal('toggle');
  setTimeout('alerta_correcto("Correcto","Imagenes añadidas correctamente");', timer);
}

function llenar_formulario_checklist(id_checklist,diagnostico,id_viaje,id_unidad,id_moto,id_montacargas,id_dolly,id_chasis,nombre_unidad,nombre_moto,nombre_montacargas,nombre_dolly,nombre_chasis){
  $('#checklist_id_viaje').empty();
  $('#checklist_id_unidad').empty();
  $('#checklist_id_moto').empty();
  $('#checklist_id_montacargas').empty();
  $('#checklist_id_dolly').empty();
  $('#checklist_id_chasis').empty();
  $("#servicios").empty();
  $("#diagnostico").val('');
  var nombre_unidad=nombre_unidad;
  var nombre_moto=nombre_moto;
  var nombre_montacargas=nombre_montacargas;
  var nombre_dolly=nombre_dolly;
  var nombre_chasis=nombre_chasis;
  $('#checklist_id_viaje').val(id_viaje);
  $('#checklist_id_unidad').val(id_unidad);
  $('#checklist_id_moto').val(id_moto);
  $('#checklist_id_montacargas').val(id_montacargas);
  $('#checklist_id_dolly').val(id_dolly);
  $('#checklist_id_chasis').val(id_chasis);
   $('#diagnostico').val(diagnostico);

  if(id_unidad>0){
    $.ajax({
      url:"php/cargar_formulario_checklistE.php",
      method:"POST",
      data:{tipo: '1', 
            id_checklist:id_checklist},
      dataType: 'json',
      success: function(data){
        var categoria_comp="";
        var categoria="";
        var array=Array.isArray(data);
        $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-truck"></i> Unidad: '+nombre_unidad+'<h3></div></div>');
        if(array==true){
          for(var i=0; i < data.length; i++){
            categoria=data[i].categoria;
            if (categoria!=categoria_comp){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
            }
            if(data[i].estatus=='1'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="unidad_'+data[i].id_catalogo+'"><option value="1" class="bueno" selected>BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_unidad_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }else if(data[i].estatus=='2'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="unidad_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular" selected>REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_unidad_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }if(data[i].estatus=='3'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="unidad_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo" selected>MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_unidad_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }
            categoria_comp=data[i].categoria;
          }
          $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="unidad_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="unidad_ll2"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="3" id="unidad_ll3"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="4" id="unidad_ll4"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="5" id="unidad_ll5"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="6" id="unidad_ll6"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="7" id="unidad_ll7"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="8" id="unidad_ll8"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="9" id="unidad_ll9"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="10" id="unidad_ll10"></div></div></div>');
          $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/vehiculo.png"></div>');        
          $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="unidad_observaciones"></textarea></div>');
          $.ajax({
            url:"php/cargar_formulario_llantas.php",
            method:"POST",
            data:{id_checklist:id_checklist, 
                  tipo:'1'},
            dataType: 'json',
            success: function(data){
              var array=Array.isArray(data);
              if(array==true){
                for(var i=0; i < data.length; i++){
                  $("#unidad_ll1").val(data[i].ll1);
                  $("#unidad_ll2").val(data[i].ll2);
                  $("#unidad_ll3").val(data[i].ll3);
                  $("#unidad_ll4").val(data[i].ll4);
                  $("#unidad_ll5").val(data[i].ll5);
                  $("#unidad_ll6").val(data[i].ll6);
                  $("#unidad_ll7").val(data[i].ll7);
                  $("#unidad_ll8").val(data[i].ll8);
                  $("#unidad_ll9").val(data[i].ll9);
                  $("#unidad_ll10").val(data[i].ll10);
                  $("#unidad_observaciones").val(data[i].observaciones);
                }
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
            }
          })
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
      }
    })
  }

  if(id_moto>0){
    $.ajax({
      url:"php/cargar_formulario_checklistE.php",
      method:"POST",
      data:{tipo: '2', id_checklist:id_checklist},
      dataType: 'json',
      success: function(data){
        var categoria_comp="";
        var categoria="";
        var array=Array.isArray(data);
        $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-motorcycle"></i> Moto: '+nombre_moto+'<h3></div></div>');
        if(array==true){
          for(var i=0; i < data.length; i++){
            categoria=data[i].categoria;
            if (categoria!=categoria_comp){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
            }
            if(data[i].estatus=='1'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="moto_'+data[i].id_catalogo+'"><option value="1" class="bueno" selected>BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_moto_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }else if(data[i].estatus=='2'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="moto_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular" selected>REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_moto_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }if(data[i].estatus=='3'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="moto_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo" selected>MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_moto_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }
            categoria_comp=data[i].categoria;
          }
          $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="moto_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="moto_ll2"></div></div></div>');
          $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/moto.png"></div>');        
          $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="moto_observaciones"></textarea></div>');
          $.ajax({
            url:"php/cargar_formulario_llantas.php",
            method:"POST",
            data:{id_checklist:id_checklist, tipo:'2'},
            dataType: 'json',
            success: function(data){
              var array=Array.isArray(data);
              if(array==true){
                for(var i=0; i < data.length; i++){
                  $("#moto_ll1").val(data[i].ll1);
                  $("#moto_ll2").val(data[i].ll2);
                  $("#moto_observaciones").val(data[i].observaciones);
                }
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
            }
          })
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
      }
    })
  }

  if(id_montacargas>0){
    $.ajax({
      url:"php/cargar_formulario_checklistE.php",
      method:"POST",
      data:{tipo: '3', id_checklist:id_checklist},
      dataType: 'json',
      success: function(data){
        var categoria_comp="";
        var categoria="";
        var array=Array.isArray(data);
        $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-snowplow"></i> Montacargas: '+nombre_montacargas+'<h3></div></div>');
        if(array==true){
          for(var i=0; i < data.length; i++){
            categoria=data[i].categoria;
            if (categoria!=categoria_comp){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
            }
            if(data[i].estatus=='1'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="montacargas_'+data[i].id_catalogo+'"><option value="1" class="bueno" selected>BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_montacargas_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }else if(data[i].estatus=='2'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="montacargas_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular" selected>REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_montacargas_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }if(data[i].estatus=='3'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="montacargas_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo" selected>MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_montacargas_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }
            categoria_comp=data[i].categoria;
          }
          $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="montacargas_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="montacargas_ll2"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="3" id="montacargas_ll3"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="4" id="montacargas_ll4"></div></div></div>');
          $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/montacargas.png"></div>');        
          $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="montacargas_observaciones"></textarea></div>');
          $.ajax({
            url:"php/cargar_formulario_llantas.php",
            method:"POST",
            data:{id_checklist:id_checklist, tipo:'3'},
            dataType: 'json',
            success: function(data){
              var array=Array.isArray(data);
              if(array==true){
                for(var i=0; i < data.length; i++){
                  $("#montacargas_ll1").val(data[i].ll1);
                  $("#montacargas_ll2").val(data[i].ll2);
                  $("#montacargas_ll3").val(data[i].ll3);
                  $("#montacargas_ll4").val(data[i].ll4);
                  $("#montacargas_observaciones").val(data[i].observaciones);
                }
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
            }
          })
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
      }
    })
  }

  if(id_dolly>0){
    $.ajax({
      url:"php/cargar_formulario_checklistE.php",
      method:"POST",
      data:{tipo: '4', id_checklist:id_checklist},
      dataType: 'json',
      success: function(data){
        var categoria_comp="";
        var categoria="";
        var array=Array.isArray(data);
        $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-truck-loading"></i> Dolly: '+nombre_dolly+'<h3></div></div>');
        if(array==true){
          for(var i=0; i < data.length; i++){
            categoria=data[i].categoria;
            if (categoria!=categoria_comp){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
            }
            if(data[i].estatus=='1'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="dolly_'+data[i].id_catalogo+'"><option value="1" class="bueno" selected>BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_dolly_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }else if(data[i].estatus=='2'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="dolly_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular" selected>REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_dolly_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }if(data[i].estatus=='3'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="dolly_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo" selected>MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_dolly_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }
            categoria_comp=data[i].categoria;
          }
          $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="dolly_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="dolly_ll2"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="3" id="dolly_ll3"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="4" id="dolly_ll4"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="5" id="dolly_ll5"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="6" id="dolly_ll6"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="7" id="dolly_ll7"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="8" id="dolly_ll8"></div></div></div>');
          $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/dolly.png"></div>');        
          $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="dolly_observaciones"></textarea></div>');
          $.ajax({
            url:"php/cargar_formulario_llantas.php",
            method:"POST",
            data:{id_checklist:id_checklist, tipo:'4'},
            dataType: 'json',
            success: function(data){
              var array=Array.isArray(data);
              if(array==true){
                for(var i=0; i < data.length; i++){
                  $("#dolly_ll1").val(data[i].ll1);
                  $("#dolly_ll2").val(data[i].ll2);
                  $("#dolly_ll3").val(data[i].ll3);
                  $("#dolly_ll4").val(data[i].ll4);
                  $("#dolly_ll5").val(data[i].ll5);
                  $("#dolly_ll6").val(data[i].ll6);
                  $("#dolly_ll7").val(data[i].ll7);
                  $("#dolly_ll8").val(data[i].ll8);
                  $("#dolly_observaciones").val(data[i].observaciones);
                }
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
            }
          })
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
      }
    })
  }

  if(id_chasis>0){
    $.ajax({
      url:"php/cargar_formulario_checklistE.php",
      method:"POST",
      data:{tipo: '5', id_checklist:id_checklist},
      dataType: 'json',
      success: function(data){
        var categoria_comp="";
        var categoria="";
        var array=Array.isArray(data);
        $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><h3 style="color:#308ee0;"><i class="fa fa-truck-moving"></i> Chasis: '+nombre_chasis+'<h3></div></div>');
        if(array==true){
          for(var i=0; i < data.length; i++){
            categoria=data[i].categoria;
            if (categoria!=categoria_comp){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-12"><b>'+categoria+'</b></div><div class="form-group col-sm-4"><p><strong>NOMBRE DEL SERVICIO</strong></p></div><div class="form-group col-sm-3"><p><strong>ESTATUS ACTUAL</strong></p></div><div class="form-group col-sm-5"><p><strong>DIAGNÓSTICO DE LA UNIDAD</strong></p></div></div>');
            }
            if(data[i].estatus=='1'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="chasis_'+data[i].id_catalogo+'"><option value="1" class="bueno" selected>BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_chasis_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }else if(data[i].estatus=='2'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="chasis_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular" selected>REGULAR</option><option value="3" class="malo">MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_chasis_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }if(data[i].estatus=='3'){
              $("#servicios").append('<div class="input-group col-sm-12"><div class="form-group col-sm-4"><p>'+data[i].nombre+'</p></div><div class="form-group col-sm-3"><select class="form-control" id="chasis_'+data[i].id_catalogo+'"><option value="1" class="bueno">BUENO</option><option value="2" class="regular">REGULAR</option><option value="3" class="malo" selected>MALO</option></select></div><div class="form-group col-sm-5"><input class="form-control" id="diagnostico_chasis_'+data[i].id_catalogo+'" placeholder="Diagnostico de '+data[i].nombre+'" value="'+data[i].diagnostico+'"></div><hr></div>');
            }
            categoria_comp=data[i].categoria;
          }
          $("#servicios").append('<div class="form-group col-sm-8"><div class="form-row"><div class="form-group col-sm-12"><b>Observaciones de llantas</b></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="1" id="chasis_ll1"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="2" id="chasis_ll2"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="3" id="chasis_ll3"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="4" id="chasis_ll4"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="5" id="chasis_ll5"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="6" id="chasis_ll6"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="7" id="chasis_ll7"></div><div class="form-group col-sm-6"><input type="text" class="form-control" placeholder="8" id="chasis_ll8"></div></div></div>');
          $("#servicios").append('<div class="form-group col-sm-4"><br><br><br><img class="img-fluid" src="../../images/llantas/chasis.png"></div>');        
          $("#servicios").append('<div class="form-group col-sm-12"><label for="input">Causas y observaciones</label><textarea class="form-control" id="chasis_observaciones"></textarea></div>');
          $.ajax({
            url:"php/cargar_formulario_llantas.php",
            method:"POST",
            data:{id_checklist:id_checklist, tipo:'5'},
            dataType: 'json',
            success: function(data){
              var array=Array.isArray(data);
              if(array==true){
                for(var i=0; i < data.length; i++){
                  $("#chasis_ll1").val(data[i].ll1);
                  $("#chasis_ll2").val(data[i].ll2);
                  $("#chasis_ll3").val(data[i].ll3);
                  $("#chasis_ll4").val(data[i].ll4);
                  $("#chasis_ll5").val(data[i].ll5);
                  $("#chasis_ll6").val(data[i].ll6);
                  $("#chasis_ll7").val(data[i].ll7);
                  $("#chasis_ll8").val(data[i].ll8);
                  $("#chasis_observaciones").val(data[i].observaciones);
                }
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
            }
          })
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error: "+jqXHR.status +" - "+textStatus +" "+errorThrown);   
      }
    })
  }

  $('#mod_viajes_checklist').modal('show');
}

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




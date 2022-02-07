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

function add_vehiculo(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var nombre =$("#nombre").val();
  var placas= $("#placas").val();
  var serie=$("#serie").val();
  var marca=$("#marca").val();
  var modelo=$("#modelo").val();
  var submarca=$("#submarca").val();
  $.ajax({
    url:"php/add_vehiculoE.php",
    method:"POST",
    data:{
      nombre:nombre, 
      placas: placas,
      serie: serie,
      marca: marca,
      submarca: submarca,
      modelo: modelo},
    success: function(data){
      if(data=="OK"){
        setTimeout('alerta_correcto("Correcto","Vehículo registrado correctamente");', timer);  
        $( "#menu-sidebar" ).load(" #menu-sidebar");
        $( "#menu-navbar" ).load(" #menu-navbar");
        $( "#tabla" ).load(" #tabla", function() {
          tabla("Listado de vehículos");
        });
      }else if(data=="DUP"){ 
        setTimeout('alerta_error("Error","Este vehículo ya se encuentra registrado");', timer);  
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
      }
    } 
  })
}

function add_moto(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var nombre =$("#nombre").val();
  var placas= $("#placas").val();
  var serie=$("#serie").val();
  var marca=$("#marca").val();
  var modelo=$("#modelo").val();
  $.ajax({
    url:"php/add_motoE.php",
    method:"POST",
    data:{nombre:nombre, 
      placas: placas,
      serie: serie,
      marca: marca,
      modelo: modelo},
    success: function(data){
      if(data=="OK"){
        setTimeout('alerta_correcto("Correcto","Motocicleta registrada correctamente");', timer);  
        $( "#menu-sidebar" ).load(" #menu-sidebar");
        $( "#menu-navbar" ).load(" #menu-navbar");
        $( "#tabla" ).load(" #tabla", function() {
          tabla("Listado de motocicletas");
        });
      }else if(data=="DUP"){ 
        setTimeout('alerta_error("Error","Esta motocicleta ya se encuentra registrada");', timer);  
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
      }
    } 
  })
}

function add_montacargas(){
    alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
    var nombre =$("#nombre").val();
    var combustible= $("#combustible option:selected").val();
    var serie=$("#serie").val();
    var marca=$("#marca").val();
    var modelo=$("#modelo").val();
              $.ajax({
            url:"php/add_montacargasE.php",
            method:"POST",
            data:{nombre:nombre, 
                  combustible: combustible,
                  serie: serie,
                  marca: marca,
                  modelo: modelo},
            success: function(data){
                if(data=="OK"){
                setTimeout('alerta_correcto("Correcto","Montacargas registrado correctamente");', timer);  
                $( "#menu-sidebar" ).load(" #menu-sidebar");
                $( "#menu-navbar" ).load(" #menu-navbar");
                $( "#tabla" ).load(" #tabla", function() {
                tabla("Listado de motocicletas");
                });
                }
                else if(data=="DUP"){ 
                setTimeout('alerta_error("Error","Este montacargas ya se encuentra registrada");', timer);  
                }
                else{
                setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer); 
                }
            } 
              })
}

function add_dolly(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var suspension= $("#suspension option:selected").val();
  var serie=$("#serie").val();
  var economico=$("#economico").val();
  var marca=$("#marca").val();
  var modelo=$("#modelo").val();
  $.ajax({
    url:"php/add_dollyE.php",
    method:"POST",
    data:{suspension: suspension,
          economico: economico,
          serie: serie,
          marca: marca,
          modelo: modelo},
    success: function(data){
      if(data=="OK"){
        setTimeout('alerta_correcto("Correcto","Dolly registrado correctamente");', timer);  
        $( "#menu-sidebar" ).load(" #menu-sidebar");
        $( "#menu-navbar" ).load(" #menu-navbar");
        $( "#tabla" ).load(" #tabla", function() {
          tabla("Listado de dolly");
        });
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
      }
    } 
  })
}

 function add_chasis(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var nombre =$("#nombre").val();
  var placas= $("#placas").val();
  var economico= $("#economico").val();
  var serie=$("#serie").val();
  var marca=$("#marca").val();
  var modelo=$("#modelo").val();
  $.ajax({
    url:"php/add_chasisE.php",
    method:"POST",
    data:{nombre:nombre, 
          economico:economico,
          placas: placas,
          serie: serie,
          marca: marca,
          modelo: modelo},
    success: function(data){
      if(data=="OK"){
        setTimeout('alerta_correcto("Correcto","Chasis registrado correctamente");', timer);  
        $( "#menu-sidebar" ).load(" #menu-sidebar");
        $( "#menu-navbar" ).load(" #menu-navbar");
        $( "#tabla" ).load(" #tabla", function() {
          tabla("Listado de chasis");
        });
      }else if(data=="DUP"){ 
        setTimeout('alerta_error("Error","Esta motocicleta ya se encuentra registrada");', timer);  
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer); 
      }
    } 
  })
}

//MODIFICAR FUNCIONES
function mod_vehiculo(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var id_m =$("#id_m").val();
  var nombre =$("#nombre_m").val();
  var placas= $("#placas_m").val();
  var serie=$("#serie_m").val();
  var marca=$("#marca_m").val();
  var modelo=$("#modelo_m").val();
  var submarca=$("#submarca_m").val();
  $.ajax({
    url:"php/mod_vehiculoE.php",
    method:"POST",
    data:{id_m: id_m,
          nombre:nombre, 
          placas: placas,
          serie: serie,
          marca: marca,
          submarca: submarca,
          modelo: modelo},
    success: function(data){
      if(data=="OK"){
        setTimeout('alerta_correcto("Correcto","Vehículo modificado correctamente");', timer);  
        $( "#menu-sidebar" ).load(" #menu-sidebar");
        $( "#menu-navbar" ).load(" #menu-navbar");
        $( "#tabla" ).load(" #tabla", function() {
          tabla("Listado de vehículos");
        });
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
      }
    } 
  })
}

function mod_moto(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var id_m =$("#id_m").val();
  var nombre =$("#nombre_m").val();
  var placas= $("#placas_m").val();
  var serie=$("#serie_m").val();
  var marca=$("#marca_m").val();
  var modelo=$("#modelo_m").val();
  $.ajax({
    url:"php/mod_motoE.php",
    method:"POST",
    data:{id_m: id_m,
          nombre:nombre, 
          placas: placas,
          serie: serie,
          marca: marca,
          modelo: modelo},
    success: function(data){
      if(data=="OK"){
        setTimeout('alerta_correcto("Correcto","Motocicleta modificada correctamente");', timer);  
        $( "#menu-sidebar" ).load(" #menu-sidebar");
        $( "#menu-navbar" ).load(" #menu-navbar");
        $( "#tabla" ).load(" #tabla", function() {
          tabla("Listado de chasis");
        });
      }
      else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
      }
    } 
  })
}

function mod_montacargas(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var id_m =$("#id_m").val();
  var nombre =$("#nombre_m").val();
  var combustible= $("#combustible_m option:selected").val();
  var serie=$("#serie_m").val();
  var marca=$("#marca_m").val();
  var modelo=$("#modelo_m").val();
  $.ajax({
    url:"php/mod_montacargasE.php",
    method:"POST",
    data:{id_m: id_m,
      nombre:nombre, 
      combustible: combustible,
      serie: serie,
      marca: marca,
      modelo: modelo},
    success: function(data){
      if(data=="OK"){
        setTimeout('alerta_correcto("Correcto","Montacargas modificado correctamente");', timer);  
        $( "#menu-sidebar" ).load(" #menu-sidebar");
        $( "#menu-navbar" ).load(" #menu-navbar");
        $( "#tabla" ).load(" #tabla", function() {
          tabla("Listado de montacargas");
        });
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
      }
    } 
  })
}

function mod_dolly(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var id_m =$("#id_m").val();
  var economico=$("#economico_m").val();
  var suspension= $("#suspension_m option:selected").val();
  var serie=$("#serie_m").val();
  var marca=$("#marca_m").val();
  var modelo=$("#modelo_m").val();
  $.ajax({
    url:"php/mod_dollyE.php",
    method:"POST",
    data:{id_m: id_m,
      economico: economico,
      suspension: suspension,
      serie: serie,
      marca: marca,
      modelo: modelo},
    success: function(data){
      if(data=="OK"){
        setTimeout('alerta_correcto("Correcto","Dolly modificado correctamente");', timer);  
        $( "#menu-sidebar" ).load(" #menu-sidebar");
        $( "#menu-navbar" ).load(" #menu-navbar");
        $( "#tabla" ).load(" #tabla", function() {
          tabla("Listado de dolly");
        });
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer); 
      }
    } 
  })
}

function mod_chasis(){
  alerta_cargando("Cargando","Por favor espere a que se ejecuten los registros");
  var id_m =$("#id_m").val();
  var economico =$("#economico_m").val();
  var nombre =$("#nombre_m").val();
  var placas= $("#placas_m").val();
  var serie=$("#serie_m").val();
  var marca=$("#marca_m").val();
  var modelo=$("#modelo_m").val();
  $.ajax({
    url:"php/mod_chasisE.php",
    method:"POST",
    data:{id_m: id_m,
      economico:economico, 
      nombre:nombre, 
      placas: placas,
      serie: serie,
      marca: marca,
      modelo: modelo},
    success: function(data){
      if(data=="OK"){
        setTimeout('alerta_correcto("Correcto","Chasis modificado correctamente");', timer);  
        $( "#menu-sidebar" ).load(" #menu-sidebar");
        $( "#menu-navbar" ).load(" #menu-navbar");
        $( "#tabla" ).load(" #tabla", function() {
          tabla("Listado de chasis");
        });
      }else{
        setTimeout('alerta_error("Error","A ocurrido un error al tratar de registrar");', timer);  
      }
    } 
  })
}

//////////////////////
$(document).ready(function () {

  $(document).on('click', '#modificar_veh',function(){
    document.getElementById("id_m").value = $(this).attr('id_unidad');
    document.getElementById("nombre_m").value = $(this).attr('nombre');
    document.getElementById("placas_m").value = $(this).attr('placas');
    document.getElementById("serie_m").value = $(this).attr('serie');
    document.getElementById("marca_m").value = $(this).attr('marca');
    document.getElementById("submarca_m").value = $(this).attr('submarca');
    document.getElementById("modelo_m").value = $(this).attr('modelo'); 
  }); 

  $(document).on('click', '#modificar_mot',function(){
    document.getElementById("id_m").value = $(this).attr('id_moto');
    document.getElementById("nombre_m").value = $(this).attr('nombre');
    document.getElementById("placas_m").value = $(this).attr('placas');
    document.getElementById("serie_m").value = $(this).attr('serie');
    document.getElementById("marca_m").value = $(this).attr('marca');
    document.getElementById("modelo_m").value = $(this).attr('modelo');                 
  }); 

  $(document).on('click', '#modificar_mon',function(){
    document.getElementById("id_m").value = $(this).attr('id_montacargas');
    document.getElementById("nombre_m").value = $(this).attr('nombre');
    document.getElementById("combustible_m").value = $(this).attr('combustible');
    document.getElementById("serie_m").value = $(this).attr('serie');
    document.getElementById("marca_m").value = $(this).attr('marca');
    document.getElementById("modelo_m").value = $(this).attr('modelo');        
  });

  $(document).on('click', '#modificar_dol',function(){
    document.getElementById("id_m").value = $(this).attr('id_dolly');
    document.getElementById("economico_m").value = $(this).attr('economico');
    document.getElementById("suspension_m").value = $(this).attr('suspension');
    document.getElementById("serie_m").value = $(this).attr('serie');
    document.getElementById("marca_m").value = $(this).attr('marca');
    document.getElementById("modelo_m").value = $(this).attr('modelo');        
  });

  $(document).on('click', '#modificar_cha',function(){
  document.getElementById("id_m").value = $(this).attr('id_chasis');
    document.getElementById("economico_m").value = $(this).attr('economico');
    document.getElementById("nombre_m").value = $(this).attr('nombre');
    document.getElementById("placas_m").value = $(this).attr('placas');
    document.getElementById("serie_m").value = $(this).attr('serie');
    document.getElementById("marca_m").value = $(this).attr('marca');
    document.getElementById("modelo_m").value = $(this).attr('modelo');        
  });

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

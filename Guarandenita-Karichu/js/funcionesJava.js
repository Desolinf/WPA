//---------------------------- Funciones login ---------------------------------------------
function validar() {
  var cad = document.getElementById("user").value.trim();
  var total = 0;
  var longitud = cad.length;
  var longcheck = longitud - 1;

  if (cad !== "" && longitud === 10){
    for(i = 0; i < longcheck; i++){
      if (i%2 === 0) {
        var aux = cad.charAt(i) * 2;
        if (aux > 9) aux -= 9;
        total += aux;
      } else {
        total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
      }
    }

    total = total % 10 ? 10 - total % 10 : 0;

    if (cad.charAt(longitud-1) == total) {
      document.getElementById("salida").innerHTML = ("");
    }else{
      document.getElementById("salida").innerHTML = ("El número de cédula no existe");
    }
  }
}
//-------------------------- Coincidir contraseña ---------------------------------------------
function coincidir(){
  var p1 = document.getElementById("password").value;
  var p2 = document.getElementById("password1").value;
  if (p1 != p2) {
    document.getElementById("salida1").innerHTML = ("Las contraseñas deben de coincidir");
  }
  else{
    document.getElementById("salida1").innerHTML = (" ");
  }
}
//---------------- Validar campos de texto para solo números ------------------------------------
function validaNumericos(event) {
  if((event.charCode >= 48 && event.charCode <= 57) && (key==8))  { //no funciona el borrado en retroceso
    return true;
  }
  return false;        
}
//+++++++++++++++++++++++++++++++++++FUNCIONES DE ADMINISTRADOR ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//------------------------------- Pasar datos de Administrador a Base de datos ----------------
$(document).ready(function(){
    $("#registroAdministrador").submit(insertarAdministrador)
      function insertarAdministrador(e){
        e.preventDefault()
        var datosAdmin= new FormData($("#registroAdministrador")[0])
        $("#respuesta").html("<img src='images/cargando.gif' style='width:20px; height:20px;'>")
        $.ajax({
          url: 'php/agregarAdministrador.php',
          type: 'POST',
          data: datosAdmin,
          contentType: false,
          processData: false,
          success: function(datosAdmin){
            $("#respuesta").html(datosAdmin)
            //$("form input[type=text]").each(function() { this.value = '' });
          }
        })
    }
    //-----------------------Paso de datos al servidor de Ingreso de Locales de servicios----------------------
    $("#datosLocalServicio").submit(insertarLocal)
      function insertarLocal(e){
        e.preventDefault()
        var datos= new FormData($("#datosLocalServicio")[0])
        $("#respuesta").html("<img src='images/cargando.gif' style='width:20px; height:20px;'>")
        $.ajax({
          url: 'php/agregarLocales.php',
          type: 'POST',
          data: datos,
          contentType: false,
          processData: false,
          success: function(datos){
            $("#respuesta").html(datos)
            //$("form input[type=text]").each(function() { this.value = '' });
          }
        })
    }

//----------------------------- Paso de datos de Edicion Datos servicio -----------------------------
$("#datosLocalServicioE").submit(editarLocal)
      function editarLocal(e){
        e.preventDefault()
        var datosLocalE= new FormData($("#datosLocalServicioE")[0])
        $("#respuesta").html("<img src='images/cargando.gif' style='width:20px; height:20px;'>")
        $.ajax({
          url: 'php/agregarLocalesE.php',
          type: 'POST',
          data: datosLocalE,
          contentType: false,
          processData: false,
          success: function(datosLocalE){
            $("#respuesta").html(datosLocalE)
          }
        })
    }

//----------------------- Paso de datos para iniciar sesión Administrador

    $("#iniciarSesionAdministrador").submit(iniciarSesionAdmin)
      function iniciarSesionAdmin(e){
        e.preventDefault()
        var datosInicio= new FormData($("#iniciarSesionAdministrador")[0])
        $("#respuesta1").html("<img src='images/cargando.gif' style='width:20px; height:20px;'>")
        $.ajax({
          url: 'php/iniciarSesionAdministrador.php',
          type: 'POST',
          data: datosInicio,
          contentType: false,
          processData: false,
          success: function(datosInicio){
            $("#respuesta1").html(datosInicio)
            //$("form input[type=text]").each(function() { this.value = '' });
          }
        })
    }
// **************** funcion para agregar datos de los  Servicios********************************+
    $("#datosServiciosAgregar").submit(insertarServicios)
      function insertarServicios(e){
        e.preventDefault()
        var datosServicios= new FormData($("#datosServiciosAgregar")[0])
        $("#respuesta").html("<img src='images/cargando.gif' style='width:20px; height:20px;'>")
        $.ajax({
          url: 'php/agregarServicios.php',
          type: 'POST',
          data: datosServicios,
          contentType: false,
          processData: false,
          success: function(datosServicios){
            $("#respuesta").html(datosServicios)
            //$("form input[type=text]").each(function() { this.value = '' });
          }
        })
    }

    //Validar que el logo sea png
    $("#logoServicio").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/png"];
        if(!((imagefile==match[0]))){
            alert('Porfavor seleccione un archivo de tipo: (PNG).');
            $("#logoServicio").val('');
            return false;
        }
    });
    //Validar que el logo sea png/jpeg/jpg/GIF
    $("#file").change(function() {
        var file1 = this.files[0];
        var imagefile = file1.type;
         var match= ["image/jpeg","image/png","image/jpg","image/gif"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])|| (imagefile==match[3]))){
            alert('Porfavor seleccione un formato de imágen válido (JPEG/JPG/PNG/GIF).');
            $("#file").val('');
            return false;
        }
    });
});
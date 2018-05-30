$(function(){
  $(document).ready(function(){
    $('.modal').modal();
    $('select').material_select();
  });
var base_url = "http://localhost/Estacionamiento-Proyecto/";

$("#bt_login").click(function (e){

var rut = $("#rut_login").val();
var clave = $("#clave_login").val();

if (rut =="" || clave=="") {
  Materialize.toast("complete los campos","4000");
} else {
  $.ajax({
    url: base_url + 'login',
    type: 'post',
    dataType: 'json',
    data: {
      rut: rut,
      clave: clave
    },
    success:function (o){
      Materialize.toast(o.msg,"4000");
      if (o.msg == "administrador") {
      window.location = "adminIndex"
      }


    },
    error: function(){
      Materialize.toast("error 500","4000");
    }
   

  })
  
}

});

});
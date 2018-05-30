$(function () {
	$(document).ready(function () {
		$('.modal').modal();
    $('select').material_select();
    cargarCondominio("#condominio_reg");
   

	});
	var base_url = "http://localhost/Estacionamiento-Proyecto/";


	// =================== login navbar =================================
	$("#bt_login").click(function (e) {

		var rut = $("#rut_login").val();
		var clave = $("#clave_login").val();

		if (rut == "" || clave == "") {
			Materialize.toast("complete los campos", "4000");
		} else {
			$.ajax({
				url: base_url + 'login',
				type: 'post',
				dataType: 'json',
				data: {
					rut: rut,
					clave: clave
				},
				success: function (o) {
					Materialize.toast(o.msg, "4000");
					if (o.msg == "administrador") {
						window.location = "adminIndex"
					}


				},
				error: function () {
					Materialize.toast("error 500", "4000");
				}


			})

		}

	});
	// ===================== fin  =================================
	// =================== mostrar personal =================================
	personal();

	function personal() {
		$("#bodypersonal").empty();
		var url = base_url + "personal";
		$.getJSON(url, function (result) {
			$("#bodypersonal").empty();
			$.each(result, function (i, o) {
				var row = "<tr>";
				row += "<td>" + o.rut + "</td>";
				row += "<td>" + o.nombre + "</td>";
				row += "<td>" + o.apellido + "</td>";
				row += "<td>" + o.direccion + "</td>";
				row += "<td>" + o.tipo + "</td>";
				row += "<td><a id='boton_editar_personal' class='btn-floating waves-effect'><i class='material-icons'>edit</i></a></td>";
				row += "<td><a id='boton_eliminar_personal' class='btn-floating waves-effect red'><i class='material-icons'>edit</i></a></td>";
				row += "</tr>";
				$("#bodypersonal").append(row);
			});
		});
	}

  // =================== fin personal =================================
  // =================== cargar condominios ===========================
  function cargarCondominio(){
    var url = base_url+"condominios";
    $.getJSON(url,function(result){
     $.each(result,function(i,o){
				$("#condominio_reg").append(new Option(o.nombre,o.rut));
				$('select').material_select();
       
   });
    });

  }
	// =======================       fin Condominios      ==========================
	// ====================== registrar   ========================================
$("#btn_registrar").click(function(e){

	var rut =$("#rut_registrar").val();
	var nombre =$("#nombre_registrar").val();
	var apellido =$("#apellido_registrar").val();
	var direccion =$("#direccion_registrar").val();
	var clave =$("#clave_registrar").val();
	var confirmarclave =$("#confirmaclave_registrar").val();
	var tipo =$("#tipo_registrar").val();
	var condominio =$("#condominio_reg").val();
if (rut=="" || nombre=="" || apellido=="" || clave =="" || confirmarclave=="" ||tipo==""||condominio=="" ) {
	Materialize.toast("complete los campos","4000")

} else {
	if (clave==confirmarclave) {

			$.ajax({
			url: base_url+"registrarPersonal",
			type: 'post',
			dataType:'json',
			data:{
				rut: rut,
				nombre:nombre,
				apellido:apellido,
				direccion:direccion,
				clave:clave,
				tipo:tipo,
				condominio:condominio,
			},
			
			success: function(o){
				Materialize.toast(o.msg,"4000");
			},
			error: function(){
				Materialize.toast("error 500","40000");
			}
		});
	
	} else {
		Materialize.toast("claves no igual","4000");
	}
	
}
	
	
	

});

//==================================================================

});

jQuery(document).ready(function($) {
	$('#ok').hide('slow/400/fast', function() {});


$("#formsendmail").validate({
        rules: {
            name: { required: true, minlength: 3},
            email: { required:true, email: true},
            website: { required: false},
            textarea: { required:true, minlength: 2}
        },
        messages: {
            name: "Debe introducir su nombre.",
            email: "Debe introducir su email correctamente.",
            textarea : "El mensaje es muy corto, sientase libre de escribirnos",
        },
        submitHandler: function(form){
            //var dataString = 'name='+$('#name').val()+'&email='+$('#email').val()+'&website='+$('#website').val()+'&textarea='+$('#textarea').val()+'...';
            var datos={name:$('#name').val(),email:$('#email').val(),website:$('#website').val(),textarea:$('#textarea').val()}

            $.ajax({
                type: "POST",
                url:"../send.php",
                //data: dataString,
                data: datos,
                //dataType: "json",
                success: function(data){
                	console.log(data);
                    $("#ok").html(data);
                    $("#ok").show();
                    $("#formsendmail").hide('slow/800/fast', function() {});;
                }
            });
        }
    });



});



























/*



jQuery(document).ready(function() {
	$('#formsendmail').bootstrapValidator({
		 message: 'Este valor no es valido',
		 feedbackIcons: {
			 valid: 'glyphicon glyphicon-ok',
			 invalid: 'glyphicon glyphicon-remove',
			 validating: 'glyphicon glyphicon-refresh'
		 },
		 fields: {
			 name: {
				 validators: {
					 notEmpty: {message: 'El nombre es necesario'},
					 stringLength:{min:3, message:'es un nombre muy corto'}
				 }
			 },
			 email: {
				 validators: {
					 notEmpty: {message: 'el correo es necesario'},
					 emailAddress: {message:'El correo no es valido'}
				 }
			 },
			 textarea: {
				 validators: {
					 notEmpty: {message: 'El mensaje es necesario'},
					 stringLength:{min:10, message:'es un mensaje muy corto'}
				 }
			 }
		 }
	});

	$("#btnsendmail").click(function() {
		$("#btnsendmail").hide();
	});




});




$(document).ready(function () {
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $(".boton").click(function (){
        $(".error").remove();
        if( $(".nombre").val() == "" ){
            $(".nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
            return false;
        }else if( $(".email").val() == "" || !emailreg.test($(".email").val()) ){
            $(".email").focus().after("<span class='error'>Ingrese un email correcto</span>");
            return false;
        }else if( $(".asunto").val() == ""){
            $(".asunto").focus().after("<span class='error'>Ingrese un asunto</span>");
            return false;
        }else if( $(".mensaje").val() == "" ){
            $(".mensaje").focus().after("<span class='error'>Ingrese un mensaje</span>");
            return false;
        }
    });
    $(".nombre, .asunto, .mensaje").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });
    $(".email").keyup(function(){
        if( $(this).val() != "" && emailreg.test($(this).val())){
            $(".error").fadeOut();
            return false;
        }
    });
});


jQuery(document).ready(function() {
	var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

	$(".name, .email, .website").keyup(function(){
    if( $(this).val() != "" ){l
        $(".error").fadeOut();
        return false;
    }
});
$(".email").keyup(function(){
    if( $(this).val() != "" && emailreg.test($(this).val())){
        $(".error").fadeOut();
        return false;
    }
});



/*

	$("#ok").hide();

	$("#formsendmail").validate({
		rules: {
			name:{required:true, minlength:2},
			email:{required:true, email:true},
			textarea:{required:true, minlength:30}
		},
		messages:{
			name:"debes introducir un nombre valido",
			email:"no parece un email correcto, intenta nuevamente",
			textarea:"tu mensaje es algo corto escribe todo lo que gustes te aseguro lo leeremos",
		},
		submitHandler:function(form){
			var str_data='name='+$('#name').val()+'&email='+$('#email').val()+'...';
			$.ajax({
				type:"POST",
				url:"../send.php",
				data: str_data,
					success: function(data){
						$("#ok").html(data);
						$("#ok").show();
						$("#formsendmail").hide();
					}
			})
		}


	})

});

*/
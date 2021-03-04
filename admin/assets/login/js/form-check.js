$(document).ready(function(){
    jQuery.validator.addMethod("fullname", function(value, element) { 
        return this.optional( element ) || /^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$/.test( value ); 
      }, "Please enter valid full name (Johny Silverhand)");

    $('#registration').validate({
        rules:{
            email: {
                required: true
            },
            password: {
                required: true,
                minlength: 4
            },
            confirm: {
                required: true,
                equalTo: '#password'
            },
            fname: {
                required: true,
                fullname: true
            }
        },
        messages:{

            email: {
                required: 'Please enter email!',
                email: 'Please enter valid email!'
            },
            password: {
                required: 'Please enter password!'
            },
            confirm: {
                required: 'Please enter confirm password!',
                equalTo: 'Please enter the same password!'
            },
            fname: {
                required: 'Please enter Full Name'
            }
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "email" )
            {
                error.insertAfter(".input-email");
            }
            if (element.attr("name") == "password" )
            {
                error.insertAfter(".input-password");
            }
            if (element.attr("name") == "confirm" )
            {
                error.insertAfter(".input-confirm");
            }
            if (element.attr("name") == "fname" )
            {
                error.insertAfter(".input-fname");
            }
        },
        submitHandler: function(form) {
            var param = {
                "username": $('#username').val(),
                "email": $('#email').val(),
                "password": $('#password').val(),
                "confirm": $('#confirm').val(),
                "fname": $('#fname').val()
            };
            $.post('program.php', param, function(data) {
                alert(data);
            });
        }
    });
  
})
   
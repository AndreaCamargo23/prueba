$("#formlogin").submit(function(e) {
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if (usuario.length == "" || password.length == "") {
        Swal.fire({
            icon: 'warning',
            title: 'Debe digitar el usuario y el password',
        });
        return false;
    } else {
        //usar ajax para enviar los datos capturados
        $.ajax({
            url: './bd/login.php',
            type: 'POST',
            datatype: 'json',
            data: { usuario: usuario, password: password },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        icon: 'error',
                        title: 'El usuario y Password incorrectos',
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'SESION INICIADA',
                        confirmButtonColor: '#E7745C',
                        confirmButtonText: 'Ingresar',
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = './vistas/pag_inicio.php';
                        }

                    });
                }
            }
        });
    }

});
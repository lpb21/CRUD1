function enviar_form() {
    var enviar = document.getElementById("enviar_dato");
    var cod_registro = document.getElementById("cod_registro").value;
    var nombre_cliente = document.getElementById("nombre_cliente").value;
    var tipo_documento = document.getElementById("tipo_documento").value;
    var direccion = document.getElementById("direccion").value;
    var telefono = document.getElementById("telefono").value;
    var correo = document.getElementById("correo").value;

    console.log(tipo_documento);

    if (cod_registro == "") {
        //swal reemplaza el alert y hace el llamado a los objetos de la libreria SweetAlert
        swal(
            "Oooops!",
            "El campo del codigo de registro no puede estar vacio",
            "error"
        );
        cod_registro.focus();
        return false;
    } else if (nombre_cliente == "") {
        swal("Oooops!", "El campo de Nombre Cliente no puede estar vacio", "error");
        nombre_cliente.focus();
        return false;
    } else if (tipo_documento == "Tipo de Documento") {
        swal(
            "Oooops!",
            "Debe selecionar una opcion en el tipo de documento",
            "error"
        );
        tipo_documento.focus();
        return false;
    } else if (direccion == "") {
        swal("Oooops!", "El campo direccion no puede estar vacio", "error");
        direccion.focus();
        return false;
    } else if (telefono == "") {
        swal("Oooops!", "El campo telefono no puede estar vacio", "error");
        telefono.focus();
        return false;
    } else if (correo == "") {
        swal("Oooops!", "El campo correo no puede estar vacio", "error");
        correo.focus();
        return false;
    } else if (correo.indexOf("@") < 1 || correo.indexOf(".") < 1) {
        swal("Oooops!", "correo invalido ", "error");
        correo.focus();
        return false;
    } else {
        cod_registro = document.formulario.cod_registro.value;
        nombre_cliente = document.formulario.nombre_cliente.value;
        tipo_documento = document.formulario.tipo_documento.value;
        direccion = document.formulario.direccion.value;
        telefono = document.formulario.telefono.value;
        correo = document.formulario.correo.value;

        console.log(tipo_documento);

        $.ajax({
            url: "insertar.php",
            method: "POST",

            data: {
                cod_registro: cod_registro,
                nombre_cliente: nombre_cliente,
                tipo_documento: tipo_documento,
                direccion: direccion,
                telefono: telefono,
                correo: correo,
            },
            success: function(response) {
                console.log(response);
                console.log(nombre_cliente);
                console.log(tipo_documento);
                console.log(direccion);
                console.log(telefono);
                console.log(correo);

                swal("success", "Datos enviados correctamente", "success");
                //sleep(1000);
                document.formulario.reset();
                //sleep(1000);
                window.location.reload();
                //window.location = 'insertar.php';
                //window.location.reload();
                //location.reload();
            },
            error: function() {
                swal("Error", "Error en el procesamiento de datos", "error");
                //window.parent.window.alert("Ha ocurrido un error en el calculo. Por favor, intenta nuevamente");
            },
        });
    }
}

//---------------------------------------Mantenimiento Usuario-------------------------------------------------//
function agregardatosusuario(nombre, pass, perfil, empleado) {

    cadena = "nombre=" + nombre +
            "&pass=" + pass +
            "&perfil=" + perfil +
            "&empleado=" + empleado ;
    $.ajax({
        type: "POST",
        url: "../../services/controller/Usuario/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../../services/components/TablaUsuario.php');               
                alertify.success("Agregado con exito :)");
            } else {
                alert("Error en la Syntaxis o Campos Vacios");
            }
        }
    }
     );

}


function agregaformusuario(datos) {
    d = datos.split('||');
    $('#idusuario').val(d[0]);
    $('#nombreu').val(d[1]);
    $('#passu').val(d[2]);
    $('#perfilu').val(d[3]);
    $('#empleadou').val(d[4]);
    $('#estadou').val(d[5]);

}



function actualizaDatosUsuario() {
    id = $('#idusuario').val();
    nombre = $('#nombreu').val();
    pass = $('#passu').val();
    perfil = $('#perfilu').val();
    empleado = $('#empleadou').val();
    estado = $('#estadou').val();

    cadena = "id=" + id +
            "&nombre=" + nombre +
            "&pass=" + pass +
            "&perfil=" + perfil +
            "&empleado=" + empleado +
            "&estado=" + estado;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Usuario/Actualizar.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
               $('#tabla').load('../../services/components/TablaUsuario.php');  
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}




function eliminarDatosUsuario(id) {

    cadena = "id=" + id;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Usuario/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
               $('#tabla').load('../../services/components/TablaUsuario.php');  
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoUsuario(id) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarDatosUsuario(id)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

function reportepdfUsuario(id){
    cadena = "id=" + id;
    window.open('../report/PDFListadodeAuditoria.php?id='+id);
}



//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Cargo-------------------------------------//
function AgregarCargo(cargo) {

    cadena = "Cargo=" + cargo;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Cargo/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../../services/components/TablaCargo.php');
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
function AgregarFrmCargo(datos) {
    d = datos.split('||');
    $('#idCargo').val(d[0]);
    $('#Cargo2').val(d[1]);
}
function ActualizarCargo() {


    idCargo = $('#idCargo').val();
    Cargo = $('#Cargo2').val();

    cadena = "idCargo=" + idCargo +
            "&Cargo=" + Cargo;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Cargo/Actualizar.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                 $('#tabla').load('../../services/components/TablaCargo.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarCargo(idCargo) {

    cadena = "idCargo=" + idCargo;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Cargo/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                 $('#tabla').load('../../services/components/TablaCargo.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoCargo(idCargo) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarCargo(idCargo)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}
//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Perfil-------------------------------------------------//

function AgregarPerfil(Perfil) {

    cadena = "Perfil=" + Perfil;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Perfil/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../../services/components/TablaPerfil.php');
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
function AgregarFrmPerfil(datos) {
    d = datos.split('||');
    $('#idPerfil').val(d[0]);
    $('#Perfil2').val(d[1]);
}

function ActualizarPerfil() {


    idPerfil = $('#idPerfil').val();
    Perfil2 = $('#Perfil2').val();

    cadena = "idPerfil=" + idPerfil +
            "&Perfil2=" + Perfil2;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Perfil/Actualizar.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                 $('#tabla').load('../../services/components/TablaPerfil.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarPerfil(idperfil) {

    cadena = "idperfil=" + idperfil;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Perfil/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                 $('#tabla').load('../../services/components/TablaPerfil.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoPerfil(idperfil) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarPerfil(idperfil)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Empleado-------------------------------------------------//

function AgregarEmpleado(nombres, apellidos, dni, celular, telefono, correo, cargo) {

    cadena = "nombres=" + nombres +
            "&apellidos=" + apellidos +
            "&dni=" + dni +
            "&celular=" + celular +
            "&telefono=" + telefono +
            "&correo=" + correo +
            "&cargo=" + cargo;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Empleado/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../../services/components/TablaEmpleado.php');
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
function AgregarFrmEmpleado(datos) {
    d = datos.split('||');
    $('#idEmpleado').val(d[0]);
    $('#Nombres2').val(d[1]);
    $('#Apellidos2').val(d[2]);
    $('#Dni2').val(d[3]);
    $('#Celular2').val(d[4]);
    $('#Telefono2').val(d[5]);
    $('#Correo2').val(d[6]);
    $('#Cargo2').val(d[7]);
}

function ActualizarEmpleado() {


    idempleado = $('#idEmpleado').val();
    nombres = $('#Nombres2').val();
    apellidos = $('#Apellidos2').val();
    dni = $('#Dni2').val();
    celular = $('#Celular2').val();
    telefono = $('#Telefono2').val();
    correo = $('#Correo2').val();
    cargo = $('#Cargo2').val();

    cadena = "idempleado=" + idempleado +
            "&nombres=" + nombres +
            "&apellidos=" + apellidos +
            "&dni=" + dni +
            "&celular=" + celular +
            "&telefono=" + telefono +
            "&correo=" + correo +
            "&cargo=" + cargo;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Empleado/Actualizar.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                  $('#tabla').load('../../services/components/TablaEmpleado.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarEmpleado(idEmpleado) {

    cadena = "idEmpleado=" + idEmpleado;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Empleado/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                  $('#tabla').load('../../services/components/TablaEmpleado.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoEmpleado(idEmpleado) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarEmpleado(idEmpleado)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}
//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Cliente-------------------------------------------------//

function AgregarCliente(Razon, Ruc, Celular, Correo, Direccion) {

    cadena = "Razon=" + Razon +
            "&Ruc=" + Ruc +
            "&Celular=" + Celular +
            "&Correo=" + Correo +
            "&Direccion=" + Direccion;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Cliente/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                 $('#tabla').load('../../services/components/TablaCliente.php');
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function AgregarFrmCliente(datos) {
    d = datos.split('||');
    $('#idCliente').val(d[0]);
    $('#Razon2').val(d[1]);
    $('#Ruc2').val(d[2]);
    $('#Celular2').val(d[3]);
    $('#Correo2').val(d[4]);
    $('#Direccion2').val(d[5]);
}

function ActualizarCliente() {


    idCliente = $('#idCliente').val();
    Razon2 = $('#Razon2').val();
    Ruc2 = $('#Ruc2').val();
    Celular2 = $('#Celular2').val();
    Correo2 = $('#Correo2').val();
    Direccion2 = $('#Direccion2').val();

    cadena = "idCliente=" + idCliente +
            "&Razon2=" + Razon2 +
            "&Ruc2=" + Ruc2 +
            "&Celular2=" + Celular2 +
            "&Correo2=" + Correo2 +
            "&Direccion2=" + Direccion2;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Cliente/Actualizar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
               $('#tabla').load('../../services/components/TablaCliente.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarCliente(idCliente) {

    cadena = "idCliente=" + idCliente;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Cliente/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) { 
                $('#tabla').load('../../services/components/TablaCliente.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoCliente(idCliente) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarCliente(idCliente)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

function reportepdfClienteEmpleado(idCliente){
    cadena = "idCliente=" + idCliente;
    window.open('../report/PDFListadoDeEmpleadosCliente.php?idCliente='+idCliente);
}




////////////////////////////////////////////////////////////////////////////////////

function AgregarEmpleadoCliente(Nombres, Apellidos, Dni, Celular, Telefono, Correo, Cliente,Perfil) {

    cadena = "Nombres=" + Nombres +
            "&Apellidos=" + Apellidos +
            "&Dni=" + Dni +
            "&Celular=" + Celular +
            "&Telefono=" + Telefono +
            "&Correo=" + Correo +
            "&Cliente=" + Cliente +
            "&Perfil=" + Perfil;

    $.ajax({
        type: "POST",
        url: "../../services/controller/EmpleadoCliente/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../../services/components/TablaEmpleadoCliente.php'); 
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function AgregarFrmEmpleadoCliente(datos) {
    d = datos.split('||');
    $('#idEmpleado').val(d[0]);
    $('#Nombres2').val(d[1]);
    $('#Apellidos2').val(d[2]);
    $('#Dni2').val(d[3]);
    $('#Celular2').val(d[4]);
    $('#Telefono2').val(d[5]);
    $('#Correo2').val(d[6]);
    $('#Cliente2').val(d[8]);
    $('#Perfil2').val(d[10]);
}

function ActualizarEmpleadoCliente() {

    idEmpleado = $('#idEmpleado').val();
    Nombres2 = $('#Nombres2').val();
    Apellidos2 = $('#Apellidos2').val();
    Dni2 = $('#Dni2').val();
    Celular2 = $('#Celular2').val();
    Telefono2 = $('#Telefono2').val();
    Correo2 = $('#Correo2').val();
    Cliente2 = $('#Cliente2').val();
    Perfil2 = $('#Perfil2').val();
   
    
    cadena ="idEmpleado=" + idEmpleado +
            "&Nombres2=" + Nombres2 +
            "&Apellidos2=" + Apellidos2 +
            "&Dni2=" + Dni2 +
            "&Celular2=" + Celular2 +
            "&Telefono2=" + Telefono2 +
            "&Correo2=" + Correo2 +
            "&Cliente2=" + Cliente2+
            "&Perfil2=" + Perfil2;

    $.ajax({
        type: "POST",
        url: "../../services/controller/EmpleadoCliente/Actualizar.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
              $('#tabla').load('../../services/components/TablaEmpleadoCliente.php'); 
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarEmpleadoCliente(idClientes_Empleados) {

    cadena = "idClientes_Empleados=" + idClientes_Empleados;

    $.ajax({
        type: "POST",
        url: "../../services/controller/EmpleadoCliente/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../../services/components/TablaEmpleadoCliente.php'); 
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoEmpleadoCliente(idClientes_Empleados) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarEmpleadoCliente(idClientes_Empleados)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Servicio-------------------------------------------------//

function AgregarServicio(Cliente, Fecha,idTecnico) {

    cadena = "Cliente=" + Cliente +
            "&Fecha=" + Fecha+
            "&idTecnico=" + idTecnico;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Servicio/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../../services/components/TablaServicio.php');
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
function AgregarFrmServicio(datos) {
    d = datos.split('||');
    $('#idServicio').val(d[0]);   
    $('#2').val(d[1]);
     $('#Clientes2').val(d[7]);
    $('#Fecha2').val(d[4]);
     $('#idTecnico2').val(d[8]);
}

function ActualizarServicios() {


    idServicio = $('#idServicio').val();
    Clientes2 = $('#Clientes2').val();
    Fecha2 = $('#Fecha2').val();
    idTecnico2 = $('#idTecnico2').val();
    

    cadena = "idServicio=" + idServicio +
            "&Clientes2=" + Clientes2 +
            "&Fecha2=" + Fecha2 +
            "&idTecnico2=" + idTecnico2;

    $.ajax({
        type: "POST",
         url: "../../services/controller/Servicio/Actualizar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../../services/components/TablaServicio.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}



function eliminarServicio(idServicio) {

    cadena = "idServicio=" + idServicio;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Servicio/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
               $('#tabla').load('../../services/components/TablaServicio.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoServicio(idServicio) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarServicio(idServicio)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}


//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Detalle Servicio-------------------------------------------------//

function AgregarDetalleServicio(idServicio, Ocurrencia,condicionstatus,idUrgencia,idTAsistencia,sessionUser) {

    cadena = "idServicio=" + idServicio +
            "&Ocurrencia=" + Ocurrencia +
	    "&condicionstatus=" +condicionstatus+
            "&idUrgencia=" + idUrgencia +
            "&idTAsistencia=" + idTAsistencia+
            "&sessionUser=" + sessionUser;

    $.ajax({
        type: "POST",
        url: "../../services/controller/DetalleServicio/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
              $('#tabla').load('../../services/components/TablaDetalleServicio.php'); 
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
function AgregarFrmDetalleServicios(datos) {
    d = datos.split('||');
    $('#idServicio').val(d[0]);
    $('#Clientes').val(d[1]);
    $('#Tecnico').val(d[7]);
}




function AgregarFrmDetalleServicio(datos) {
    d = datos.split('||');
    $('#id').val(d[9]);
    $('#idServicio3').val(d[0]);
    $('#Clientes3').val(d[2]);
    $('#Ocurrencia3').val(d[3]);
}

function ActualizarDetalleServicio() {


    id = $('#id').val();
    Ocurrencia3 = $('#Ocurrencia3').val();
    condicionstatus3 = $('#condicionstatus3').val();
    idUrgencia3 = $('#idUrgencia3').val();
    idTAsistencia3 = $('#idTAsistencia3').val();
    sessionUser2 = $('#sessionUser2').val();
    
    cadena = "id=" + id +
            "&Ocurrencia3=" + Ocurrencia3 +
            "&condicionstatus3=" + condicionstatus3 + 
            "&idUrgencia3=" + idUrgencia3 + 
            "&idTAsistencia3=" + idTAsistencia3+
            "&sessionUser2=" + sessionUser2 ;

    $.ajax({
        type: "POST",
         url: "../../services/controller/DetalleServicio/Actualizar.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                  $('#tabla').load('../../services/components/TablaDetalleServicio.php');  
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarDetalleServicio(id) {

    cadena = "id=" + id;

    $.ajax({
        type: "POST",
         url: "../../services/controller/DetalleServicio/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                  $('#tabla').load('../../services/components/TablaDetalleServicio.php');  
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoDetalleServicio(id) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarDetalleServicio(id)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

function reportepdfAuditoriaDetalle(id){
    cadena = "id=" + id;
    window.open('../report/PDFAuditoriaDetalle.php?id='+id);
}


function reportepdf(id){
    cadena = "id=" + id;
    window.open('/ErpRemain/WebSite/Vista/DetalleServicio.php?id='+id);
}

//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Tecnicos-------------------------------------------------//

function AgregarTecnico(nombres, apellidos, dni) {

    cadena = "nombres=" + nombres +
            "&apellidos=" + apellidos +
            "&dni=" + dni;

    $.ajax({
        type: "POST",
        url: "/ErpRemain/WebSite/Servicios/Controlador/Tecnico/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('/ErpRemain/WebSite/Servicios/Componentes/TablaTecnicos.php');
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
function AgregarFrmTecnico(datos) {
    d = datos.split('||');
    $('#idTecnicos').val(d[0]);
    $('#Nombres2').val(d[1]);
    $('#Apellidos2').val(d[2]);
    $('#Dni2').val(d[3]);

}

function ActualizarTecnico() {


    idTecnicos = $('#idTecnicos').val();
    nombres = $('#Nombres2').val();
    apellidos = $('#Apellidos2').val();
    dni = $('#Dni2').val();

    cadena = "idTecnicos=" + idTecnicos +
            "&nombres=" + nombres +
            "&apellidos=" + apellidos +
            "&dni=" + dni ;

    $.ajax({
        type: "POST",
        url: "/ErpRemain/WebSite/Servicios/Controlador/Tecnico/Actualizar.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                $('#tabla').load('/ErpRemain/WebSite/Servicios/Componentes/TablaTecnicos.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarTecnico(idTecnicos) {

    cadena = "idTecnicos=" + idTecnicos;

    $.ajax({
        type: "POST",
        url: "/ErpRemain/WebSite/Servicios/Controlador/Tecnico/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('/ErpRemain/WebSite/Servicios/componentes/TablaTecnicos.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoTecnico(idTecnicos) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarTecnico(idTecnicos)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Tecnicos-------------------------------------------------//
function AgregarConclusion(idServicio, Comentario) {

    cadena = "idServicio=" + idServicio +
            "&Comentario=" + Comentario;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Conclusion/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                $('#tabla').load('../../services/components/TablaConclusion.php');
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function AgregarFrmConclusiones(datos) {
    d = datos.split('||');
    $('#idConclusion').val(d[0]);
    $('#idServicio2').val(d[1]);
    $('#Comentario2').val(d[2]);
}

function AgregarFrmConclusion(datos) {
    d = datos.split('||');
    $('#idServicio').val(d[0]);
    $('#Tecnico').val(d[1]);
}



function ActualizarConclusion() {


    idConclusion = $('#idConclusion').val();
    idServicio2 = $('#idServicio2').val();
    Comentario2 = $('#Comentario2').val();
   

    cadena = "idConclusion=" + idConclusion +
            "&idServicio2=" + idServicio2 +
            "&Comentario2=" + Comentario2;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Conclusion/Actualizar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                 $('#tabla').load('../../services/components/TablaConclusion.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
function eliminarConclusion(idConclusion) {

    cadena = "idConclusion=" + idConclusion;

    $.ajax({
        type: "POST",
        url: "../../services/controller/Conclusion/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                 $('#tabla').load('../../services/components/TablaConclusion.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoConclusion(idConclusion) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarConclusion(idConclusion)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}
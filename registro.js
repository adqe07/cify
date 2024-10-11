window.addEventListener('load', inicializarEventos, false);

function inicializarEventos(e) {
    var formulario=document.getElementById('form');
    formulario.addEventListener('submit', validadFormulario, false);

    var nombre=document.getElementById('nombre');
    var apellidos=document.getElementById('apellidos');

    nombre.addEventListener('keypress', teclas, false);
    apellidos.addEventListener('keypress', teclas, false);

    var formulario2=document.getElementById('form2');
    formulario2.addEventListener('submit',validarFormulario2, false);
}

function validadFormulario(e) {
    var nombre=document.getElementById('nombre').value;
    var apellidos=document.getElementById('apellidos').value;
    var usuario=document.getElementById('usuario').value;
    var correo=document.getElementById('correo').value;
    var contraseña=document.getElementById('contraseña').value;
    var contraseña2=document.getElementById('contraseña2').value;
    
    var expReg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    var esValido=expReg.test(correo);

    //Condiciones

    if (nombre=='') {
        e.preventDefault();
        alert('Introduce tu nombre');
    }
    else if (apellidos=='') {
        e.preventDefault();
        alert('Introduce tus apellidos');
    }
    else if (usuario=='') {
        e.preventDefault();
        alert('Introduce un usuario');
    }

    else if (correo=='') {
        e.preventDefault();
        alert('Introduce un correo');
    }

    else if (!esValido) {
        e.preventDefault();
        alert('Introduce un correo valido');
    }

    else if (contraseña=='') {
        e.preventDefault();
        alert('Introduce una contraseña');
    }

    else if (contraseña2=='') {
        e.preventDefault();
        alert('Confirma tu contraseña');
    }

    //Validar correo y contraseñas

    

    else if (contraseña != contraseña2) {
        e.preventDefault();
        alert('Las contraseñas no coinciden');
    }
}

function teclas(e) {
    var tecla=e.which;

    if (tecla==65 || tecla==32 || tecla==97 || tecla==98 || tecla==99 || tecla==100 || tecla==101 ||tecla==102 ||tecla==103 ||tecla==104 ||tecla==105 ||tecla==106 ||tecla==107 ||tecla==108 ||tecla==109 ||tecla==110 ||tecla==111 ||tecla==112 ||tecla==113 ||tecla==114 ||tecla==115 ||tecla==116 ||tecla==117 ||tecla==118 ||tecla==119 ||tecla==120 ||tecla==121 ||tecla==122 || tecla==65 || tecla==66 ||tecla==67 ||tecla==68 ||tecla==69 ||tecla==70 ||tecla==71 ||tecla==72 ||tecla==73 ||tecla==74 ||tecla==75 ||tecla==76 ||tecla==77 ||tecla==78 ||tecla==79 ||tecla==80 ||tecla==81 ||tecla==82 ||tecla==83 ||tecla==84 ||tecla==85 ||tecla==86 ||tecla==87 ||tecla==88 ||tecla==89 ||tecla==90 ) {
        
    }
    else {
        e.preventDefault();
        alert('No se permiten caracteres especiales');
    }
}

function validarFormulario2(e) {
    var correo=document.getElementById('correo').value;
    var contraseña=document.getElementById('contraseña').value;

    var expReg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    var esValido=expReg.test(correo);

    if (correo=='') {
        e.preventDefault();
        alert('Introduce un correo');
    }

    else if (!expReg) {
        e.preventDefault();
        alert('Introduce un correo valido');
    }

    else if (contraseña=='') {
        e.preventDefault();
        alert('Introduce tu contraseña');
    }
}
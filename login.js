window-addEventListener('load', inicializarEventos, false);

function inicializarEventos(e) {
    var formulario=document.getElementById('form2');
    formulario.addEventListener('submit',validarFormulario2,false);
}

function validarFormulario2(e) {
    var correo2=document.getElementById('correo').value;
    contraseña2=document.getElementById('contraseña').value;
    
    var expReg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    var esValido=expReg.test(correo2);

    if (correo2=='') {
        e.preventDefault();
        alert('Introducte tu correo');
    }

    else if (!esValido) {
        e.preventDefault();
        alert('Introduce un correo valido');
    }

    else if (contraseña2=='') {
        e.preventDefault();
        alert('Introduce tu contraseña');
    }
}
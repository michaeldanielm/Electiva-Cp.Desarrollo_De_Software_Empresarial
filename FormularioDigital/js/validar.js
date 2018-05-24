function validar() {

    var nit, nombre, direccion, telefono, correo, mision, vision, expresion;
    
    nit = document.getElementById("nit").value;
    nombre = document.getElementById("nom").value;    
    direccion = document.getElementById("dir").value;
    telefono = document.getElementById("tel").value;
    correo = document.getElementById("corr").value;
    mision = document.getElementById("mis").value;
    vision = document.getElementById("vis").value;
    
    expresion = /\w+@\w+\.+[a-z]/;
    
    if (nit.length > 11) {
        alert('El nit es muy largo');
        return false;
    }
    else if (nombre.length > 50) {
        alert('El nombre es muy largo');
        return false;
    }
    else if (direccion.length > 25) {
        alert('La direccion es muy larga');
        return false;
    }
    else if (telefono.length > 16) {
        alert('El telefono es muy largo');
        return false;
    }
    else if (correo.length > 25) {
        alert('El correo es muy largo');
        return false;
    }
    else if (mision.length > 200) {
        alert('La mision es muy larga');
        return false;
    }
    else if (vision.length > 200) {
        alert('La vision es muy larga');
        return false;
    }
    else if(isNaN(nit)){
        alert("El nit ingresado no es un numero");
        return false;
    }
    else if(isNaN(telefono)){
        alert("El telefono ingresado no es un numero");
        return false;
    }
    else if(!expresion.test(correo)){
        alert('El correo no es valido');
        return false;
    }
}
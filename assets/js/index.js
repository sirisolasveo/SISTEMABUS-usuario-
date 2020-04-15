    function comprobarClave() {
        clave1 = document.getElementById('pass_1').value;
        clave2 = document.getElementById('pass_2').value;
        if (clave1 == clave2) {
            alert("Creando cuenta.....")
            return true;
        } else {
            alert("Las contraseñas no son iguales...")
            return false;
        }
    }
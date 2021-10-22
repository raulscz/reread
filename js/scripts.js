function validar() {
    //alert("Hola, todo bien");
    mail = document.getElementById('email').value
    pass = document.getElementById('password').value

    if (mail == '' && pass == '') {
        //alert('Campo email y password obligatorios')
        mensaje.innerHTML = 'Campo email y password obligatorios'
        return false
    } else if (mail == '') {
        mensaje.innerHTML = 'Campo email obligatorio'
            //alert('Campo email obligatorio')
        return false
    } else if (pass == '') {
        //alert('Campo password obligatorio')
        mensaje.innerHTML = 'Campo password obligatorio'
        return false
    } else {
        return true
    }
}
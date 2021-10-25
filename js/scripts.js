function validar() {
    //alert("Hola, todo bien");
    let mail = document.getElementById('email'),
        pass = document.getElementById('password');

    if (mail.value == '' && pass.value == '') {
        //alert('Campo email y password obligatorios')
        mensaje.innerHTML = 'Campo email y password obligatorios';
        mail.className = "rojo ";
        pass.className = "rojo ";
        return false
    } else if (mail.value == '') {
        mensaje.innerHTML = 'Campo email obligatorio';
        mail.className = "rojo ";
        pass.className = "";
        //alert('Campo email obligatorio')
        return false
    } else if (pass.value == '') {
        //alert('Campo password obligatorio')
        mensaje.innerHTML = 'Campo password obligatorio';
        pass.className = "rojo ";
        mail.className = "";
        return false
    } else {
        return true
    }
}
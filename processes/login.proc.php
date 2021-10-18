<?php
// 1. Conexión con la base de datos	
include '../services/connection.php';

$email=$_REQUEST['email'];
$psswd=$_REQUEST['password'];

$email=mysqli_real_escape_string($conn,$email);

$user = mysqli_query($conn,"SELECT * FROM Users WHERE Email='$email' and Pass=MD5('{$psswd}')");
$username = mysqli_query($conn,"SELECT Users.Name FROM Users WHERE Email='$email' and Pass=MD5('{$psswd}')");

$result=mysqli_fetch_all($username);
foreach($result as $row=>$fila){
    $nombre=$fila[0];
}
if (mysqli_num_rows($user) == 1) {
    // coincidencia de credenciales
    session_start();
    $_SESSION['name']=$nombre;
    header("location: ../view/zona.admin.php");
} else {
    // usuario o contraseña erróneos
    header("location: ../view/login.html");
}

mysqli_free_result($user);
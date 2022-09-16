<?php
   session_start(); //iniciar una nueva session o reanudar la existente


$user = (!empty($_POST['user'])) ? htmlentities($_POST['user']) : '';
$pass = (isset($_POST['pass'])) ? htmlentities($_POST['pass']) : '';
 
// comprobacion de credenciales
if ($user == 'jesusito99' && $pass == '12345') {
    //almacenar datos en session
    
    $_SESSION['usuario'] = $user;
    $_SESSION['rol'] = 1;
    // redireccionar a pagina inicial
    echo "valido";
    header('Location:index.php?c=Productos&f=index');

}
else{
    var_dump ($_POST);


}

/*else if ($user == 'juan' && $pass == '123') {
    $_SESSION['usuario'] = $user;
    $_SESSION['rol'] = 2;
    // redireccionar a pagina inicial
    //header("Location:index.php");
} else {
    // eliminar una variables 
   // if(isset($_SESSION['usuario'])){
        //unset( $_SESSION['usuario']);
    //}
    // eliminar todas las variables almacenadas en session
    session_unset();
    $_SESSION['mensaje'] = "Usuario y/o contrasena incorrecta";
    // redireccionamiento
    //header("Location:login.php");
}

//var_dump($_SESSION);

/*
$opcion = (isset($_GET['op']))? htmlentities($_GET['op']):'';
if($opcion =="cerrar"){
    // eliminar todas las variables almacenadas en session
    session_unset();
    // eliminar/ destruir o la saession
    session_destroy();
    //redirijir
    header("Location:login.php");
}
*/
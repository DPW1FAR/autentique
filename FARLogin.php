<?php
# Las claves de acceso, ahorita las ponemos aquí


$user_admin="admin_ARF";
$password_admin="ES1822023250";

$user_mostrador="mostrador_ARF";
$password_mostrador="ES1822023250";
/*
Para leer los datos que fueron enviados al formulario,
accedemos al arreglo superglobal llamado $_POST en PHP, y
para obtener un valor accedemos a $_POST["clave"] en donde
clave es el "name" que le dimos al input
 */
# Nota: no estamos haciendo validaciones
$usuario = $_POST["usuario"];
$password = $_POST["password"];
# Luego de haber obtenido los valores, ya podemos comprobar:
if ($usuario === $user_mostrador && $password === $password_mostrador) {
      
    session_start();
    
    $_SESSION["usuario"] = $usuario;
    # Luego redireccionamos a la página "Operativa"
    header("Location: FAROperativa.html");



} 

if ($usuario === $user_admin && $password === $password_admin) {
   
    session_start();
    # Y guardar un valor que nos pueda decir si el usuario
    # ya ha iniciado sesión o no. En este caso es el nombre
    # de usuario
    $_SESSION["usuario"] = $usuario;
    # Luego redireccionamos a la página "Administracion"
    header("Location: FARAdmistracion.html");



} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    echo "El usuario o la contraseña son incorrectos";
}
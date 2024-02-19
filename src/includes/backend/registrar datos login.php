<?php include "conexion.php";
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave'])) {
        $alert = '<div class="alert alert-danger" role="alert">
        Todo los campos son obligatorios</div>';
    } else {
        $email = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $user = $_POST['usuario'];
        $clave = md5($_POST['clave']);
        $query = mysqli_query($conexion, "SELECT * FROM usuario where correo = '$email'");
        $result = mysqli_fetch_array($query);
        if ($result > 0) {
            $alert = include('src/includes/error/correo existente.php'); 
        } 
        else {
            $query_insert = mysqli_query($conexion, "INSERT INTO usuario(nombre,correo,usuario,clave) values ('$nombre', '$email', '$user', '$clave')");
            if ($query_insert) {
            $alert = include('src/includes/error/cuenta registrado.php'); 

            }
            else {
                $alert = include('src/includes/error/error registrado.php');
                        header("Location: registrar.php");
            }
        }
    }
}
?>
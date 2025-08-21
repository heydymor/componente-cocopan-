<?php
include("conexion.php")
if (isset($_POST['send'])){
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1 &&

    ){
      $name =trin($_POST ['name']);
      $email =trin($_POST ['email']);
      $password =trin($_POST ['password']); 
      $fecha = date("d/m/y");
      $consulta = "INSERT INTO datos(nombre, correo, contraseña, fecha)
      VALUES ('name', 'email', ''password') ";
$resultado =mysqli_query($conex,$consulta);
if ($consulta){
    ?>
    <h3 class="success">tu informacion a sido enviada </h3>
    <php
}else {
    ?>
<h3 class="error">ocurrio un error </h3>
    <?php
}
       
    }else{ ?> <h3 class="error"> llena todos los campos </h3> <php }
}
?>


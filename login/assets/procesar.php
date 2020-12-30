<?php
require 'conexion.php';
session_start();

if (isset($_POST['login'])) {

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT usuario, password FROM admin";
$result = mysqli_query($conn, $sql);

 // output data of each row
 $row = mysqli_fetch_assoc($result);
  if($row["usuario"] == $usuario && password_verify($password, $row["password"])){
  	echo'<script type="text/javascript">
    alert("nice");
    window.location.href="../index.php";
    </script>';
  }else{
  	$_SESSION["error"] = true;
  	header('Location: ../index.html');
  }

mysqli_close($conn);


}



?>
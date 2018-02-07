<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "leonardo";
$password = "1010";
$idusuario = "1";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $idusuario);

$stmt->execute();

echo "Alterado com sucesso";

 ?>
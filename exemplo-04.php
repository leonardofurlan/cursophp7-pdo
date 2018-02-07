<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$idusuario = "5";

$stmt->bindParam(":ID", $idusuario);

$stmt->execute();

echo "Apagado com sucesso";

 ?>
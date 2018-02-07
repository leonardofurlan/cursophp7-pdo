<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$idusuario = "3";

$stmt->execute(array($idusuario));

//$conn->rollback();

$conn->commit();

echo "Apagado com sucesso";

 ?>
<?php
include 'conecta.php';

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO aluno (`nome`, `email`) VALUES (:nome, :email)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);

if ($stmt->execute()) {
    echo "Dados registrados com sucesso.";
} else {
    echo "Erro ao registrar os dados.";
}
?>

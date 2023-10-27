<?php
include 'conecta.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$id = $_POST["id"];

$sql = "UPDATE aluno SET nome = :nome, email = :email WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo "Dados atualizados com sucesso.";
} else {
    echo "Erro ao atualizar os dados.";
}
?>

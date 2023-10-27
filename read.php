<?php
include 'conecta.php';

$sql= "SELECT * FROM aluno";
$exec= $pdo->query($sql);

while($reg= $exec->fetch()){

echo $reg['id'] . " - " . $reg['nome'] . " - " . $reg["email"]."</br>";
echo "[<a href=formUpdate.php?id=$reg[id]>Atualizar</a>";
echo "[<a href=delete.php?id=$reg[id]>Excluir</a>";
}

?>
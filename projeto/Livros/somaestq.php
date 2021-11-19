<<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));

$sql = mysqli_query($conexao, "select count('$nome') FROM '$nome' GROUP BY Qtd_estoque HAVING COUNT('$nome') > 1 ORDER BY COUNT('$nome') DESC");
if($sql === FALSE) {
    die(mysqli_error());
}

while ($exibe = mysqli_fetch_assoc($sql)) {
    echo "<table>"; 
    echo  "<tr><td>Nome:</td>";
    echo "<td>".$exibe["nome"]."</td></tr>";
}
mysqli_close($conexao);
?>
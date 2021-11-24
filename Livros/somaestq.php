<<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));


$query = sprintf("SELECT Nome_livro, ISBN, Autor FROM livro ");

$dados = mysql_query($query) or die(mysql_error());

$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);

?>
<html>
    <head>
    <title>Estoque</title>
</head>
<body>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
            <p><?=$linha['nome']?> </p>
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
    // fim do if
    }
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>


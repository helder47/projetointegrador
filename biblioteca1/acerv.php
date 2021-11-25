<style>
        body{
            background-image: url('salaleitura2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    

</style>

<table border = '3'>

<tr font style="text-align:center">
  <th font style="text-align:center">Código do livro</th>
  <th font style="text-align:center">Código da editora</th>
  <th font style="text-align:center">Nome do Livro </th>
  <th font style="text-align:center">Autor</th>
  <th font style="text-align:center">Categoria</th>
  <th font style="text-align:center">ISBN</th>
  <th font style="text-align:center">ANO</th>
  <th font style="text-align:center">Quantidade em estoque</th>
</tr>

<?php include("conexao.php");

$sql_tipo = "SELECT * FROM livro";
$resulta = $conexao->query($sql_tipo);

if ($resulta->num_rows > 0){

    while ( $row = $resulta->fetch_assoc()){            

        echo '<tr>';
        echo '<td>'. $row['Cód_livro'] .'</td>';
        echo '<td>'. $row['Editora_Cód_editora'] .'</td>';
        echo '<td>'. $row['Nome_livro'] .'</td>';
        echo '<td>'. $row['Autor'] .'</td>';
        echo '<td>'. $row['Categoria'] .'</td>';
        echo '<td>'. $row['ISBN'] .'</td>';
        echo '<td>'. $row['Ano'] .'</td>';
        echo '<td>'. $row['Qtd_estoque'] .'</td>';
        echo '</tr>';
    }
}
?>
</table>
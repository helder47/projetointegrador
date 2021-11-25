<style>
  body{
      background-image: url('salaleitura2.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
  }
</style>

<table border = '2'>

<tr>
  <th>Código da Editora</th>
  <th>Telefone de Contato</th>
  <th>Email</th>
  <th>Nome</th>
</tr>

<?php include("conexao.php");

$sql_tipo = "SELECT * FROM editora";
$resulta = $conexao->query($sql_tipo);

if ($resulta->num_rows > 0){

    while ( $row = $resulta->fetch_assoc()){            

        echo '<tr>';
        echo '<td>'. $row['Cód_editora'] .'</td>';
        echo '<td>'. $row['Contato'] .'</td>';
        echo '<td>'. $row['Email'] .'</td>';
        echo '<td>'. $row['Nome_editora'] .'</td>';
        echo '</tr>';
    }
}
?>
</table>
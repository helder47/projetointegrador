<?php
 // Conectando ao banco de dados:
 include_once("conexao.php");
 
 // Recebendo os dados a pesquisar
 $pesquisa = $_POST['Nome_livro'];
?>

 <html>
 <head>
 <link href="estilos.css" rel="stylesheet" type="text/css">
 <title>Resultado da pesquisa</title>
 </head>
 <body>
 
 <!-- Criando tabela e cabeçalho de dados: -->
 <table border="1" style='width:50%'>
 <tr>
 <th>NOME DO LIVRO</th>
 <th>AUTOR</th>
 <th>GENERO</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM cadastro WHERE Sexo = '$pesquisa'";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $nome = $registro['Nome_livro'];
   $autor = $registro['Autor'];
   $cat = $registro['Categoria'];
   echo "<tr>";
   echo "<td>".$nome."</td>";
   echo "<td>".$autor."</td>";
   echo "<td>".$cat."</td>";
   echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";
?>
</body>
</html>
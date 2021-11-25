<?php 
error_reporting(0);
session_start()
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="css/bulma.min.css" />
    <style>
        body{
            background-image: url('salaleitura2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <section class="">
        <div class="">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title is-block is-link is-large">Sistema de Cadastro</h1>
                    <h2 class="title is-block is-link is-large">Cadastre um novo Livro</h2>
                    <?php  
                    if($_SESSION['status_cadastro']):
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                    </div>
                    <?php 
                    endif;
                    unset($_SESSION['status_cadastro']);
                     ?>
                     <?php  
                    if($_SESSION['status_cadastro']):
                    ?>
                    <div class="notification is-info">
                        <p>O livro escolhido já existe. A quantidade determinada foi adicionada ao estoque.</p>
                    </div>
                    <<?php 
                    endif;
                    unset($_SESSION['status_cadastro']);
                     ?>
                    <div class="box">
                        <form action="cadastrarlivro.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome do Livro" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="autor" type="text" class="input is-large" placeholder="Autor">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="categoria" class="input is-large" type="text" placeholder="Categoria">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="isbn" class="input is-large" type="text" placeholder="ISBN">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="ano" class="input is-large" type="text" placeholder="Ano de Publicação">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="quantidade" class="input is-large" type="text" placeholder="Quantidade">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="codedit" class="input is-large" type="text" placeholder="Código da Editora">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
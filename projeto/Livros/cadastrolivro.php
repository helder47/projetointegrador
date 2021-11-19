<<?php 
session_start()
 ?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Livros</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <h3 class="title has-text-grey">Cadastre um novo Livro</h3>
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
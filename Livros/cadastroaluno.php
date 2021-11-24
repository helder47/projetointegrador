<<?php 
error_reporting(0);
session_start()
 ?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Aluno</title>
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
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <h3 class="title has-text-grey">Cadastre um novo aluno</h3>
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
                        <p>O aluno escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <<?php 
                    endif;
                    unset($_SESSION['status_cadastro']);
                     ?>
                    <div class="box">
                        <form action="cadastraraluno.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="telefone" type="text" class="input is-large" placeholder="Telefone">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="turma" class="input is-large" type="text" placeholder="Turma">
                                </div>
                            </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="r.a" class="input is-large" type="text" placeholder="R.A">
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
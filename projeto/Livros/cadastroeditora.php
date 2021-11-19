<<?php 
session_start()
 ?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Editora</title>
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
                    <h3 class="title has-text-grey">Cadastre uma nova editora</h3>
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
                        <p>A editora escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <<?php 
                    endif;
                    unset($_SESSION['status_cadastro']);
                     ?>
                    <div class="box">
                        <form action="cadastraeditora.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="contato" type="text" class="input is-large" placeholder="Contato">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="email" class="input is-large" type="text" placeholder="Email">
                                </div>
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
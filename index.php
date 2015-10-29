<?php
session_start();

require_once 'conexao/functionsLogin.php';

    if(isset($_POST['logar'])){
        if(logar($_POST['email'], sha1($_POST['senha']))){
            logAcesso($_SERVER['REMOTE_ADDR'], date("d/m/Y H:i:s"), $_SESSION['nomeUsuario']);
            header("Location:dashboard.php");
        }else{
            alert();
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <title>Nível Construções</title>
        <link rel="shortcut icon" href="assets/img/icone.ico" >
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="assets/css/matrix-login.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            // FUNÇÃO QUE APAGA A MENSAGEM DE ALERTA QUANDO UMA AÇÃO É REALIZADA
            jQuery(function($){
              $("#alert-message").delay(2000).fadeOut("slow", function () { $(this).remove(); })
            });
        </script>
    </head>
    <body>
        <div id="loginbox">
            
            <form  class="form-vertical" id="formLogin" method="post" action="">
                <div class="control-group normal_text">
                    <h3><img src="assets/img/logo.png" alt="Logo" /></h3>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <input id="email" style="border-radius: 3px;" required="required" name="email" type="text" placeholder="E-mail" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <input name="senha" id="senha" style="border-radius: 3px;" required="required" type="password" placeholder="Senha" />
                        </div>
                    </div>
                </div>
                <div class="form-actions" style="text-align: center">
                    <input class="btn btn-large" type="submit" name="logar" value="Entrar" style="border-radius: 4px;"/> 
                    <?php 
                        function alert(){
                            echo "<div id='alert-message' style='width:300px;' class='alert alert-danger'>
                                    <strong>Erro!</strong> E-mail ou Senha Inválidos!
                                </div>";
                        }
                    ?>
                </div>
            </form>
       
        </div>        
        
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/validate.js"></script>

    </body>

</html>
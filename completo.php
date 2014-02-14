<?php 

    if (!empty($_POST)) {
        if (!empty($_POST['nome']) || !empty($_POST['email'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            
            mail('clareanasoares@gmail.com','Hello','Testing Testing, este email eh um email de teste, enviado por:'.$nome.'do e-mail:'.$email,'From:palavraclara@gmail.com');
        }
    }

 ?>
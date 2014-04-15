<?php 

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

    if (!empty($_POST)) {

         if (!empty($_POST['nome']) || !empty($_POST['email'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            //retrieving post items:
            $cidade = $_POST['cidade'];
            $pais = $_POST['pais'];
            $referencia = $_POST['referencia'];
            $ref_outro_bx = $_POST['ref_outro_bx'];
            $social = $_POST['social'];
            $tipo_serv = $_POST['tipo_serv'];
            $prazo_transcr = $_POST['prazo_transcr'];
            $idioma = $_POST['idioma'];
            $total_minutos = $_POST['total_minutos'];
            $tipo_transcr = $_POST['tipo_transcr'];
            $prazo_trad = $_POST['prazo_trad'];
            $tipo_txt = $_POST['tipo_txt'];
            $tipo_txt_outro_bx = $_POST['tipo_txt_outro_bx'];
            $num_paginas = $_POST['num_paginas'];
            $num_palavras = $_POST['num_palavras'];
            $possui_fotos = $_POST['possui_fotos'];

            date_default_timezone_set('America/Sao_Paulo');

            $date = date("m/d/y");
            
            $to = "palavraclara@gmail.com, $email";
            $subject = "[Orçamento] - $nome ( $date )";
            
            //falta ver que campos vêm de acordo com o tipo selecionado de serviço.
            
            $message = '<html><body>';
            $message .= '<img src="http://palavraclara.96.lt/img/palavra_clara.png" alt="Palavra Clara" /> <img src="http://palavraclara.96.lt/img/mini_logo.png" alt="Logo">';
            $message .= '<img src="http://palavraclara.96.lt/img/cabecalho_email.png" alt="Orçamento" />';
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: #fee;'><td><strong>Serviço Solicitado:</strong> </td><td>" . $tipo_serv . "</td></tr>";
            $message .= "<tr style='background: #eee;'><td><strong>Nome:</strong> </td><td>" . $nome . "</td></tr>";
            $message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
            $message .= "<tr><td><strong>Cidade: </strong> </td><td>" . $cidade . "</td></tr>";
            $message .= "<tr><td><strong>Pais:</strong> </td><td>" . $pais . "</td></tr>";
            $message .= "<tr><td><strong>Referência:</strong> </td><td>" . $referencia . "</td></tr>";
            if ($referencia == "outro_ref" || $referencia == "indicacao") {
                $message .= "<tr><td><strong>Especificação:</strong> </td><td>" . $ref_outro_bx . "</td></tr>";
            }
            $message .= "<tr><td><strong>Razão Social:</strong> </td><td>" . $social . "</td></tr>";
            if ($tipo_serv == 'transcricao') {
                $message .= "<tr><td><strong>Prazo de Entrega (transcrição):</strong> </td><td>" . $prazo_transcr . "</td></tr>";
                $message .= "<tr><td><strong>Idioma:</strong> </td><td>" . $idioma . "</td></tr>";
                $message .= "<tr><td><strong>Tempo total (em minutos):</strong> </td><td>" . $total_minutos . "</td></tr>";
                $message .= "<tr><td><strong>Tipo da transcrição:</strong> </td><td>" . $tipo_transcr . "</td></tr>";
            } else if ($tipo_serv == "traducao") {
                $message .= "<tr><td><strong>Prazo de Entrega (tradução):</strong> </td><td>" . $prazo_trad . "</td></tr>";
                $message .= "<tr><td><strong>Tipo do Material a ser traduzido:</strong> </td><td>" . $tipo_txt . "</td></tr>";
                if ($tipo_txt == "outro_trad") {
                    $message .= "<tr><td><strong>Especificação:</strong> </td><td>" . $tipo_txt_outro_bx . "</td></tr>";
                }
                $message .= "<tr><td><strong>Numero de páginas:</strong> </td><td>" . $num_paginas . "</td></tr>";
                if ($num_palavras) {
                    $message .= "<tr><td><strong>Numero de Palavras:</strong> </td><td>" . $num_palavras . "</td></tr>";
                }
                $message .= "<tr><td><strong>Possui fotos?</strong> </td><td>" . $possui_fotos . "</td></tr>";
            }
            $message .= "</table>";
            $message .= "</body></html>";

            $from = "orcamento@palavraclara.96.lt";
            $headers = "From: $from\r\n";
            $headers .= "Content-type: text/html\r\n";


            if (mail($to,$subject,$message,$headers)) {
            	// echo 'Mail sent!';
                $json_answer = array('result' => 'success');
              } else{
                $json_answer = array('result' => 'failure on sending mail!');
             } 
        }
        else {
                   $json_answer = array('result' => 'failure on receiving Data!');
                }

            echo json_encode($json_answer);
    }
?>
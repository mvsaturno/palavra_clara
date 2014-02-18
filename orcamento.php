<?php session_start(); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php 
    if (!empty($_POST)) {
        if (!empty($_POST['nome']) || !empty($_POST['email'])) {
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['email'] = $_POST['email'];
        }
    }
 ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Palavra Clara</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="styles/norm_grid.min.css">
        <link rel="stylesheet" href="styles/main.css">

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/modernizr.custom.26858.js"></script>
        <script src="js/main.js"></script>

    </head>
    <body>
        <div class="header">
            <div class="banner_form">
                <div class="grid">
                    <div class="col-1-3 push-right log_cont">
                        <img src="img/logo_transp.png" class="logo">
                        <h1>Palavra Clara</h1>
                    </div>
                </div>
            </div>
                <div class="col-1-1 nav_line">
                <div class="grid">
                <div class="top_nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Referências</a></li>
                    <li><a href="#">Quem Somos</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="grid main_cont">
            <!-- <div class="col-1-3"> </div> -->
            <form id="orcamento" action="completo.php" method="POST">
                <div class="col-1-2">
                    <div class="orcamento">
                        <h2>Preencha as informações abaixo:</h2>

                            <label for="nome"> Nome Completo: </label>
                            <input required type="text" id="nome" name="nome" class="input_txt" value="<?php echo $_SESSION['nome']; ?>" />
                            <label for="email">Email:</label>
                            <input required type="email" id="email" name="email" class="input_txt" value="<?php echo $_SESSION['email']; ?>" />

                            <label for="cidade">Cidade: </label>
                            <input required type="text" class="input_txt" value="" name="cidade" id="cidade" />

                            <label for="pais">País: </label>
                            <input required type="text" class="input_txt" value="" name="pais" id="pais" />

                            <label for="referencia">Como conheceu o Palavra Clara? </label>
                            <select class="input_txt" required name="referencia" id="referencia">
                                <option value="facebook">Facebook (Fan Page)</option>
                                <option value="indicacao">Indicação</option>
                                <option value="google">Pesquisa no Google</option>
                                <option>Outro</option>
                            </select>
                            <div id="input_outro">
                                <label for="input_outro_bx">Especifique:</label>
                                <input class="input_txt" type="text" id="input_outro_bx" name="input_outro_bx" value="" />
                            </div>

                            <div class="col-1-1">
                                    <div class="chkbx">
                                        <label>Razão Social:</label></br>
                                        <input required type="radio" name="social" id="pf" value="pf">
                                        <label for="pf">Pessoa Física</label>

                                        <input type="radio" name="social" id="pj" value="pj">
                                        <label for="pj">Pessoa Jurídica</label>
                                    </div>
                            </div>

                            <div class="col-1-1">
                                    <div class="chkbx" id="servico">
                                        <label>Serviço Desejado:</label>

                                        <select required name="tipo" class="input_txt" id="tipo">
                                            <option value="null">Selecione uma opção:</option>
                                            <option value="traducao">Tradução</option>
                                            <option value="transcricao">Transcrição</option>
                                            <option value="trad_transcr">Tradução e Transcrição</option>
                                        </select>
                                    </div>
                            </div>
                    </div>
                </div>
                <div class="col-1-2 form_more">
                    <div class="form_transcr">
                    <h2>Transcrição:</h2>
                    <div class="col-1-1">
                        <div>
                        <label for="prazo_transcr">Prazo de Entrega: </label>
                        <input type="date" class="input_txt" value="" name="prazo_transcr" id="prazo_transcr" />
                        </div>
                        <div>
                            <label for="idioma">Idioma:</label>
                                <select class="input_txt" name="idioma" id="idioma">
                                    <option value="pt">Português</option>
                                    <option value="en">Inglês</option>
                                    <option value="es">Espanhol</option>                    
                                </select>
                        </div>
                        <div> 
                            <label for="total_minutos">Tempo total dos arquivos de áudio (em minutos):</label> 
                            <input type="number" class="input_txt nbr" id="total_minutos" name="total_minutos" value="" />
                        </div>

                        <div> 
                            <label>Tipo de Transcrição:</label> 
                            <div class="tooltip" title="<u><b>Literal:</b></u> Respeita a fala coloquial e os vícios de linguagem originais do áudio. <br/><br/> <u><b>Linguagem Culta:</b></u> Com correção ortográfica, alterando a fala original.">?</div>
                            <select class="input_txt" name="tipo_transcr" id="tipo_transcr">
                                <option value="literal">Literal</option>
                                <option value="culta">Linguagem Culta</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form_trad">
                    <h2>Tradução:</h2>
                    <div class="col-1-2">
                    <label for="prazo_trad">Prazo de Entrega: </label>
                    </div>
                    <div class="col-1-2">
                    <input type="date" value="" name="prazo_trad" id="prazo_trad" />
                    </div>
                </div>
                <div class="form_submit">
                    <input hidden="hidden" type="text" value="orcamento" />
                    <input type="submit" value="Solicite Grátis!">
                </div>
            </div>
            </form>
            </div>
        <div class="footer col-1-1">
            <div class="grid">
            <p>Palavra Clara | Porto Alegre - RS</p>
            </div>
        </div>
    </body>
</hmtl>
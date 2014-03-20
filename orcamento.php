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
                <div class="log_cont">
                    <img src="img/logo_transp.png" class="logo">
                    <h1>Palavra Clara</h1>
                </div>
                </div>
            </div>
                <div class="nav_line">
                <div class="grid">
                <div class="top_nav">
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="referencias.php"><li>Referências</li></a>
                    <a href="quemsomos.php"><li>Quem Somos</li></a>
                    <a href="contato.php"><li>Contato</li></a>
                </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="grid form_cont">
            <!-- <div class="col-1-3"> </div> -->
            <form id="orcamento_comp" action="completo.php" class="form_orcamento" method="POST">
                <div class="col-1-2">
                    <div class="orcamento">
                        <h2>Preencha as informações abaixo:</h2>
                            <div>
                                <label for="nome"> Nome Completo: </label>
                                <input required type="text" id="nome" name="nome" class="input_txt" value="<?php if (!empty($_SESSION['nome'])) { echo $_SESSION['nome'];} ?>" />
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <input required type="email" id="email" name="email" class="input_txt" value="<?php if (!empty($_SESSION['email'])){echo $_SESSION['email'];} ?>" />
                            </div>
                            <div>
                                <label for="cidade">Cidade: </label>
                                <input required type="text" class="input_txt" value="" name="cidade" id="cidade" />
                            </div>
                            <div>
                                <label for="pais">País: </label>
                                <input required type="text" class="input_txt" value="" name="pais" id="pais" />
                            </div>
                            <div id="ref_form">
                                <label for="referencia">Como conheceu o Palavra Clara? </label>
                                <select class="input_txt" required name="referencia" id="referencia">
                                    <option value="facebook">Facebook (Fan Page)</option>
                                    <option value="indicacao">Indicação</option>
                                    <option value="google">Pesquisa no Google</option>
                                    <option value="outro_ref">Outro</option>
                                </select>
                            </div>
                            <div id="ref_outro">
                                <label for="ref_outro_bx">Especifique:</label>
                                <input class="input_txt" type="text" id="ref_outro_bx" name="ref_outro_bx" value="" />
                            </div>

                            <div class="chkbx">
                                <label>Razão Social:</label>
                                <select name="social" class="input_txt" id="social" >
                                    <option value="pf">Pessoa Física</option>
                                    <option value="pj">Pessoa Jurídica</option>
                                </select>
                            </div>
                            
                            <div class="chkbx" id="servico">
                                <label>Serviço Desejado:</label>
                                <select required name="tipo_serv" class="input_txt" id="tipo_serv">
                                    <option value="null">Selecione uma opção:</option>
                                    <option value="traducao">Tradução</option>
                                    <option value="transcricao">Transcrição</option>
                                    <option value="trad_transcr">Tradução e Transcrição</option>
                                </select>
                            </div>                            
                    </div>
                </div>
                <div class="col-1-2 form_more">
                    <div class="form_transcr orcamento">
                    <h2>Transcrição:</h2>
                        <div>
                            <label for="prazo_transcr">Prazo de Entrega: </label>
                            <input type="date" class="input_txt" value="" name="prazo_transcr" id="prazo_transcr" />
                        </div>
                        <div id="idioma_transcr">
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
                            <a href="#" class="tooltip">
                                Qual escolher?
                                <span>
                                    Literal:<br/>
                                    <i>Respeita a fala coloquial e os vícios de linguagem originais do áudio.</i><br /><br/>
                                    Linguagem Culta:<br/>
                                    <i>Com correção ortográfica, alterando a fala original.</i>
                                </span>
                            </a>

                            <select class="input_txt" name="tipo_transcr" id="tipo_transcr">
                                <option value="literal">Literal</option>
                                <option value="culta">Linguagem Culta</option>
                            </select>
                        </div>
                </div>
                <div class="form_trad orcamento">
                    <h2>Tradução:</h2>
                    <div>
                        <label for="prazo_trad">Prazo de Entrega: </label>
                        <input type="date" class="input_txt" value="" name="prazo_trad" id="prazo_trad" />
                    </div>
                    <div id="trad_tipo_material">
                        <label for="tipo_txt">Tipo do material:</label>
                                <select class="input_txt" name="tipo_txt" id="tipo_txt">
                                    <option value="art_cient">Artigo Científico</option>
                                    <option value="art_jorn">Artigo Jornalístico</option>
                                    <option value="site">Site</option>
                                    <option value="txt_tecnico">Texto Técnico (manual, normas técnicas, relatórios)</option>
                                    <option value="video">Video</option>
                                    <option value="audio">Arquivo de áudio</option>
                                    <option value="outro_trad">Outro</option>
                                </select>
                    </div>
                    <div id="tipo_txt_outro">
                            <label for="tipo_txt_outro_bx">Especifique o tipo (ex: Romance, eBook) ou extensão do arquivo (ex: PDF, DOC):</label>
                            <input class="input_txt" type="text" id="tipo_txt_outro_bx" name="tipo_txt_outro_bx" value="" />
                    </div>
                    <div>
                        <label for="num_paginas">Numero de páginas:</label> 
                        <input type="number" class="input_txt nbr" id="num_paginas" name="num_paginas" value="" />
                    </div>
                    <div>
                        <label for="num_palavras">Numero aproximado de palavras (opcional):</label> 
                        <input type="number" class="input_txt nbr" id="num_palavras" name="num_palavras" value="" />
                    </div>
                    <div>
                        <label for="possui_fotos">Seu texto possui fotos ou imagens?</label>
                        <select class="input_txt" name="possui_fotos" id="possui_fotos">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                        </select>
                    </div>
                </div>
                <div class="form_submit">
                    <input hidden="hidden" type="text" value="orcamento" />
                    <input type="submit" class="btn btn_form" value="Solicite Grátis!">
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
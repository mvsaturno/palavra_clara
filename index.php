<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
            <div class="banner_home">
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
        <div class="grid main_cont">
            <div class="col-1-3 orcamento">
                <div class="form">
                    <h2>Orçamento:</h2>
                    <form id="orcamento" action="orcamento.php" method="POST">
                        <input type="text" id="nome" name="nome" class="input_txt" value="" placeholder="Nome Completo" required/>
                        <input type="email" id="email" name="email" class="input_txt" value="" placeholder="E-Mail" required/>
                            <div class="btn_orc">
                                <input type="submit" class="btn" value="Solicite Grátis!" />
                            </div>
                    </form>
                </div>
            </div>
            <div class="col-1-3">
                <div class="transcr">
                    <div class="transcr_title">
                    <h2>Transcrições</h2>
                    </div>
                </div>
            </div>
            <div class="col-1-3">
            <div class="trad">
                    <div class="trad_title">
                    <h2>Traduções</h2>
                    </div>
                </div>
            </div>
            <div class="col-1-1 quote">
                <p>O conhecimento que você produz, a gente transforma em Palavra Clara:</p> 
                <p>textos coesos e harmônicos alinhados às suas expectativas.</p>
            </div>
        </div>
        <div class="footer col-1-1">
            <div class="grid">
            <p>Palavra Clara | Porto Alegre - RS</p>
            </div>
        </div>
    </body>
</html>
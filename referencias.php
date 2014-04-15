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
        <link rel="shortcut icon" href="./img/logo.png" >

        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/modernizr.custom.26858.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="header"><div class="nav_line">
                <div class="grid">
                <div class="top_nav">
                    <div class="menu_mobile_div">
                    <select class="menu_mobile" name="menu_mobile" onchange="location = this.options[this.selectedIndex].value;">
                        <option value="">MENU</option>
                        <option value="index.php"> <a href="index.php">Home</a></option>
                        <option value="referencias.php"> <a href="referencias.php">Referencias</a></option>
                        <option value="quemsomos.php"> <a href="quemsomos.php">Quem Somos</a></option>
                        <option value="contato.php"> <a href="contato.php">Contato</a></option>
                    </select>
                    </div>
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="referencias.php"><li class="act">Referências</li></a>
                    <a href="quemsomos.php"><li>Quem Somos</li></a>
                    <a href="contato.php"><li>Contato</li></a>
                </ul>
                </div>
                </div>
            </div>
            <div class="banner_ref">
                <div class="grid">
                <div class="log_cont">
                    <img src="img/logo_transp.png" class="logo">
                    <h1>Palavra Clara</h1>
                </div>
                </div>
            </div>
        </div>
        <div class="grid main_cont">
            <h1>Selecione a instituição para ler o depoimento:</h1>
            <div class="col-1-3">
                <div class="instituicao ppgs"></div>
            </div>

            <div class="col-2-3">
                <div class="depoimento" id="ppgs">
                    <p class="main">Tive o prazer de trabalhar com Clareana durante a realização de minha pesquisa de campo no mestrado. As transcrições foram realizadas dentro dos prazos estabelecidos e de maneira respeitosa com a fala dos interlocutores. O resultado foi excelente, principalmente porque haviam gravações importantes com ruídos do ambiente, esse empecilho exigiu dedicação ainda maior de Clareana, que superou todas expectativas e me entregou um trabalho de ótima qualidade.</p>
                    <p class="autor">Danielle Wille</p>
                    <p class="autor_descr">Mestranda em Ciências Sociais – UFPEL</p>
                </div>
            </div>

            <div class="col-1-3">
                <div class="instituicao spaf"></div>
            </div>
            
            <div class="col-2-3">
                <div class="depoimento" id="spaf">
                    <p class="main">Palavra Clara foi essencial no desenvolvimento da minha tese de doutorado. Trata-se de profissional dedicada, pontual e comprometida. Recomendo seu trabalho para todos que primam pela qualidade.</p>
                    <p class="autor">Jaqueline Sgarbi</p>
                    <p class="autor_descr">Doutoranda pelo Programa de Pós-graduação em Sistemas de Produção Agrícola Familiar-SPAF</p>
                </div>

            </div>
        </div>
        <div class="footer col-1-1">
            <div class="grid">
            <p>Palavra Clara | Porto Alegre - RS</p>
            </div>
        </div>
    </body>
</html>
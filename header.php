<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Karin</title>
        <link rel="stylesheet" type="text/css" href="./css/screen.css"/>
        <link href='http://fonts.googleapis.com/css?family=Averia+Sans+Libre:300italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="./plugins/fancybox/jquery.fancybox-1.3.4.css"/>        
        <script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="./js/plugins/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="./js/plugins/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="./js/plugins/fancybox/jquery.easing-1.3.pack.js"></script>
    </head>
    <body>
    <div id="shadow">
        <div id="site"> 
            <div id="header">
                <a href="./index.php" id="logo">
                    <img src="./img/logo.png" alt="Logo" />
                </a>
            </div>
            
            <div id="lateral">
            
                <div id="menu">
                    <ul>
                        <li><a href="./index.php">HOME</a></li>
                        <li><a href="./sobre.php">SOBRE</a></li>
                        <li><a href="./noticias.php">NOT&Iacute;CIAS</a></li>
                        <li><a href="./produtos.php">PRODUTOS</a></li>
                        <li><a href="./contato.php">CONTATO</a></li>
                    </ul>    
                </div>
                
                
                
                <div id="noticias">
                    <h2>Not&iacute;cias r&aacute;pidas</h2>
                    
                    <br />                
                
                    <? for($i = 0; $i < 4; $i++){ ?>
                    
                    <a href="./noticias.php?cod=<? echo $i+1;//$result[$i]["cod_noticia"] ?>">
                        <strong>24/03/2012</strong>
                        <p id="estiloNoticia">Mustang ridículo foi construído pela Microsoft.</p>
                    </a>                
                    <br /><br />
                                    
                    <? } ?>                                        
                </div>
            </div>
         
    
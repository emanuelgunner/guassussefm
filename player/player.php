<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../images/favicon.png" />

    <title>Rádio Guassussê FM - Tocando o que toca você!</title>
 
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,700,300' rel='stylesheet' type='text/css'>
    <link href="css/player.css" rel="stylesheet" type="text/css" />
    
    <!--[if lt IE 9]>
    <script src="/js/html5.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/player.js"></script>
    <script type="text/javascript" src="js/shoutcast-player.js"></script>
</head>

<body class="streaming">
	<div id="streaming">
        <a href="#" onclick="window.close();">Fechar</a>
        <div class="controles">
        	<img src="../images/logoSuperior.png" class="logo" />
            <div class="cabecalho">
                <p>Tocando agora na Guassussê FM... </p>
            </div>
			

			<div class="info-xml">
				<div id="frame">
					<iframe width='360' height='100' frameborder='0' src='current_track.php'></iframe>
				</div>
            	<img src="" class="capa" />
                
				
				<hr />
              
                <audio controls autoplay="autoplay" id="audioplayer">
                	<!--<source src="http://78.129.232.162:30817/;" type="audio/aac">-->
					<source src="http://87.117.228.65:23538/;" type="audio/mpeg">
					
					
					
                </audio>
                
                <p id="audioplayer_1"></p>
		    </div>
        </div>
        <!-- <img src="imagens/banner-whatsapp.png" class="banner" />-->
    </div>
</body>

</html>
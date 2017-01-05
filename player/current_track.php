<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="20;">
	
	<title>Player - Guassussê FM - Tocando o que toca você</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/aovivo.css">
	
	<style>
		@import url('https://fonts.googleapis.com/css?family=Jura');
		@import url('https://fonts.googleapis.com/css?family=Electrolize');
		@import url('https://fonts.googleapis.com/css?family=Rhodium+Libre');
		@import url('https://fonts.googleapis.com/css?family=Cutive+Mono');
		
		section{
			text-align: center;
			font-family: 'Cutive Mono', monospace;
			font-size: 35px;
			color: #fff;
			text-transform: uppercase;
			width: 250px;
			height: 40px;
			margin: 30px auto;
			font-weight: bold;
			
			
		}
	</style>
</head>
<body>	
	<section>	
		<div>
		<marquee scrollamount="15">
		<?php
			
			/* ----------- Server configuration ---------- */

			$ip = "78.129.232.162";
			$port = "30817";

			/* ----- No need to edit below this line ----- */
			/* ------------------------------------------- */
			$fp = @fsockopen($ip,$port,$errno,$errstr,1);
			if (!$fp) 
				{ 
				echo "Servidor Offline"; // Diaplays when sever is offline
				} 
				else
				{ 
				fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n");
				while (!feof($fp)) 
					{
					$info = fgets($fp);
					}
				$info = str_replace('</body></html>', "", $info);
				$split = explode(',', $info);
				if (empty($split[6]) )
					{
					echo "Dados sobre músicas não disponível"; // Diaplays when sever is online but no song title
					}
				else
					{
					$title = str_replace('\'', '`', $split[6]);
					$title = str_replace(',', ' ', $title);
					
					echo "$title"; // Diaplays song
					}
				}
		?>
		</marquee>
		</div>
	</section>
</body>
</html>
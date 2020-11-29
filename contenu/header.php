<!DOCTYPE HTML>
<html lang="fr">


		<head>
			<meta charset = "UTF-8">
			<title>Qui suis-je ?</title>
		<link type="text/css" rel="stylesheet" href="css.css">
		<link href="image/logo.png" rel="shortcut icon" >
		</head>
	<body>
	
		<header>
				<p><a href = "#n" class= "pos2 titre" > Calligny Nathanael</a> </p>
					<ul  class ="pos ul1 titre">
					<?php
				
				
					foreach ($menucontenu as $val){ 
						echo '<li class ="lin">'.$val. '</li>'."\n"; 
					} 
					
					
					?>
					 
				
					
					</ul>
				
		
		</header>
	
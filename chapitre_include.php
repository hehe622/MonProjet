<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8" />
		<title>Apprendre le include</title> 
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>

<div id="container">

<?php include("header.php"); ?>

<nav>
	<ul>
		<li>Home</li>
		<li>Rubrique 1</li>
		<li>Rubrique 2</li>
		<li>Rubrique 3</li>
	</ul>
</nav> <!-- fermeture navbar -->

<div id="contenu_1">
	Ici mon bloc principal 1
	Ce site vous présentera une branche
	Et on parlera de la fusion
</div> <!-- fermeture contenu_1 -->

<div id="contenu_2">
	Ici mon bloc principal 2
	correction sur une branche

</div> <!-- fermeture contenu_2 -->

<div id="clear"></div>

<?php include("footer.php"); ?>

</div> <!-- fermeture container -->
</body>

</html>
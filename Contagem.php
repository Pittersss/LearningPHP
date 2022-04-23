<html>
<head>
<link rel = "stylesheet" type ="text/css" href = "Css/style.css"/>
</head>
<body>
<div class ="pagina">
<?php
$i = 0.0;
define("number", $_GET["numero"]);
while(++$i < (number + 1))
{
	print "$i ";
}

?>
</div>
</body>
</html>
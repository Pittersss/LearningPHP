
<html>
<head>
<link rel = "stylesheet" type ="text/css" href = "Css/style.css"/>
</head>
<body>
<div class ="pagina">
<?php
//Comentário_Kappa_Kappa
define("num1", $_GET['nota1']);
define("num2", $_GET['nota2']);
define("resultado",(num1 + num2)/2);
echo Validation();
//Metódos-Funções
function Apv()
{
	echo "Você foi aprovado e a sua média foi: " .resultado;
}
function Rpv()
{
	echo "Você foi reprovado e a sua média foi: ".resultado;
}
function Rec()
{
	echo "Você está em recuperação paralela e a sua média foi: " .resultado;
}
function Media()
{
	return (float)(num1 + num2)/2;
}
function Validation()
{
 if(resultado >= 7.0)
 {
	return Apv();
 }
 if(resultado < 7.0 && resultado > 5.0)
 {
	return Rec();	
 }
 else
 {
	return Rpv();
 }
}
?>
</div>
</body>
</html>
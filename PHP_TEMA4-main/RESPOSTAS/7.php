<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=
1.0">
<title>Comando Break</title>
</head>
<body>
<h2>Números de 1 a 10 (parando no 5):</h2>
<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numeros as $numero) {
if ($numero == 5) {
echo "<div class= 'found'>Número encontrado: " . $numero "</div>";
echo $numero . "<br>";
}
?>
</body>
</html>
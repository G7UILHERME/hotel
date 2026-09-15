
<?php

$nome_hotel = $_POST['nome_hotel'];
$cidade = $_POST['cidade'];
$classificacao = $_POST['classificacao'];

echo "<h1>Hotel cadastrado!</h1>";

echo "Nome do Hotel: " . $nome_hotel . "<br>";
echo "Cidade: " . $cidade . "<br>";
echo "Estrelas: " . $classificacao . "<br>";

echo "<br>";
echo "<a href='cadastro_hotel.html'>Voltar</a>";

?>


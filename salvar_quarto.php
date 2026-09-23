<?php

require_once "conexao.php";

$id_hotel = $_POST['id_hotel'];
$numero_quarto = $_POST['numero_quarto'];
$tipo_quarto = $_POST['tipo_quarto'];
$preco_diaria = $_POST['preco_diaria'];

$sql = "INSERT INTO quartos (hotel_id, numero_quarto, tipo_quarto, preco_diaria)
        VALUES ('$id_hotel', '$numero_quarto', '$tipo_quarto', '$preco_diaria')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Quarto cadastrado com sucesso!</h1>";
    echo "<p>Número do quarto: $numero_quarto</p>";
    echo "<p>Tipo: $tipo_quarto</p>";
    echo "<p>Preço da diária: R$ $preco_diaria</p>";

    echo "<br>";
    echo "<a href='listar_quartos.php'>Ver quartos cadastrados</a>";
} else {
    echo "Erro ao cadastrar quarto: " . mysqli_error($conn);
}

?>
<?php

require_once "conexao.php";

$id_hotel = $_POST['id_hotel'];
$numero_quarto = $_POST['numero_quarto'];
$tipo_quarto = $_POST['tipo_quarto'];
$preco_diaria = $_POST['preco_diaria'];

$verificar = "SELECT id FROM hoteis WHERE id = '$id_hotel'";
$resultado = mysqli_query($conexao, $verificar);

if (mysqli_num_rows($resultado) == 0) {

    echo "<h1>Erro!</h1>";
    echo "<p>O hotel selecionado não existe.</p>";
    echo "<a href='cadastrar_quarto.html'>Voltar</a>";

    exit;
}

$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria)
        VALUES ('$id_hotel', '$numero_quarto', '$tipo_quarto', '$preco_diaria')";

if (mysqli_query($conexao, $sql)) {

    echo "<h1>Quarto cadastrado com sucesso!</h1>";

    echo "<p>ID do hotel: $id_hotel</p>";
    echo "<p>Número do quarto: $numero_quarto</p>";
    echo "<p>Tipo: $tipo_quarto</p>";
    echo "<p>Preço da diária: R$ $preco_diaria</p>";

    echo "<br>";
    echo "<a href='listar_quartos.php'>Ver quartos cadastrados</a>";

} else {

    echo "Erro ao cadastrar quarto: " . mysqli_error($conexao);

}

?>
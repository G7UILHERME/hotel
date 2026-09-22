<?php

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome_hotel = $_POST['nome_hotel'];
    $cidade = $_POST['cidade'];
    $classificacao = $_POST['classificacao'];

    $sql = "INSERT INTO hoteis (nome_hotel, cidade, classificacao)
            VALUES ('$nome_hotel', '$cidade', '$classificacao')";

    if (mysqli_query($conexao, $sql)) {

        echo "<h1>Hotel cadastrado!</h1>";
        echo "Nome do Hotel: " . $nome_hotel . "<br>";
        echo "Cidade: " . $cidade . "<br>";
        echo "Estrelas: " . $classificacao . "<br>";

        echo "<br>";
        echo "<a href='cadastro_hotel.html'>Voltar</a>";

    } else {

        echo "Erro ao cadastrar hotel: " . mysqli_error($conexao);

    }

} else {

    echo "Acesso inválido.";

}

?>

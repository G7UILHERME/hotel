<?php

require_once "conexao.php";

$sql = "SELECT * FROM hoteis";
$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
    die("Erro na consulta: " . mysqli_error($conexao));
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Hotéis Disponíveis</title>
</head>

<body>

    <h1>Hotéis Disponíveis</h1>

    <?php while ($hotel = mysqli_fetch_assoc($resultado)) { ?>

        <div>

            <h2><?php echo $hotel['nome_hotel']; ?></h2>

            <p>
                Cidade:
                <?php echo $hotel['cidade']; ?>
            </p>

            <p>
                Classificação:
                <?php echo $hotel['classificacao']; ?> estrelas
            </p>

            <a href="ver_quartos.php?id_hotel=<?php echo $hotel['id']; ?>">
                Ver Quartos Disponíveis
            </a>

        </div>

        <hr>

    <?php } ?>

</body>

</html>
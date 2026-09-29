<?php

require_once "conexao.php";

$sql = "SELECT * FROM quartos";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Quartos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            display: inline-block;
            margin: 20px 20px 0 0;
            text-decoration: none;
            color: #0066cc;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>

    <h2>Lista de Quartos Cadastrados</h2>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>ID do Hotel</th>
                <th>Número</th>
                <th>Tipo</th>
                <th>Preço</th>
                <th>Disponível</th>
            </tr>
        </thead>

        <tbody>

        <?php

        if (mysqli_num_rows($resultado) > 0) {

            while ($quarto = mysqli_fetch_assoc($resultado)) {

                echo "<tr>";

                echo "<td>" . $quarto['id'] . "</td>";
                echo "<td>" . $quarto['hotel_id'] . "</td>";
                echo "<td>" . $quarto['numero'] . "</td>";
                echo "<td>" . $quarto['tipo'] . "</td>";
                echo "<td>R$ " . $quarto['preco_diaria'] . "</td>";
                echo "<td>" . $quarto['disponivel'] . "</td>";

                echo "</tr>";
            }

        } else {

            echo "<tr>";
            echo "<td colspan='6'>Nenhum quarto cadastrado.</td>";
            echo "</tr>";

        }

        ?>

        </tbody>

    </table>

    <p>
        <a href="cadastrar_quarto.html">Cadastrar novo quarto</a>
        <a href="logout_hotel.php">Voltar / Sair</a>
    </p>

</body>

</html>
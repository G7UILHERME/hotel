
<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "hotel";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_hotel = $_POST["id_hotel"];
    $numero_quarto = $_POST["numero_quarto"];
    $tipo_quarto = $_POST["tipo_quarto"];
    $preco_diaria = $_POST["preco_diaria"];

    $sql = "INSERT INTO quartos 
            (id_hotel, numero_quarto, tipo_quarto, preco_diaria)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }

    $stmt->bind_param(
        "issd",
        $id_hotel,
        $numero_quarto,
        $tipo_quarto,
        $preco_diaria
    );

    if ($stmt->execute()) {
        echo "<h2>Quarto cadastrado com sucesso!</h2>";
        echo '<a href="cadastro_quarto.html">Cadastrar outro quarto</a>';
    } else {
        echo "Erro ao cadastrar o quarto: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>


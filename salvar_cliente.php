<?php

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO clientes (nome, email, telefone, senha)
            VALUES ('$nome', '$email', '$telefone', '$senha')";

    if (mysqli_query($conexao, $sql)) {

        echo "<h1>Cliente cadastrado!</h1>";
        echo "Nome: " . $nome . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Telefone: " . $telefone . "<br>";

        echo "<br>";
        echo "<a href='cadastro_cliente.html'>Voltar</a>";

    } else {

        echo "Erro ao cadastrar cliente: " . mysqli_error($conexao);

    }

} else {

    echo "Acesso inválido.";

}

?>
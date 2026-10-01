<?php
    require_once "conexao.php";
   $sql = "SELECT 
    reservas.id, 
    clientes.nome AS nome_cliente, 
    clientes.telefone, 
    quartos.numero_quarto, 
    reservas.data_entrada, 
    reservas.data_saida 
FROM reservas 
JOIN quartos ON reservas.id_quarto = quartos.id 
JOIN clientes ON reservas.id_cliente = clientes.id 
WHERE quartos.id_hotel = '$id_hotel'";

  $resultado = mysqli_query($conexao, $sqli);
?>

   <!DOCTYPE html>
   <html lang="pt-br">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olhometro das Reservas</title>
   </head>
   <body>
      <table>
      <h1> Reservas <h1> 
        <p> Confira abaixo os clientes que fizeram as reservas <p>
        <tr> 
            <th>Cod. Reservas</th>
            <th>Quartos </th>
            <th>Hospede </th>
            <th> Telefone</th>
            <th>Data de Entrada</th>
            <th>Data de saida</th>
            <tr>
        <?php
         while ($linha == mysqli_fetch_assoc($resultado)){
            echo "
            <tr>
            <td>".$linha['id']."</td>
            <td>".$linha['numero']."</td>
            <td>".$linha['nome_cliente']."</td>
            <td>".$linha['telefone']."</td>
            <td>".$linha['data_entrada']."</td>
            <td>".$linha['data_saida']."</td>
            </tr>
            ";
         }
    ?>
      <table>
   </body>
   </html>
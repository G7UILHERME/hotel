<?php
  require_once 
  $sql = "SELECT
       hoteis.nome AS nome_hotel;
       quartos.tipo,
       reservas.data_entrada,
       reservas.data_saida
  FROM reservas
  JOIN quartos ON reservas.id_quarto = quartos.id
  JOIN hoteis ON quartos.id_hotel = hoteis.id";
  
  $resultado= mysqli_query($conexao,$sqli);

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Minhas reservas Confirmadas </h2>
    <table>
    <tr> 
       <th>Cod.Reserva</th>
       <th>Quarto</th>
       <th>Tipo do quarto</th>
       <th>Diaria</th>
       <th> Data de entrada</th>
       <th>Data Saida</th>
       <tr>

       <tr>
         <?php
          while ($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>
            <td>".$linha['id_reservas']."</td>
            <td>".$linha['id_hoteis']."</td>
            <td>".$linha['tipo']."</td>
            <td>".$linha['preco_diaria']."</td>
            <td>".$linha['data_entrada']."</td>
            <td>".$linha['data_saida']."</td>
            </tr>";
          }
          ?>
          </table>
        <a href="listar_hoteis.php">Clique aqui para novas reservas</a>
</body>
</html> 
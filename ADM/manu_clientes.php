<?php
session_start();
 
require_once 'init.php';
require 'check.php';

if(isset($_POST['id'])){
    $PDO = db_connect();
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cod_login = $_POST['cod_login'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cnh = $_POST['cnh'];
    
    $sql3 = "UPDATE tbl_cliente SET nome = '$nome', cod_login = '$cod_login', email = '$email', telefone = '$telefone', cidade = '$cidade', estado = '$estado', cnh = '$cnh' WHERE id_cliente = '$id'";
    $stmt3 = $PDO->prepare($sql3);

    $stmt3->execute();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <title>:: MATSUMOTO ::</title>
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/all.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <!--Começo do codido do Scroww-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
           $(".scroll").click(function(event){
        event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
           });
          });
     </script>
     <!--fim do codido do Scroww-->
    
</head>
<body>
    <div class="wrapper">
    <!--Começo do sidebar-->
    <div class="sidebar">
        <h2>MENU</h2>
        <ul>
            <li><a href="panel_adm.php"><i class="fas fa-address-card"></i>Painel</a></li>
            <li><a href="manu_clientes.php"><i class="fas fa-user"></i>Clientes</a></li>
            <li><a href="manu_veiculos.php"><i class="fas fa-car"></i>Veículos</a></li>
            <li><a href="manu_prom.php"><i class="fas fa-piggy-bank"></i>Promoções</a></li>
            <li><a href="logout.php"><i class="fas fa-window-close"></i>Sair</a></li>
        </ul> 
        
    </div>
     <!--termino do sidebar-->
     <div class="main_content">
        <div class="header">CLIENTES</div>  
        <div class="info">

        
    <h1>Clientes</h1>
    <a href="cad_clientes.php">|Adicionar clientes|</a><br><br>
<?php

    $PDO = db_connect();
    $sql = "SELECT * FROM tbl_cliente;";

    $stmt = $PDO->prepare($sql);

    $stmt->execute();
    ?>
    <table border="2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Código</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CNH</th>
        </tr>
    </thead>
    <tbody>
    
    <?php while($rows_clientes = $stmt->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
      <td> <?php echo $rows_clientes['id_cliente'];?>
      <form method="POST" action="manu_clientes.php">
        <input type="hidden" value="<?php echo $rows_clientes['id_cliente'];?>" name="id">
        </td>
      <td><input type="text" value="<?php echo $rows_clientes['nome'];?>" name="nome"></td>
      <td><input type="text" value="<?php echo $rows_clientes['email'];?>" name="email"></td>
      <td><input type="text" value="<?php echo $rows_clientes['cod_login'];?>" name="cod_login"></td>
      <td><input type="text" value="<?php echo $rows_clientes['telefone'];?>" name="telefone"></td>
      <td><input type="text" value="<?php echo $rows_clientes['cidade'];?>" name="cidade"></td>
      <td><input type="text" value="<?php echo $rows_clientes['estado'];?>" name="estado"></td>
      <td><input type="text" value="<?php echo $rows_clientes['CNH'];?>" name="cnh"></td>
      <td><input type="submit" value="Alterar"></form></td>
</tr>
<?php }
$sql2 = "SELECT COUNT(*) FROM tbl_cliente;";
$stmt2 = $PDO->prepare($sql2);

$stmt2->execute();
$row = $stmt2->fetch(PDO::FETCH_ASSOC);
?>
</tbody>
</table>
        <p>Total = <?php echo $row['COUNT(*)'];?> Clientes</p>
    </div>
    </div>
</div>
        
</body>
</html>
<?php
session_start();
 
require_once 'init.php';
require 'check.php';

if(isset($_POST['id'])){
    $PDO = db_connect();
    $id = $_POST['id'];
    $modelo = $_POST['modelo'];
    $fabricante = $_POST['fabricante'];
    $ano = $_POST['ano'];
    $preco = $_POST['preco'];
    $tipo = $_POST['tipo'];
    $quan = $_POST['quantidade'];
    
    $sql3 = "UPDATE tbl_veiculo SET modelo = '$modelo', fabricante = '$fabricante', ano = '$ano', preco = '$preco', tipo = '$tipo', quantidade = '$quan' WHERE id = '$id'";
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
        <div class="header">VEÍCULOS</div>  
        <div class="info">

        
    <h1>Veiculos</h1>
    <a href="cad_veiculos.php">|Adicionar Veículos|</a><br><br>
<?php

    $PDO = db_connect();
    $sql = "SELECT id, modelo, fabricante, ano, preco, tipo, quantidade FROM tbl_veiculo;";

    $stmt = $PDO->prepare($sql);

    $stmt->execute();
    ?>
    <table border="2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Modelo</th>
            <th>Fabricante</th>
            <th>Ano</th>
            <th>Preço</th>
            <th>Tipo</th>
            <th>Quantidade</th>
        </tr>
    </thead>
    <tbody>
    
    <?php while($rows_produtos = $stmt->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
      <td> <?php echo $rows_produtos['id'];?>
      <form method="POST" action="manu_veiculos.php">
        <input type="hidden" value="<?php echo $rows_produtos['id'];?>" name="id">
        </td>
      <td><input type="text" value="<?php echo $rows_produtos['modelo'];?>" name="modelo"></td>
      <td><input type="text" value="<?php echo $rows_produtos['fabricante'];?>" name="fabricante"></td>
      <td><input type="text" value="<?php echo $rows_produtos['ano'];?>" name="ano"></td>
      <td><input type="text" value="<?php echo $rows_produtos['preco'];?>" name="preco"></td>
      <td><select name="tipo">
            <?php if($rows_produtos['tipo'] == "carro"){?>
            <option value="carro" selected>Carro</option>
            <option value="moto">Motocicleta</option>
            <?php }else{?>
                <option value="carro">Carro</option>
                <option value="moto" selected>Motocicleta</option>
            <?php } ?>
      </select></td>
      <td><input type="number" value="<?php echo $rows_produtos['quantidade'];?>" name="quantidade"></td>
      <td><input type="submit" value="Alterar"></form></td>
</tr>
<?php }
$sql2 = "SELECT COUNT(*) FROM tbl_veiculo;";
$stmt2 = $PDO->prepare($sql2);

$stmt2->execute();
$row = $stmt2->fetch(PDO::FETCH_ASSOC);
?>
</tbody>
</table>
        <p>Total = <?php echo $row['COUNT(*)'];?> Modelos</p>
    </div>
    </div>
</div>
        
</body>
</html>
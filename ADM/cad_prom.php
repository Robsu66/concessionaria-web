<?php
session_start();
 
require_once 'init.php';
require 'check.php';

if(isset($_POST['desconto'])){
    $PDO = db_connect();
    $id_veiculo = $_POST['id_veiculo'];
    $desconto = $_POST['desconto'];
    $data_exp = $_POST['data_exp'];

    
    $sql = "INSERT INTO tbl_promocao (desconto, data_exp) VALUES ('$desconto', '$data_exp'); ";
    $stmt = $PDO->prepare($sql);

    $stmt->execute();

    $id = $PDO->lastInsertId();

    $sql = "UPDATE tbl_veiculo SET id_prom = $id WHERE id = '$id_veiculo'";
    $stmt = $PDO->prepare($sql);

    $stmt->execute();
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
        <div class="header">CADASTRO DE PROMOÇÕES</div>  
        <div class="info">


<form action="cad_prom.php" method="POST">
    Desconto(decimal): <input type="text" required="" name="desconto"><br>
    Data de Expiração: <input type="date" required="" name="data_exp"><br>
    Id do Veiculo:     <input type="text" required="" name="id_veiculo"><br>
    <input type="submit" value="enviar">
    </form>

<?php

$PDO = db_connect();
$sql2 = "SELECT id, modelo, fabricante, ano, preco, tipo, quantidade FROM tbl_veiculo;";

$stmt2 = $PDO->prepare($sql2);

$stmt2->execute();
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

<?php while($rows_produtos = $stmt2->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
  <td><?php echo $rows_produtos['id'];?></td>
  <td><?php echo $rows_produtos['modelo'];?></td>
  <td><?php echo $rows_produtos['fabricante'];?></td>
  <td><?php echo $rows_produtos['ano'];?></td>
  <td><?php echo $rows_produtos['preco'];?></td>
  <td><?php echo $rows_produtos['tipo'];?></td>
  <td><?php echo $rows_produtos['quantidade'];?></td>
  
</tr>
<?php } ?>
</tbody>
</table>

    </div>
    </div>
</div>
        
</body>
</html>
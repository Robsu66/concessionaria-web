<?php
session_start();
 
require_once 'init.php';
require 'check.php';

if(isset($_POST['id'])){
    $PDO = db_connect();
    $id = $_POST['id'];
    $desconto = $_POST['desconto'];
    $data_exp = $_POST['data_exp'];
    
    
    $sql3 = "UPDATE tbl_promocao SET desconto = '$desconto', data_exp = '$data_exp' WHERE id_prom = '$id'";
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
        <div class="header">PROMOÇÃO</div>  
        <div class="info">

        
    <h1>Clientes</h1>
    <a href="cad_prom.php">|Adicionar Promoção|</a><br><br>
<?php

    $PDO = db_connect();
    $sql = "SELECT * FROM tbl_promocao;";

    $stmt = $PDO->prepare($sql);

    $stmt->execute();
    ?>
    <table border="2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Desconto</th>
            <th>Expira</th>
        </tr>
    </thead>
    <tbody>
    
    <?php while($rows_proms = $stmt->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
      <td> <?php echo $rows_proms['id_prom'];?>
      <form method="POST" action="manu_prom.php">
        <input type="hidden" value="<?php echo $rows_proms['id_prom'];?>" name="id">
        </td>
      <td><input type="text" value="<?php echo $rows_proms['desconto'];?>" name="desconto"></td>
      <td><input type="text" value="<?php echo $rows_proms['data_exp'];?>" name="data_exp"></td>
      <td><input type="submit" value="Alterar"></form></td>
</tr>
<?php }
$sql2 = "SELECT COUNT(*) FROM tbl_promocao;";
$stmt2 = $PDO->prepare($sql2);

$stmt2->execute();
$row = $stmt2->fetch(PDO::FETCH_ASSOC);
?>
</tbody>
</table>
        <p>Total = <?php echo $row['COUNT(*)'];?> Promoções</p>
    </div>
    </div>
</div>
        
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <title>:: MATSUMOTO ::</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/all.css">
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
<?php
session_start();
 
require_once 'init.php';
require 'check.php';
?>
<body>
    <div class="wrapper">
    <!--Começo do sidebar-->
    <div class="sidebar">
        <h2>MENU</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="panel.php"><i class="fas fa-user"></i>Painel</a></li>
            <li><a href="loja/carrinho.php"><i class="fas fa-car"></i>Veículos</a></li>
            <li><a href="#"><i class="fas fa-newspaper"></i>Noticias</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Sobre</a></li>
           
        </ul> 
        
    </div>
     <!--termino do sidebar-->
    <div class="main_content">
        <div class="header">PAINEL</div>  
        <div class="info">

        <h2>Painel do Usuário</h2>
        <p>Bem-vindo ao seu painel, <?php echo $_SESSION['name_user']; ?> | <a href="index.php">Index |</a>
        <a href="logout.php">Sair</a> 
        </p>
        <br>
        <h2>Informações das suas compras:</h2>
        <?php

        $PDO = db_connect();
        $id_cliente = $_SESSION['id_user'];
        $sql = "SELECT id_veiculo FROM tbl_venda WHERE id_cliente = '$id_cliente'";

        $stmt = $PDO->prepare($sql);

        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $id_v = $row['id_veiculo'];

        $sql2 = "SELECT modelo FROM tbl_veiculo WHERE id = '$id_v'";

        $stmt2 = $PDO->prepare($sql2);

        $stmt2->execute();

        $sql3 = "SELECT * FROM tbl_venda WHERE id_cliente = '$id_cliente'";

        $stmt3 = $PDO->prepare($sql3);

        $stmt3->execute();
        ?>
                <?php 
        while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC) and $row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){

        ?>
        <p>Modelo:                <?php echo isset($row2['modelo'])?$row2['modelo']:""; ?></p>
        <p>Pagamento:             <?php echo isset($row3['form_pag'])?$row3['form_pag']:""; ?></p>
        <p>Serviços Adicionais:   <?php echo isset($row3['serv_adi'])?$row3['serv_adi']:""; ?></p>
        <p>Valor Total:           <?php echo isset($row3['valor_tot'])?$row3['valor_tot']:""; ?></p>
        <p>Desconto:              <?php echo isset($row3['desconto'])?$row3['desconto']:""; ?></p>
        <p>Data:                  <?php echo isset($row3['data'])?$row3['data']:""; ?></p>
        <p>Status                 <?php echo isset($row3['status'])?$row3['status']:""; ?></p>

    <br>
        <?php }} ?>
        </div>
    </div>
</div>
        
</body>
</html>
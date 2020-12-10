<?php
session_start();
 
require_once 'init.php';
require 'check.php';

if(isset($_POST['nome'])){
    $PDO = db_connect();
    $nome = $_POST['nome'];
    $cod_login = $_POST['cod_login'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cnh = $_POST['cnh'];
    
    $sql3 = "INSERT INTO tbl_cliente (nome, cod_login, email, telefone, cidade, estado, cnh) VALUES ('$nome', '$cod_login', '$email', '$telefone', '$cidade', '$estado', '$cnh');";
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
        <div class="header">CADASTRO</div>  
        <div class="info">


<form action="cad_clientes.php" method="POST">
    Nome: <input type="text" required="" name="nome"><br>
    Email: <input typr="text" required="" name="email"><br>
    Código: <input typr="text" required="" name="cod_login"><br>
    Telefone: <input typr="text" required="" name="telefone"><br>
    Cidade: <input typr="text" required="" name="cidade"><br>
    Estado: <input typr="text" required="" name="estado"><br>
    CNH: <input typr="text" required="" name="cnh"><br>

    <input type="submit" value="enviar">
    </form>
    </div>
    </div>
</div>
        
</body>
</html>
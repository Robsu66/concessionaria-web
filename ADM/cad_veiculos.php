<?php
session_start();
 
require 'init.php';
require 'check.php';

if($_POST['modelo']){


    $modelo = isset($_POST['modelo'])?$_POST['modelo']:"";
    $fabricante = isset($_POST['fabricante'])?$_POST['fabricante']:"" ;
    $ano = isset($_POST['ano'])?$_POST['ano']:"";
    $preco = isset($_POST['preco'])?$_POST['preco']:"";
    $quantidade = isset($_POST['quantidade'])?$_POST['quantidade']:"";
    $tipo = isset($_POST['tipo'])?$_POST['tipo']:"";



    /*$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = time().$extensao;
    $diretorio = "../loja/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);*/

    $PDO = db_connect();
    $sql = "INSERT INTO tbl_veiculo (modelo, fabricante, ano, preco, tipo, quantidade) VALUES ('$modelo', '$fabricante', $ano, $preco, '$tipo', '$quantidade')";

    $stmt = $PDO->prepare($sql);

    $stmt->execute();

    /*$id = $PDO->lastInsertId();

     $conteudo = file_get_contents("paginaproduto_padrao.txt");

     file_put_contents("../loja/produto".$id.".php", '<?php $id='.$id.$conteudo);

     $link = "produto".$id.".php";
     $sql = "UPDATE tbl_veiculo SET link = '$link' WHERE id = '$id'";

     $stmt2 = $PDO->prepare($sql);

     $stmt2->execute();*/
}?>


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


<form action="cad_veiculos.php" method="POST">
     Modelo: <input type="text" required="" name="modelo"><br>
     Fabricante: <input typr="text" required="" name="fabricante"><br>
     Ano: <input type="number" required="" name="ano"><br>
     Preço: <input type="number" required="" name="preco"><br>
     Tipo: <select name="tipo">
            <option value="carro" selected>Carro</option>
            <option value="moto">Motocicleta</option>
      </select><br>
     Quantidade: <input typr="number" required="" name="quantidade">
    <input type="submit" value="enviar">
    </form>
    </div>
    </div>
</div>
        
</body>
</html>
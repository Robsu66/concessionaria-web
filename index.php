<!DOCTYPE html>
<?php
session_start();
 
require 'init.php';
?>
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
<body>

<div class="wrapper">
    <!--Começo do sidebar-->
    <div class="sidebar">
        <h2>MENU</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <?php if(isLoggedIn()){?>
            <li><a href="panel.php"><i class="fas fa-user"></i>Painel</a></li>
            <?php }else{ ?>
            <li><a href="logar.html"><i class="fas fa-user"></i>Login</a></li>
            <?php } ?>
            <li><a href="loja/carrinho.php"><i class="fas fa-car"></i>Veículos</a></li>
            <li><a href="https://g1.globo.com/carros/noticia/2020/01/21/carros-2020-veja-60-lancamentos-esperados.ghtml"><i class="fas fa-newspaper"></i>Noticias</a></li>
            <li><a href="loja/sobre.html"><i class="fas fa-address-card"></i>Sobre</a></li>
           
        </ul> 
        
    </div>
    <div class="">
    </div>
     <!--termino do sidebar-->
    <div class="main_content">
        <div class="header">MATSUMOTO</div>  
        <div class="info">
        <a href="#" ><img src="css/gg.png" width="900px" style="transform: translate(10%, 5%);"></a>
        <a href="#"> </a>
        
        <p style="font-size:25px; margin-left:400px;">Conheça nossos produtos :  </p>
        <a href="loja/carrinho.php" class="button" style=" background-color: #4b4276; border: none;color: white;padding: 10px 15px; text-align: center; text-decoration: none;
        display: inline-block; font-size: 16px; margin: 4px 2px;cursor: pointer; margin-left: 470px; border-radius:4px;">Saiba Mais</a>

          
      </div>
    </div>
</div>

</body>
</html>
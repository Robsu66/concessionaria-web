<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="boot/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/all.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <title>Carrito Compras</title>
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
 
require '../init.php';
//require '../check.php';
?>
</head>

<body>
    <!--Produtos-->
    <div class="wrapper">
        <!--Começo do sidebar-->
        <div class="sidebar">
        <h2>MENU</h2>
        <ul>
            <li><a href="../index.php"><i class="fas fa-home"></i>Home</a></li>
            <?php if(isLoggedIn()){?>
            <li><a href="../panel.php"><i class="fas fa-user"></i>Painel</a></li>
            <?php }else{ ?>
            <li><a href="../logar.html"><i class="fas fa-user"></i>Login</a></li>
            <?php } ?>
            <li><a href="carrinho.php"><i class="fas fa-car"></i>Veículos</a></li>
            <li><a href="https://g1.globo.com/carros/noticia/2020/01/21/carros-2020-veja-60-lancamentos-esperados.ghtml"><i class="fas fa-newspaper"></i>Noticias</a></li>
            <li><a href="sobre.html"><i class="fas fa-address-card"></i>Sobre</a></li>
           
        </ul> 
        
    </div>
     <!--termino do sidebar-->
      <!--inicio do carrinho-->

     <div class="main_content"> 

        <div class="info">
    <main>
        <div class="pricing-header px- py-1 pt-md- pb-md- my-2 mx-auto text-center">
            <h1 class="display-4 mt-4">Lista de Produtos</h1>
            <p class="lead">Selecione um de nossos produtos e ganhe um desconto</p>
        </div>

        <div class="container" id="lista-productos">

            <div class="card-deck mb-4 text-center">

                <div class="card mb- shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CG 160 Cargo</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/moto1.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">R$<span class="">10.292</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>PAINEL DIGITAL</li>
                            <li>BAGAGEIRO</li>
                            <li>RODAS DE LIGA LEVE</li>
                        </ul>
                       
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CB 1000R </h4>
                    </div>
                    <div class="card-body">
                        <img src="img/moto2.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">R$<span class="">60.900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MOTOR</li>
                            <li>PAINEL MULTICOLOR + FULL LED</li>
                            <li>TECNOLOGIA TBW</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">XRE190</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/moto3.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">R$<span class="">37.900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MOTOR</li>
                            <li>PAINEL MULTICOLOR + FULL LED</li>
                            <li>TECNOLOGIA TBW</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">XRE190</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/moto4.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">R$<span class="">37.900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MOTOR</li>
                            <li>PAINEL MULTICOLOR + FULL LED</li>
                            <li>TECNOLOGIA TBW</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CB 500X</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/moto5.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">R$<span class="">37.900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MOTOR</li>
                            <li>PAINEL MULTICOLOR + FULL LED</li>
                            <li>TECNOLOGIA TBW</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">XRE190</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/moto6.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">R$<span class="">37.900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MOTOR</li>
                            <li>PAINEL MULTICOLOR + FULL LED</li>
                            <li>TECNOLOGIA TBW</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">NXR 160 Bros ESDD</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/moto7.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">R$<span class="">37.900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MOTOR</li>
                            <li>PAINEL MULTICOLOR + FULL LED</li>
                            <li>TECNOLOGIA TBW</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CB 500F</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/moto8.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">R$<span class="">37.900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MOTOR</li>
                            <li>PAINEL MULTICOLOR + FULL LED</li>
                            <li>TECNOLOGIA TBW</li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CB 650R</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/moto9.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">R$<span class="">37.900</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MOTOR</li>
                            <li>PAINEL MULTICOLOR + FULL LED</li>
                            <li>TECNOLOGIA TBW</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="buttons" style="margin-left: 370px; margin-bottom: 20px;">
              <a href="../index.php" class="previous" style="margin-left:50px ;">&laquo; Anterior</a>
              <a href="#" style="padding-left: 10px;">1</a>
              <a href="#">2</a>
              <a href="#" >3</a>
               <a href="#" >4 ...</a>
              <a href="carrinho2.php" class="next" style="margin-left:10px;">Proximo &raquo;</a>
        </div>
    </main>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    </div>
    </div>
</div>

</body>
</html>
<html>
<html lang="pt-br">
    <head>
        <title>:: TESTE SILDE ::</title>
      
       
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="utf-8">

        <script type="text/javascript">
            function myFunction() {
            var x = document.getElementById("msg");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            }
        </script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
	$(".scroll").click(function(event){
	event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	 });
	});
	</script>
    </head>
    <body>
        <div class="row" id="noticias">
            <form action="login.php" class="login-form" method="POST">
                <h1>ADM</h1>
                <div class="txtb">
                    <input type="text" name="nome" value="">
                    <span data-placeholder="Username"></span>
                </div>

                <div class="txtb">
                    <input type="password" name="senha" value="">
                    <span data-placeholder="Password"></span>
                </div>

                <input type="submit" name="Entrar" class="logbtn" value="Login">
                <div class="bottom-text">
                Não tem uma conta? <a href="cadastro.html">Crie uma</a><br>
                Lembrar: <input type="checkbox" name="lembrar-senha">
                </div>
               
            </form>
            <script type="text/javascript">
                $(".txtb input").on("focus",function(){
                    $(this).addClass("focus");
                });

                $(".txtb input").on("blur",function(){
                    if($(this).val() == "")
                        $(this).removeClass("focus");
                });
            </script>
            
        </div>
        
    </body>
</html>

<?php
//Starting sessions.
session_start();
if(!isset($_SESSION['city']))
    header("Location: ../index.php");
//Including connection with the databse.
include '../functions/conn.php';
//Include functions.
include '../functions/functions.php';
//Select city.
$selectCity = $conn -> query ("SELECT * FROM cidades WHERE cid_codigo = ".$_SESSION['city']."");
$displayCity = $selectCity -> fetch (PDO::FETCH_ASSOC);
echo
    '
<!DOCTYPE html>
<html>
  <head>
    <title>Entrar | Comendo Fácil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="css/styles.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.css" rel="stylesheet" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,300,700,500" rel="stylesheet" type="text/css">
    <meta name="description" content="Realize seus pedidos online de forma simples e com muita variedade. Consulte se sua cidade está disponível."/>
    <meta name="keywords" content="pedidos, online, comendo, facil, cardapio, foodfenas, food, pedir, onlaine, pedido, aplicativo, app"/>
    <meta name="author" content="Fillchar Inc."/>
    <meta name="copyright" content="Todos os direitos reservados."/>
    <meta name="application-name" content="Comendo Fácil | Pedidos Online"/>
  </head>
  <body>
';

echo
'
      <div id="nav">
        <div class="box-conteudo">
';

echo
    '
          <img src="../img/logo/logobar.png" class="logobar">
        </div>
        
      </div>
  
  
      <div id="navred">
        <div class="box-cont-1">
        <h1>Entre ou Cadastre-se para continuar comprando!</h1>
        </div>
      </div>

      <div class="box">        
        
        <div class="box-login">
            <h1>Entre na sua conta!</h1>
            <button>Entrar com o Facebook</button><br>
            <h3>ou</h3>
            <input type="text" placeholder="Seu e-mail"><br>
            <input type="password" placeholder="Sua senha"><br>
            <button>Entrar</button>
        </div>
        
        <div class="box-login">
            <h1>Cadastar agora!</h1>
            <button>Cadastrar com o Facebook</button><br>
            <h3>ou</h3>
            <input type="text" placeholder="Nome"><br>
            <input type="text" placeholder="Sobrenome"><br>
            <input type="text" placeholder="Seu e-mail"><br>
            <input placeholder="Sua senha" type="password"><br>
            <input placeholder="Repita sua senha" type="password"><br>
            <h6>Ao clicar em cadastrar eu confirmo que li e aceito
os termos de uso e as políticas de privacidade.</h6>
            <button>Cadastrar agora</button>
        </div>
        
      </div>

    
      <footer class="footer">
      <p><a href="#">Termos de Contrato e Uso</a></p>
      <p>Uma empresa <a href="http://fillchar.com.br" target="_blank">Fillchar</a>. ©2015-2016 - Todos os direitos reservados.</p>
        <p><a href="#">Política de Privacidade</a></p>
      
      </footer>
';
?>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function ocultar(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
</script>
</body>
</html>
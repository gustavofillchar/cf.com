<?php
//Starting sessions.
session_start();
//Including connection with the databse.
include 'functions/conn.php';
//Include functions.
include 'functions/functions.php';

echo 
'
  <!DOCTYPE html>
  <html>
    <head>
      <title>Comendo Fácil | Pedidos Online</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS -->
      <link href="css/styles.css" rel="stylesheet" media="screen">
      <link href="css/font-awesome.css" rel="stylesheet" media="screen">
      <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,300,700,500" rel="stylesheet" type="text/css">
      <meta name="description" content="Realize seus pedidos online de forma simples e com muita variedade. Consulte se sua cidade está disponível."/>
      <meta name="keywords" content="pedidos, online, comendo, facil, cardapio, foodfenas, food, pedir, onlaine, pedido, aplicativo, app"/>
      <meta name="author" content="Fillchar Inc.">
      <meta name="copyright" content="Todos os direitos reservados."/>
      <meta name="application-name" content="Comendo Fácil | Pedidos Online"/>
      <script src="js/jquery.js"></script>
      <script src="js/script.js"></script>
    </head>
    <body>

        <div id="header">
          <div id="logotopo"></div>
          <a href="#"><img src="img/logo/logocomp.png"></a>
        </div>
        
        <div id="seleciona">
          <div id="subent">Escolha sua cidade abaixo</div>
          
          <select class="entrada">
';
$selectCity = $conn -> query ("SELECT * FROM cidades ORDER BY cid_nome");
while($displayCity = $selectCity -> fetch (PDO::FETCH_ASSOC))
{
  echo 
  '
    <option value="'.$displayCity['cid_codigo'].'">'.$displayCity['cid_nome'].', '.$displayCity['cid_estado'].'</option>
  ';
}
echo 
'
          </select>
          <br>
          <button class="btn" id="selectCity">
            CONTINUAR
          </button>
        </div>
        
        <div id="banner">
          <div id="btext">Cadastre o seu estabelecimento gratuitamente<br>e receba seus <b>pedidos online</b> hoje mesmo!</div>
          <button class="btn-banner">Cadastrar</button>
        </div>
      
        <footer class="footer">
        <p><a href="#">Termos de Contrato e Uso</a></p>
        <p>Uma empresa <a href="http://fillchar.com.br" target="_blank">Fillchar</a>. ©2015-2016 - Todos os direitos reservados.</p>
          <p><a href="#">Política de Privacidade</a></p>
        
        </footer>
      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </body>
  </html>
';
?>
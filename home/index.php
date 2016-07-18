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
    <title>Comendo Fácil | '.$displayCity['cid_nome'].', '.$displayCity['cid_estado'].'.</title>
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
//Including header
include '../functions/header.php';
echo
'
      <div id="nav">
        <div class="box-conteudo">
';
?> 
          <a href="#" onclick="ocultar('menu')"><i class="fa fa-1x fa-bars" aria-hidden="true"></i></a>
<?php
echo 
'
          <img src="../img/logo/logobar.png" class="logobar">
          <p>
            <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>
            '.$displayCity['cid_nome'].', '.$displayCity['cid_estado'].'
          </p>
        </div>
        
      </div>
  
  
      <div id="navred">
        <div class="box-cont-1">
        <h1>Você está em '.$displayCity['cid_nome'].', '.$displayCity['cid_estado'].'</h1>
        <button class="btn-editar" href="#">
        <i class="fa fa-pencil" aria-hidden="true"></i>
        Alterar Local</button>
        </div>
      </div>

      <div class="box-busca">
        
          <input type="text" class="busca"><button class="btn-busca"><i class="fa fa-search" aria-hidden="true"></i>
</button>
      </div>

      <div class="box-hot">
        
        <div class="box-content-text">
          <h1 id="hot"><i class="fa fa-1x fa-fire-extinguisher" aria-hidden="true"></i>  os estabelecimentos mais quentes do momento</h1>
        </div>
        
        <!-- Bloco estabelecimentos quentes -->
        <div class="box-content">
          
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6><i class="fa fa-circle" aria-hidden="true"></i>  Categoria</h6>
            <a href="#"><button class="btn-item-on">PEDIR ONLINE</button></a>
          </div>                                                                            
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6><i class="fa fa-circle" aria-hidden="true"></i>  Categoria</h6>
            <a href="#"><button class="btn-item-on">PEDIR ONLINE</button></a>
          </div>                                 
          
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6><i class="fa fa-circle" aria-hidden="true"></i>  Categoria</h6>
            <a href="#"><button class="btn-item-on">PEDIR ONLINE</button></a>
          </div>                                                                            
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6><i class="fa fa-circle" aria-hidden="true"></i>  Categoria</h6>
            <a href="#"><button class="btn-item-on">PEDIR ONLINE</button></a>
          </div>            
      
        </div>
        <!-- // Bloco estabelecimentos quentes -->
        
      </div>
  
      <div class="box-open">
        
        <div class="box-content-text">
          <h1 id="opentext">Estabelecimentos abertos no momento (182)</h1>
        </div>
        
        <!-- Bloco estabelecimentos ABERTOS -->
        <div class="box-content">
          
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6><i class="fa fa-circle" aria-hidden="true"></i>  Categoria</h6>
            <a href="#"><button class="btn-item">PEDIR</button></a>
          </div>                                                                            
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6><i class="fa fa-circle" aria-hidden="true"></i>  Categoria</h6>
            <a href="#"><button class="btn-item">PEDIR</button></a>
          </div>                                 
          
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6><i class="fa fa-circle" aria-hidden="true"></i>  Categoria</h6>
            <a href="#"><button class="btn-item">PEDIR</button></a>
          </div>                                                                            
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6><i class="fa fa-circle" aria-hidden="true"></i>  Categoria</h6>
            <a href="#"><button class="btn-item">PEDIR</button></a>
          </div>            
      
        </div>
        <!-- // Bloco estabelecimentos ABERTOS -->
        
      </div>
  
    <div class="box-open">
        
        <div class="box-content-text">
          <h1 id="closetext">Estabelecimentos fechados no momento (89)</h1>
        </div>
        
        <!-- Bloco estabelecimentos ABERTOS -->
        <div class="box-content">
          
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6>Categoria</h6>
            <a href="#"><button class="btn-close">VER CARDÁPIO</button></a>
          </div>   
          
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6>Categoria</h6>
            <a href="#"><button class="btn-close">VER CARDÁPIO</button></a>
          </div>   
          
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6>Categoria</h6>
            <a href="#"><button class="btn-close">VER CARDÁPIO</button></a>
          </div>   
          
          <div class="estabelecimento">
            <img src="../img/logo/logo_padrao.png">
            <h3>Estabelecimento Nome</h3>
            <h6>Categoria</h6>
            <a href="#"><button class="btn-close">VER CARDÁPIO</button></a>
          </div>                                                     
      
        </div>
        <!-- // Bloco estabelecimentos ABERTOS -->
        
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
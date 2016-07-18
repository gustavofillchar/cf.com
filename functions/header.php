<?php
if(isset($_SESSION['logged']))
{
  $selectProffile = $conn -> query ("SELECT * FROM clientes WHERE cli_codigo".$_SESSION['logged']."");
  $displayProffile = $selectProffile -> fetch (PDO::FETCH_ASSOC);
  $photoProffile = $displayProffile['cli_foto'];
  $nameProffile = $displayProffile['cli_nome'];
}
else
{
  $photoProffile = "../img/nophoto.gif";
  $nameProffile = "<br><a href='logged.php'>Entrar ou cadastrar</a>";
}
echo 
'
  <div id="menu">
    <div class="profile">
      <img src="'.$photoProffile.'" class="perfil">
      <h1>'.$nameProffile.'</h1>
';
if(isset($_SESSION['logged']))
{
  echo 
  '
    <button class="btn-perfil"><i class="fa fa-cog" aria-hidden="true"></i></button>
    <button class="btn-perfil"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</button>
  ';
}
echo 
'
        </div>
        <hr class="style-six">
        
        <a href="../home/">
          <div class="mtag" >
          <i class="fa fa-shopping-cart" aria-hidden="true"></i><h1>Início</h1>
          </div>
        </a>
        
        <a href="#">
          <div class="mtag">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i><h1>Meus Pedidos</h1>
          </div>
        </a>
        
        <a href="#">
          <div class="mtag">
          <i class="fa fa-map-marker" aria-hidden="true"></i><h1>Meus Endereços</h1>
          </div>
        </a>
        
        <a href="#">
          <div class="mtag">
          <i class="fa fa-comments" aria-hidden="true"></i><h1>Avaliações</h1>
          </div>
        </a>
        
        <a href="#">
          <div class="mtag">
          <i class="fa fa-envelope" aria-hidden="true"></i><h1>Fale Conosco</h1>
          </div>
        </a>
        <hr class="style-six">
        <h1 class="h1-text"><i class="fa fa-star" aria-hidden="true"></i>  Favoritos</h1>
        
        <a href="../home/">
          <div class="mtag-fav">
          <img src="../img/logo/logo_padrao.png">
          <h1>Estabelecimento</h1>
          </div>
        </a>
        
        
        <a href="../home/">
          <div class="mtag-fav">
          <img src="../img/logo/logo_padrao.png">
          <h1>Estabelecimento</h1>
          </div>
        </a>
        
        
        <a href="../home/">
          <div class="mtag-fav">
          <img src="../img/logo/logo_padrao.png">
          <h1>Estabelecimento</h1>
          </div>
        </a>
        
        <a href="../home/">
          <div class="mtag-fav">
          <img src="../img/logo/logo_padrao.png">
          <h1>Estabelecimento</h1>
          </div>
        </a>        
        
        <a href="../home/">
          <div class="mtag-fav">
          <img src="../img/logo/logo_padrao.png">
          <h1>Estabelecimento</h1>
          </div>
        </a>
        
        <a href="../home/">
          <div class="mtag-fav">
          <img src="../img/logo/logo_padrao.png">
          <h1>Estabelecimento</h1>
          </div>
        </a>
        
        <a href="../home/">
          <div class="mtag-fav">
          <img src="../img/logo/logo_padrao.png">
          <h1>Estabelecimento</h1>
          </div>
        </a>
                
        <a href="../home/">
          <div class="mtag-fav">
          <img src="../img/logo/logo_padrao.png">
          <h1>Estabelecimento</h1>
          </div>
        </a>
        
        <hr class="style-six">
        </div>
      </div>
';
?>
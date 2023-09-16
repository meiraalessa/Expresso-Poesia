<?php
    #importando o array de livros
    $livros = require "dados_romance.php";

?>
<html>
	<head>
	<title>Livros - Expresso & Poesia</title>
    <link href="estilo2.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	</head>
	<body> 
	<!--header-->
		<header class="o-header">
				<div class="center">
				<div class="logo"><img src="imagens/logo (2).png"/></div> <!--Logo-->
				<div class="menu">
					<a href="#">Inicio</a>
					<a href="#">Menu</a>
                    <a href="livros.html">Livros</a>
                    <a href="#">Adquirir</a>
				</div><!--menu-->
				</div><!--center-->
                </div>		
		</header>
<main class="main-container_genero">
    <h2>Livros de </h2>
    <h1>Romance</h1>
    <h3>Escolha o seu</h3>
</main>
<main class ="main-container_livros">
    <section class="livros">
        <section class="cards-livros">
   
           <?php foreach($livros as $livro){ ?>
            <!-- INICIO DO CARD LIVRO --->
           <div class="card-livro">
               <div class="livro-imagem">
                   <img src="<?=$livro["imagem"]?>">
               </div>
               <div class ="livro-texto">
                   <h3><?=$livro["titulo"]?></h3>
                   <p><?=$livro["autor"]?></p>
                   <div class=" b1"> <button class="custom-btn btn-6"> <a class="link" href="compras.php"><span>Quero esse!</span></a></button></div>
               </div>
           </div>
            <!-- FIM DO CARD LIVRO --->
            <?php } ?>
   
        </section>   
</main>
	<!--footer-->
	<footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo"> </h1>
        
    <h2>Contatos</h2>
    
    <address>
      40028922<br>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">  Media</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Em todas as redes sociais</a>
        </li>
        <li>
          <a href="#">@expresso&poesia</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">Website Designer by</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a href="#">BELUGUETES</a>

      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Politica de Privacidade</a>
        </li>
        
        <li>
          <a href="#">Termos de uso</a>
        </li>
        
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2022  All rights reserved.</p>
    
    <div class="legal__links">
      <span>Made with <span class="heart">♥
    </div>
  </div>
</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Compras</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilo_compras.css" rel="stylesheet">  
    </head>
    <body>
        <!-- CABEÇALHO -->
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
  <!-- FIM DO CABEÇALHO -->

                                    <!-- FORMULÁRIO !-->
<main id="formulario">
    <section id="confirmacao">
  <div class="formulario">
        <h2>Confirmação de pedido:</h2><br>
    <form>
                                      <!-- cafes !-->
  <div class="conteudo">      
          <label for="number">
            <h3><br>Quantidade de cafés:</h3> <br>
          <input type="number" id="cafes" name="quantidade" min = "1" max="10" />
          </label>
  </div>
  
   <div class="conteudo">    
          <label for="checkbox">
            <h3>Selecione o tamanho</h3>
        <input type="checkbox" id="copo" name="p" value="1"> pequeno (25 ml)</input>
        <input type="checkbox" id="copo" name="m" value="2"> médio (50 ml)</input>
        <input type="checkbox" id="copo" name="g" value="3"> Grande (150 ml)</input>
          </label>
  </div>
  
                                  <!-- salgados !-->     
  <div class="conteudo">
    <label for="checkbox">
      <h3>Salgados:</h3>
        <input type= "checkbox"> Croquete de batata com queijo <br></input>
        <input type="checkbox">Bolinhas de queijos c/ bacon<br></input>
        <input type="checkbox">Empadinha de frango com Catupiry<br></input>
        <input type="checkbox">Esfiha fechada de carne<br></input>
        <input type="checkbox">enrroladinho de preseunto e queijo<br></input>
        <input type="checkbox">Coxinha de frango com Catupiry<br></input>
        <input type="checkbox">Pão de queijo com cream cheese<br></input>
        <input type="checkbox">Empada de camarão cremoso<br></input>
        <input type="checkbox">Empada de camarão cremoso<br></input>
    </label>
  </div>
  
  <div class="conteudo">
          <label for="checkbox">
            <h3>Selecione o tamanho (porções)</h3>
        <input type="checkbox" id="porcao" name="p" value="1"> pequeno</input>
        <input type="checkbox" id="porcao" name="m" value="2"> médio</input>
        <input type="checkbox" id="porcao" name="g" value="3"> Grande</input>
          </label>
  </div>
        
  
  
                          <!-- doces !-->
  
           
  <div class="conteudo">     
    <label for="checkbox">
      <h3>Doces:</h3>
        <input type= "checkbox"> Sorvete de banana e doce de leite com casquinha<br></input>
        <input type="checkbox">tortinha de ninho com nutella<br></input>
        <input type="checkbox">Bem-casado de pote<br></input>
        <input type="checkbox">trufa de chocolate<br></input>
        <input type="checkbox">Cupcake fofinho de chocolate<br></input>
        <input type="checkbox">Donuts com cobertura de chocolate<br></input>
        <input type="checkbox">Torta de chocolate com castanha-do-pará<br></input>
        <input type="checkbox">Macarons<br></input>
    </label>
  </div> 
  
  <div class="conteudo"> 
          <label for="checkbox">
            <h3>Selecione o tamanho (porções)</h3>
        <input type="checkbox" id="porcao" name="p" value="1"> pequeno</input>
        <input type="checkbox" id="porcao" name="m" value="2"> médio</input>
        <input type="checkbox" id="porcao" name="g" value="3"> Grande</input>
          </label>
  </div>
  
                                        <!-- vegano !-->
  <div class="conteudo"> 
    <label for="checkbox">
      <h3>Opções Veganas:</h3>
        <input type= "checkbox"> Pão de queijo<br></input>
        <input type="checkbox">Avocado toast<br></input>
        <input type="checkbox">French Toast<br></input>
        <input type="checkbox">Smoothie de abacate e banana <br></input>
        <input type="checkbox">Café Caramelado<br></input>
        <input type="checkbox">Panqueca vegana de palmito<br></input>
        <input type="checkbox">Suco verde de abacaxi<br></input>
        <input type="checkbox">Bolo de côco<br></input>
    </label>
  </div>
  
  <div class="conteudo"> 
  <label for="checkbox">
            <h3>Selecione o tamanho (porções)</h3>
        <input type="checkbox" id="porcao" name="p" value="1"> pequeno</input>
        <input type="checkbox" id="porcao" name="m" value="2"> médio</input>
        <input type="checkbox" id="porcao" name="g" value="3"> Grande</input>
          </label>
  </div>    
  
                              <!-- zero lactose !-->
  <div class="conteudo">   
    <label for="checkbox">
      <h3>Zero Lactose:</h3>
        <input type= "checkbox">Smoothie de banana e frutas vermelhas<br></input>
        <input type="checkbox">Tortilla com cogumelos<br></input>
        <input type="checkbox">coxinha<br></input>
        <input type="checkbox">Empada de frango <br></input>
        <input type="checkbox">Muffins de banana e maçã<br></input>
        <input type="checkbox">Panqueca de aveia</br></input>
        <input type="checkbox">Bolo de maçã com canela<br></input>
        <input type="checkbox">Rosca de canela<br></input>
    </label>
  </div>
  
  <div class="conteudo"> 
          <label for="checkbox">
            <h3>Selecione o tamanho (porções)</h3>
        <input type="checkbox" id="porcao" name="p" value="1"> pequeno</input>
        <input type="checkbox" id="porcao" name="m" value="2"> médio</input>
        <input type="checkbox" id="porcao" name="g" value="3"> Grande</input>
          </label>
  </div>
  
  
  
  
  
                                  <!-- tortas doces!-->
  <div class="conteudo">
    <label for="checkbox">
      <h3>Tortas doces:</h3>
        <input type= "checkbox">limão<br></input>
        <input type= "checkbox">paçoca<br></input>
        <input type= "checkbox">brigadeiro<br></input>
        <input type= "checkbox">morango<br></input>
    </label>
  </div>
  
  <div class="conteudo">
          <label for="checkbox">
            <h3>Selecione o tamanho (porções)</h3>
        <input type="checkbox" id="porcao" name="p" value="1"> pequeno</input>
        <input type="checkbox" id="porcao" name="m" value="2"> médio</input>
        <input type="checkbox" id="porcao" name="g" value="3"> Grande</input>
          </label>
  </div>
  
  
  
                                  <!-- tortas salgadas !-->
  <div class="conteudo">
    <label for="checkbox">
      <h3>Tortas salgadas:</h3>
        <input type= "checkbox">calabresa<br></input>
        <input type= "checkbox">carne moida<br></input>
        <input type= "checkbox">portuguesa<br></input>
        <input type= "checkbox">frango<br></input>
  </label>
  </div>
  
  <div class="conteudo">
          <label for="checkbox">
            <h3>Selecione o tamanho (porções)</h3>
        <input type="checkbox" id="porcao" name="p" value="1"> pequeno</input>
        <input type="checkbox" id="porcao" name="m" value="2"> médio</input>
        <input type="checkbox" id="porcao" name="g" value="3"> Grande</input>
          </label>
  </div>
                <!-- botão de envio do formulário !--> 
  <div class="bts">
    <a href="inicio.php"><h2>Cancelar</h2></a>

</div>
<div class="bts">
  <a href="finalizar.php">
    <h2>Finalizar</h2></a>
  </div>
  
                                 <!-- fim do forulário!-->
      </form>
  
  </div>
  
                         
  </section>

</main>
<!-- rodapé -->
<footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo"> </h1>
          
      <h2>Contatos</h2>
      
      <address>
        40028922<br>
            
        <a class="footer__btn" href=""></a>
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
            <a href="#">@</a>
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
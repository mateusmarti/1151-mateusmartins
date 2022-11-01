<?php
  include "navbar.php";
?>


      <!--CARROSSEL-->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner carrossel">
          <div class="carousel-item active">
            <img src="img/carrossel-01.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrossel-02.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrossel-03.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!--SOBRE NÓS-->
      <div class="col-12 sobre">
          <div class="linhaComTexto">
            <span style="color: #4161BF">Sobre Nós</span>
          </div>

          <div class="col-12 col-md-4 img-sobre">
            <img src="img/imagem-sobre.png" alt="" width="70%">
          </div>
          <div class="col-12 col-md-8 texto-sobre">
            <h1 style="text-align: center;">Titulo</h1>
            <p style="font-size: 20px;">Somos uma micro-empresa especializada em manutenções em SmartPhones, Tablets, NoteBooks e Computadores. Trabalhamos no ramo desde de 2019, tendo assim mais de 3 anos de experiência. Realizamos serviços com prazos de até 3 dias úteis, com peças totalmente originais <i><strong>(peças paralelas por responsabilibade do cliente)</strong></i> e serviço especializado feito por técnicos formados. Nos localizamos em Padre Miguel, e realizamos serviços para as zonas oeste, norte e baixada.</p>
          </div>
        </div>


            <!--CARDS-->
            <div class="row row-cols-1 row-cols-md-3 g-4 produtos">
        <div class="col">
          <div class="card h-100 cartao zoom">
            <img src="img/ip-xr.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Capinha de iPhone</h5>
              <h1 class="card-text">R$29,99</h1>
            </div>
            <div class="card-footer">
              <a href="https://wa.me/5521990853560" class="btn butao text-white">Comprar</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 cartao zoom">
            <img src="img/caixa-2.png" style="padding: 10px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">JBL Flip 5</h5>
              <h1 class="card-text">R$199,99</h1>
            </div>
            <div class="card-footer">
              <a href="https://wa.me/5521990853560" class="btn butao text-white">Comprar</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 cartao zoom">
            <img src="img/pelicula-3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Película de Privacidade</h5>
              <h1 class="card-text">R$34,99</h1>
            </div>
            <div class="card-footer">
              <a href="https://wa.me/5521990853560" class="btn butao text-white">Comprar</a>
            </div>
          </div>
        </div>
      
  
      </div>

      <footer class="meufooter text-center">
  
        <div class="col-12 col-md-6 dev">
           
           <h1 class="text-white text-center">Desenvolvedores</h1>
           
           <ul>
             <li><a class="btn btn-outline-primary botoes" href="https://github.com/mateusmarti" target="_blank">Mateus Martins</a></li><br>
             <li><a class="btn btn-outline-primary botoes" href="#" target="_blank">Gustavo Cassaro</a></li><br>
             <li><a class="btn btn-outline-primary botoes" href="https://github.com/KLCria21" target="_blank">Kalebe Gadioli</a></li><br>
           </ul>
        
        </div> 
        
        <div class="col-12 col-md-6 red">
      
           <h1 class="text-white text-center">Redes Sociais</h1> 
            <ul>
              <li><a class="btn btn-outline-primary" href="https://instagram.com/mateusmartins1094" target="_blank">Mateus</a></li><br>
              <li><a class="btn btn-outline-primary" href="https://instagram.com/_gustavocassaro4" target="_blank">Gustavo</a></li><br>
              <li><a class="btn btn-outline-primary" href="https://instagram.com/ksgadioli" target="_blank">Kalebe</a></li><br>
            </ul>
      
        </div>

      <div class="col-12 col-md-12">
        <p>MT Cell - Todos os Direitos Reservados.</p> 
      </div>
      
      </footer>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>
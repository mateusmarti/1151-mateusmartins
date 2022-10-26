<?php
  include "navbar.php";
?>

      <div class="col-8 cadastro"><br>
        <form class="row g-3 form" name="form" id="form" method="post" onsubmit="return envia(this)" action="adm/valida.php">
            <h1 style="text-align: center;">Faça o Login</h1>
            <h3 style="text-align: center;">Use sua conta cadastrada</h3> <br><br><br><br>
            <div class="col-12 col-md-6">
              <label for="inputEmail4" class="form-label">E-Mail</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="col-12 col-md-6">
              <label for="inputPassword4" class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha" id="senha" oninput="senhas()" placeholder="****" required>
            </div>
            <div class="cadastrar">
                <p>Não tem conta ainda? Cadastre-se <a href="cadastro.html">aqui</a>
                </p>
            </div>
                <div class="col-12">
                  <button type="reset" class="btn btn-primary">Limpar</button>
                  <button type="submit" class="btn btn-success">Enviar</button>
              </div>
              </div>
            </div>
           
          </form>
    </div>

      

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
   </body>
</html>

<?php
  include "adm/valida.php";
?>
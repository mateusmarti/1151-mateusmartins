<?php
  include "navbar.php";
?>
      <div class="col-8 cadastro"><br>
        <form class="row g-3 form" name="form" id="form" method="post" onsubmit="return envia(this)" action="usuarios/incluirUsuario.php">
            <h1>Faça o Cadastro</h1>
            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">E-Mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha" id="senha" oninput="senhas()" placeholder="****" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Confirmar Senha</label>
                <input type="password" class="form-control" name="senha2" id="senha2" oninput="senhas()" placeholder="****" required>
              </div>
              <p id="msg"> * As senhas não conferem </p>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="col-6">
              <label for="cpf" class="form-label"> CPF </label>
              <input type="text" class="form-control" name="cpf" id="cpf" placeholder="___.___.___-__" onkeypress="mascara_cpf(this)" maxlength="14" onkeyup="salto(this.name, this.value)" onkeydown="return somente_numero(event)">
          </div>
          <div class="col-6">
            <label for="cpf" class="form-label"> Telefone </label>
            <input type="text" class="form-control" name="tel" id="tel" placeholder="(__)_____-____" onkeypress="mascara_tel(this)" maxlength="14" onkeyup="salto(this.name, this.value)" onkeydown="return somente_numero(event)">
        </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="endereco" placeholder="Avenida Brasil, 1000" name="endereco" required>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check" name="check">
                <label class="form-check-label" for="gridCheck">
                  Concordo com os <a href="termos.html">Termos de Privacidade</a>
                </label>  
              </div>
              <div class="logar">
                <p>Já tem conta? Entre <a href="login.html">aqui</a>
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
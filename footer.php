    <footer>
      <div class="container">
        <p>
          © Copyright TechVendas - 2022 - Todos os Direitos Reservados
        </p>
      </div>
    </footer>
  </div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Uteis-->
  <script src="assets/vendor/formulario/formulario.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script type="module" src="assets/js/scripts.js"></script>
  <script type="module" src="assets/js/home.js"></script>
  <script type="module" src="assets/js/produtos.js"></script>
  <script type="module" src="assets/js/produto.js"></script>
  <script type="module" src="assets/js/conta-produtos.js"></script>
  <script type="module" src="assets/js/conta-pedidos.js"></script>
  <script type="module" src="assets/js/conta-pedidos-detalhes.js"></script>
  <script type="module" src="assets/js/conta-meusdados.js"></script>
  <script type="module" src="assets/js/conta-alterarsenha.js"></script>
  <div id="modalCreateAccount" class="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header flex-wrap">
          <h5 class="modal-title w-100">Criar minha conta</h5>
          <p class="modal-subtitle">
            Dolor facilisi vel facilisis sed elit pretium ut amet eget
          </p>
        </div>
        <div class="modal-body">
          <form autocomplete="off">
            <div class="form-floating mb-3">
              <input autocomplete="off" type="text" class="form-control" id="floatingInputName" placeholder=" ">
              <label for="floatingInputName">Qual é o seu nome?</label>
            </div>
            <div class="form-floating mb-3">
              <input autocomplete="off" type="email" class="form-control" id="floatingInput" placeholder=" ">
              <label for="floatingInput">Qual é o seu email?</label>
            </div>
            <div class="form-floating mb-3">
              <input autocomplete="off" type="text" class="form-control" id="floatingInputTelefone" placeholder=" ">
              <label for="floatingInputTelefone">Qual é o seu whatsapp?</label>
            </div>
            <div class="form-floating mb-3">
              <input autocomplete="new-password" type="password" class="form-control" id="floatingPassword" placeholder=" ">
              <label for="floatingPassword">Defina sua senha</label>
            </div>
            <div class="form-floating">
              <input autocomplete="new-password" type="password" class="form-control" id="floatingConfirmPassword" placeholder=" ">
              <label for="floatingConfirmPassword">Confirme sua senha</label>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn d-flex align-items-center justify-content-between btn bt_green_1">
                CRIAR MINHA CONTA <i class="fal fa-long-arrow-right"></i>
              </button>
            </div>
            <div class="text-center">
              <a class="ja_tenho_conta login_modal" role="button" href="javascript:;">
                 Já tenho <strong>uma conta</strong>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="modalLogin" class="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header flex-wrap">
          <h5 class="modal-title w-100">Acessar minha conta</h5>
          <p class="modal-subtitle">
            Dolor facilisi vel facilisis sed elit pretium ut amet eget
          </p>
        </div>
        <div class="modal-body">
          <form action="conta-produtos.php" autocomplete="off">
            <div class="form-floating mb-3">
              <input autocomplete="off" type="email" class="form-control" id="floatingInput" placeholder=" ">
              <label for="floatingInput">Qual é o seu email?</label>
            </div>
            <div class="form-floating">
              <input autocomplete="new-password" type="password" class="form-control" id="floatingPassword" placeholder=" ">
              <label for="floatingPassword">Informe sua senha</label>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn d-flex align-items-center justify-content-between btn bt_green_1">
                ACESSAR MINHA CONTA <i class="fal fa-long-arrow-right"></i>
              </button>
            </div>
            <div class="text-center">
              <a class="esqueci_senha" role="button" href="javascript:;">
                Esqueci <strong>minha senha</strong>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="modalRequestPassword" class="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header flex-wrap">
          <h5 class="modal-title w-100">Esqueci minha senha</h5>
          <p class="modal-subtitle">
            Dolor facilisi vel facilisis sed elit pretium ut amet eget
          </p>
        </div>
        <div class="modal-body">
          <form autocomplete="off">
            <div class="form-floating mb-3">
              <input autocomplete="off" type="email" class="form-control" id="floatingInput" placeholder=" ">
              <label for="floatingInput">Qual é o seu email?</label>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn d-flex align-items-center justify-content-between btn bt_green_1">
                RECUPERAR SENHA <i class="fal fa-long-arrow-right"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
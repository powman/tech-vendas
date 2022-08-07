<?php include 'header-logged.php'; ?>
<div id="contaAlterarSenha">
    <section class="todos_os_produtos">
      <div class="dv1">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-3 menuLateral">
              <div class="dv2">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex filter-categoria justify-content-between align-items-center">
                  MEU NEGÓCIO
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a title="" class="d-flex align-items-center w-100" href="conta-produtos.php">
                   <i class="fal fa-box-open"></i> PRODUTOS
                  </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a title="" class="d-flex align-items-center w-100" href="conta-pedidos.php">
                    <i class="fal fa-cart-arrow-down"></i> PEDIDOS
                  </a>
                </li>
                <li class="list-group-item filter-estado-produto d-flex justify-content-between align-items-center">
                  MINHA CONTA
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a title="" class="d-flex align-items-center w-100" href="conta-meusdados.php">
                    <i class="fal fa-user-circle"></i> MEUS DADOS
                  </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a title="" class="d-flex align-items-center active w-100" href="conta-alterarsenha.php">
                    <i class="fal fa-lock-alt"></i> ALTERAR SENHA
                  </a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a title="" class="d-flex align-items-center w-100" href="index.php">
                    <i class="fal fa-power-off"></i> SAIR DESSA SESSÃO
                  </a>
                </li>
              </ul>
              </div>
            </div>
            <div class="col-12 col-lg-9">
              <div>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button w-100 d-block collapsed" type="button">
                        <div class="row d-flex align-items-center">
                          <div class="col-12 col-lg-12">
                            <div class="cped1 d-flex align-items-center">
                            Meus dados pessoais
                            </div>
                          </div>
                        </div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse show">
                      <div class="accordion-body">
                        <form @submit="handleSubmit" id="formUpdate">
                          <div class="cped7 d-flex ">
                            <div class="w-100">
                              <div class="row">
                                <div class="col-12 col-lg-4">
                                  <div class="form-floating mb-0">
                                    <input v-model="dados.senhaatual" type="password" class="form-control" id="senhaatual" placeholder=" ">
                                    <label for="senhaatual">Senha Atual</label>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                  <div class="form-floating mb-0">
                                    <input v-model="dados.novasenha" type="password" class="form-control" id="novasenha" placeholder=" ">
                                    <label for="novasenha">Nova Senha</label>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                  <div class="form-floating mb-0">
                                    <input v-model="dados.confsenha" type="password" class="form-control" id="confsenha" placeholder=" ">
                                    <label for="confsenha">Confirme a senha</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="cped8 d-lg-flex justify-content-lg-end">
                            <button type="submit" class="btn mt-0 d-flex align-items-center justify-content-between btn bt_green_1">
                              ATUALIZAR <i class="fal ms-3 fa-long-arrow-right"></i>
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<?php include 'footer.php'; ?>
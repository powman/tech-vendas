<?php include 'header-logged.php'; ?>
<div id="contaAddProdutos">
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
                  <a title="" class="d-flex active align-items-center w-100" href="conta-produtos.php">
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
                  <a title="" class="d-flex align-items-center w-100" href="conta-alterarsenha.php">
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
                <div class="accordion">
                  <div class="row">
                    <div class="col-12 col-lg-6">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button w-100 d-block collapsed" type="button">
                            <div class="row d-flex align-items-center">
                              <div class="col-12 col-lg-12">
                                <div class="cped1 d-flex align-items-center">
                                  Detalhes do produto
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
                                    <div class="col-12 mb-3 col-lg-12">
                                      <div class="form-floating mb-0">
                                        <input v-model="dados.titulo_produto" type="text" class="form-control" id="titulo_produto" placeholder=" ">
                                        <label for="titulo_produto">Título do produto</label>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                      <div class="form-floating mb-0">
                                        <textarea v-model="dados.descricao_curta" class="form-control" placeholder=" " id="descricao_curta"></textarea>
                                        <label for="descricao_curta">Descrição curta</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <h2 class="accordion-header">
                                <button class="accordion-button w-100 d-block p-0 collapsed" type="button">
                                  <div class="row d-flex align-items-center">
                                    <div class="col-12 col-lg-12">
                                      <div class="cped1 d-flex align-items-center">
                                        Mais detalhes
                                      </div>
                                    </div>
                                  </div>
                                </button>
                              </h2>
                              <div class="cped7sub">
                                <div class="row">
                                  <div class="col-12 mb-3 mb-3 col-lg-12">
                                    <div class="form-floating mb-0">
                                      <input v-model="dados.titulo_longo" type="text" class="form-control" id="titulo_longo" placeholder=" ">
                                      <label for="titulo_longo">Título da descrição longa</label>
                                    </div>
                                  </div>
                                  <div class="col-12 mb-3 col-lg-12">
                                    <div class="form-floating mb-0">
                                      <textarea v-model="dados.descricao_longa" class="form-control" placeholder=" " id="descricao_longa"></textarea>
                                      <label for="descricao_longa">Descrição longa</label>
                                    </div>
                                  </div>
                                  <div v-for="(item, key) in dados.diferencial" :key="key" class="col-12 mb-3 col-lg-12">
                                    <div class="row">
                                      <div class="col-12 col-lg-10">
                                        <div class="form-floating mb-0">
                                          <input v-bind:value="item.titulo" v-model="dados.diferencial[key].titulo" type="text" class="form-control" id="senhaatual" placeholder=" ">
                                          <label for="senhaatual">Diferencial {{key+1}}</label>
                                        </div>
                                      </div>
                                      <div v-if="dados.diferencial.length === key+1" class="col-12 col-lg-2">
                                        <a @click="addDiferencial" class="btn btnMais d-flex justify-content-center align-items-center" href="javascript:;">
                                          <i class="fal fa-plus"></i>
                                        </a>
                                      </div>
                                      <div v-if="dados.diferencial.length !== key+1" class="col-12 col-lg-2">
                                        <a @click="removeDiferencial(key)" class="btn btnMais d-flex justify-content-center redBtn align-items-center" href="javascript:;">
                                          <i class="fal fa-trash-alt"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button w-100 d-block collapsed" type="button">
                            <div class="row d-flex align-items-center">
                              <div class="col-12 col-lg-12">
                                <div class="cped1 d-flex align-items-center">
                                  Galeria
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
                                    <div class="col-12 mb-3 col-lg-12">
                                      Galeria aqui
                                    </div>
                                  </div>
                                </div>
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
        </div>
      </div>
    </section>
</div>
<?php include 'footer.php'; ?>
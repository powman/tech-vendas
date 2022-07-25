<?php include 'header-logged.php'; ?>
<div id="contaPedidosDetalhes">
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
                  <a title="" class="d-flex active align-items-center w-100" href="conta-pedidos.php">
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
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" :id="'headingOne'+pedido.id">
                      <button class="accordion-button w-100 d-block collapsed" type="button">
                        <div class="row d-flex align-items-center">
                          <div class="col-12 col-lg-12">
                            <div class="cped1 d-flex align-items-center">
                              Produtos do pedido
                            </div>
                          </div>
                        </div>
                      </button>
                    </h2>
                    <div class="accordion-collapse collapse show">
                      <div class="accordion-body">
                        <ul class="list-group">
                          <li v-for="(produto, key) in pedido.produtos" :key="produto.id" class="list-group-item">
                            <div class="row d-flex align-items-center">
                              <div class="col-12 col-lg-1">
                                <div class="img" :style="{ background: 'url('+produto.photo+'), #F8F8F8' }"></div>
                              </div>
                              <div class="col-12 col-lg-7">
                                <div class="cped6_">
                                  <p class="cped5">
                                    {{produto.unidade}} unidade(s)
                                  </p>
                                  <h3 class="cped6">
                                    {{produto.title}}
                                  </h3>
                                </div>
                              </div>
                              <div class="col-12 col-lg-4">
                                <div class="row">
                                  <div class="col-12 col-lg-6">
                                    <div class="kfjalkfas">
                                      <p class="cped2">
                                        Unidade
                                      </p>
                                      <h3 class="cped3">
                                        {{produto.preco_unidade}}
                                      </h3>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-6">
                                    <div class="kfjalkfas">
                                      <p class="cped2">
                                        Total
                                      </p>
                                      <h3 class="cped3">
                                        {{produto.preco_total}}
                                      </h3>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="cpd1">
                          Dados do cliente
                        </div>
                        <form id="formUpdate">
                          <div class="cped7 d-flex ">
                            <div class="w-100">
                              <div class="row">
                                <div class="col-12 col-lg-4">
                                  <div class="form-floating mb-0">
                                    <input v-model="pedido.comprador" type="text" class="form-control" id="nome" placeholder=" ">
                                    <label for="nome">Nome</label>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                  <div class="form-floating mb-0">
                                    <input v-model="pedido.email" type="email" class="form-control" id="email" placeholder=" ">
                                    <label for="email">E-mail</label>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                  <div class="form-floating mb-0">
                                    <input v-model="pedido.whatsapp" @keyup='(e) => { pedido.whatsapp = maskTelefone(e.target.value) }' type="tel" class="form-control" id="whatsapp" placeholder=" ">
                                    <label for="whatsapp">Whatsapp</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="cped8 d-lg-flex justify-content-lg-end">
                            <div class="form-floating mb-0 me-lg-3">
                              <input v-model="pedido.status" type="text" class="form-control" id="status" placeholder=" ">
                              <label for="status">Status</label>
                            </div>
                            <a :href="'conta-pedidos-detalhes.php?id='" class="btn mt-0 d-flex align-items-center justify-content-between btn bt_green_1">
                              ATUALIZAR STATUS <i class="fal ms-3 fa-long-arrow-right"></i>
                            </a>
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
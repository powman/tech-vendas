<?php include 'header-logged.php'; ?>
<div id="contaPedidos">
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
              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="input-group search">
                    <input type="text" class="form-control" placeholder="Procure um pedido..." aria-label="Procure um pedido..." aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
              <div>
                <div class="accordion" id="accordionExample">
                  <div v-for="(pedido, key) in pedidos" :key="pedido.id" class="accordion-item">
                    <h2 class="accordion-header" :id="'headingOne'+pedido.id">
                      <button :class="key === 0 ? 'accordion-button' : 'accordion-button collapsed'" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapseOne'+pedido.id" :aria-expanded="key === 0 ? 'true' : 'false'" :aria-controls="'collapseOne'+pedido.id">
                        <div class="row w-100 d-flex align-items-center">
                          <div class="col-12 col-lg-2">
                            <div class="cped1 d-flex align-items-center">
                              #{{pedido.id}}
                            </div>
                          </div>
                          <div class="col-12 col-lg-8">
                            <div class="d-flex align-items-center">
                              <div class="row w-100">
                                <div class="col-12 col-lg-3">
                                  <div>
                                    <p class="cped2">
                                      Data
                                    </p>
                                    <h3 class="cped3">
                                      {{pedido.data}}
                                    </h3>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                  <div>
                                    <p class="cped2">
                                      Comprador
                                    </p>
                                    <h3 class="cped3">
                                      {{pedido.comprador}}
                                    </h3>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                  <div>
                                    <p class="cped2">
                                      Total
                                    </p>
                                    <h3 class="cped3">
                                      {{pedido.total}}
                                    </h3>
                                  </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                  <div>
                                    <p class="cped2">
                                      Status
                                    </p>
                                    <h3 class="cped3">
                                      {{pedido.status}}
                                    </h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-lg-2">
                            <div class="d-flex align-items-center">
                              <div class="cped4 w-100 d-flex align-items-center justify-content-center">
                                {{pedido.produtos.length}} Produto(s)
                              </div>
                            </div>
                          </div>
                        </div>
                      </button>
                    </h2>
                    <div :id="'collapseOne'+pedido.id" :class="'accordion-collapse collapse '+(key === 0 ? 'show' : '')" :aria-labelledby="'headingOne'+pedido.id" data-bs-parent="#accordionExample">
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
                        <div class="cped7 d-flex justify-content-lg-end">
                          <a :href="'conta-pedidos-detalhes.php?id='+pedido.id" class="btn mt-0 d-flex align-items-center justify-content-between btn bt_green_1">
                            DETALHES <i class="fal ms-3 fa-long-arrow-right"></i>
                          </a>
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
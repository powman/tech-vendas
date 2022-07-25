<?php include 'header-logged.php'; ?>
<div id="contaProdutos">
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
              <div class="row">
                <div class="col-12 col-lg-8">
                  <div class="input-group search">
                    <input type="text" class="form-control" placeholder="Procure um produto..." aria-label="Procure um produto..." aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                  </div>
                </div>
                <div class="col-12 col-lg-4">
                  <a href="produto.url" class="btn d-flex align-items-center w-100 mt-0 justify-content-between btn bt_green_1">
                    ADICIONAR PRODUTO <i class="fal fa-long-arrow-right"></i>
                  </a>
                </div>
              </div>
              <div>
                <div v-for="(produto, key) in produtos_list" :key="produto.id" class="cpprod1">
                  <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-3">
                      <div class="cpprod2">
                        <div class="img" style="background:url(https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296), #F8F8F8;"></div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="cpprod3_">
                        <h2 class="cpprod3">
                          {{produto.title}}
                        </h2>
                        <p class="cpprod4">
                          {{produto.description}}
                        </p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-3">
                      <div class="cpprod5 d-flex justify-content-center align-items-center">
                        <div class="itemAcao d-flex d-lg-block">
                          <div class="mb-0 mb-lg-0 me-4 me-lg-0">
                            <a @click="deletar(produto.id, key)" href="javascript:;">
                              <i class="fal fa-trash-alt deletar"></i> EXCLUIR
                            </a>
                          </div>
                          <div>
                            <a href="">
                              <i class="fal fa-edit"></i> EDITAR
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
      </div>
    </section>
</div>
<?php include 'footer.php'; ?>
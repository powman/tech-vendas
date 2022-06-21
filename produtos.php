<?php include 'header.php'; ?>
<div id="produtosList">
    <section class="todos_os_produtos">
      <div class="dv1">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-3 menuLateral">
              <div class="input-group search">
                <input type="text" class="form-control" placeholder="Procure um produto..." aria-label="Procure um produto..." aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
              </div>
              <div class="dv2">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex filter-categoria justify-content-between align-items-center">
                  Categorias
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a title="" class="d-flex active align-items-center w-100 justify-content-between" href="produtos.php">
                    Todos os produtos <i class="fal fa-angle-right"></i>
                  </a>
                </li>
                <li v-for="categoria in filter_categorias_produtos" :key="categoria.id" class="list-group-item d-flex justify-content-between align-items-center">
                  <a title="" class="d-flex  align-items-center w-100 justify-content-between" :href="categoria.url">
                    {{categoria.title}} <i class="fal fa-angle-right"></i>
                  </a>
                </li>
                <li class="list-group-item filter-regiao d-flex justify-content-between align-items-center">
                  REGIÃO
                </li>
                <li>
                  <select class="form-select filter-select form-select-lg">
                    <option selected>Selecione sua regão</option>
                    <option v-for="option in filter_regiao_produtos" v-bind:value="option.id">{{option.title}}</option>
                  </select>
                </li>
                <li class="list-group-item filter-faixa-preco d-flex justify-content-between align-items-center">
                  FAIXA DE PREÇO
                </li>
                <li>
                  <ul class="list-unstyled filter-faixa-preco-ul">
                    <li v-for="price in filter_price_produtos" :key="price.id" class="list-group-item no-border d-flex align-items-center">
                        <input :id="'inputprice'+price.id" name="filter_price" v-bind:value="price.id" class="me-2" type="radio" />
                        <label :for="'inputprice'+price.id">{{price.title}}</label>               
                    </li>
                  </ul>
                </li>
                <li class="list-group-item filter-estado-produto d-flex justify-content-between align-items-center">
                  ESTADO DO PRODUTO
                </li>
                <li>
                  <select class="form-select filter-select form-select-lg">
                    <option v-for="option in filter_estado_produto_produtos" v-bind:value="option.id">{{option.title}}</option>
                  </select>
                </li>
              </ul>
              </div>
            </div>
            <div class="col-12 col-lg-9">
              <div class="bannertop">
                <carousel class="bannertop3" :settings="settings_banners_produtos_body" ref="banners_todos_os_produtos">
                  <slide v-for="banner in banners_produtos_body_produtos" :key="banner.id">
                    <div class="bannertop2 w-100 h-100">
                      <div class="row">
                        <div class="col-12 col-lg-6 text-start">
                          <div>
                            <span class="bannertop4">{{banner.discount}}</span>
                          </div>
                          <h2 class="bannertop5">
                            {{banner.title}}
                          </h2>
                          <p class="bannertop6">
                            {{banner.description}}
                          </p>
                          <div class="bannertop7 d-none d-lg-block">
                            <a :href="banner.url" class="btn d-flex align-items-center justify-content-between btn bt_green_3">
                              VER MAIS DETALHES <i class="fal fa-long-arrow-right"></i>
                            </a>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="bannertop_img">
                            <img alt="" :src="banner.photo"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </slide>
                  <template #addons>
                    <Navigation />
                  </template>
                </carousel>
              </div>
              <div class="row">
                <div v-for="produto in produtos_list" :key="produto.id" class="col-12 col-lg-4">
                  <div class="component_produto">
                    <div>
                      <a class="img" :href="produto.url" :style="{ background: 'url('+produto.photo+'), #F8F8F8' }"></a>
                    </div>
                    <div class="dc0">
                      <h2 class="dc11">
                        {{produto.title}}
                      </h2>
                      <p class="dc22">
                        {{produto.description}}
                      </p>
                      <div class="blc_preco d-flex justify-content-between">
                        <del v-if="produto.price_regular && produto.price_discount" class="preco_regular d-flex align-items-center">
                            <span>R$</span> {{produto.price_regular}}
                        </del>
                        <ins v-if="produto.price_discount" class="preco_promocao d-flex align-items-start">
                            <span>R$</span> {{produto.price_discount}}
                        </ins>
                        <ins v-if="!produto.price_discount" class="preco_promocao d-flex align-items-start">
                            <span>R$</span> {{produto.price_regular}}
                        </ins>
                      </div>
                      <div class="dc23">
                        <a :href="produto.url" class="btn d-flex align-items-center justify-content-between btn bt_green_1">
                          SAIBA MAIS <i class="fal fa-long-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                    <div v-if="produto.disabled" class="disabled_produto d-flex justify-content-center align-items-center">
                      <p class="redbg">
                        PRODUTO<br/>INDISPONÍVEL
                      </p>
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
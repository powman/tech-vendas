<?php include 'header.php'; ?>

<div id="app">
    <section class="bgBanner">
      <div class="container">
        <div class="blc_banner">
          <Carousel :settings="settings_banners">
            <Slide v-for="banner in banners" :key="banner.id">
              <div class="item">
                <div class="row w-lg-100 d-flex align-items-center justify-content-between">
                    <div class="col-12 col-lg-6 order-lg-1 order-2">
                        <div class="dv1">
                            <span v-if="banner.discount" class="dv2">
                                {{banner.discount}}
                            </span>
                            <h2>
                                {{banner.title}}
                            </h2>
                            <p class="p1">
                              {{banner.description}}
                            </p>
                            <div class="blc_preco d-flex justify-content-center justify-content-lg-start">
                                <del v-if="banner.price_regular && banner.price_discount" class="preco_regular d-flex align-items-center">
                                    <span>R$</span> {{banner.price_regular}}
                                </del>
                                <ins v-if="banner.price_discount" class="preco_promocao d-flex align-items-start">
                                    <span>R$</span> {{banner.price_discount}}
                                </ins>
                                <ins v-if="!banner.price_discount" class="preco_promocao d-flex align-items-start">
                                    <span>R$</span> {{banner.price_regular}}
                                </ins>
                            </div>
                            <a :target="banner.target" v-if="banner.url" :href="banner.url" class="btn d-flex align-items-center justify-content-between btn bt_banner_Saiba_mais">
                                VER MAIS DETALHES <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-lg-2 order-1 banner_photo">
                        <img alt="" class="img-fluid" :src="banner.photo"/>
                    </div>
                </div>
              </div>
            </Slide>
            <template #addons>
              <Navigation class="d-none d-lg-flex" />
            </template>
          </Carousel>
        </div>
      </div>
    </section>
    <section class="produtoDestak">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-3">
            <h2 class="dv1">
              Produtos em destaque
            </h2>
            <div class="dv2 d-flex justify-content-center d-lg-block">
              <a href="javascript:;" v-on:click="prev_produto_destaque()">
                <img src="assets/images/left-carrousel.svg" alt="" />
              </a>
              <a class="dv3" v-on:click="next_produto_destaque()" href="javascript:;">
                <img src="assets/images/right-carrousel.svg" alt="" />
              </a>
            </div>
            <div class="dv4 d-none d-lg-block">
              <a href="produtos.php" class="btn d-flex align-items-center justify-content-between btn bt_green_1">
                VER TODOS <i class="fal fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-9 blc-carrousel-destaque">
            <carousel ref="produtos_detaque" :settings='settings_produtos_destaque' :breakpoints='breakpoints_produtos_destaque'>
              <slide v-for="produto in produtos_destaque" :key="produto.id">
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
              </slide>
            </carousel>
          </div>
        </div>
      </div>
    </section>
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
                <li v-for="categoria in filter_categorias" :key="categoria.id" class="list-group-item d-flex justify-content-between align-items-center">
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
                    <option v-for="option in filter_regiao" v-bind:value="option.id">{{option.title}}</option>
                  </select>
                </li>
                <li class="list-group-item filter-faixa-preco d-flex justify-content-between align-items-center">
                  FAIXA DE PREÇO
                </li>
                <li>
                  <ul class="list-unstyled filter-faixa-preco-ul">
                    <li v-for="price in filter_price" :key="price.id" class="list-group-item no-border d-flex align-items-center">
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
                    <option v-for="option in filter_estado_produto" v-bind:value="option.id">{{option.title}}</option>
                  </select>
                </li>
              </ul>
              </div>
            </div>
            <div class="col-12 col-lg-9">
              <div class="bannertop">
                <carousel class="bannertop3" :settings="settings_banners_produtos_body" ref="banners_todos_os_produtos">
                  <slide v-for="banner in banners_produtos_body" :key="banner.id">
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
                <div v-for="produto in produtos_home" :key="produto.id" class="col-12 col-lg-4">
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
              <div class="dv44 d-flex justify-content-center">
                <a href="produtos.php" class="btn d-flex align-items-center justify-content-between btn bt_green_2">
                  VER TODOS OS PRODUTOS <i class="fal fa-long-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sobre-nos">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-6 order-lg-1 order-2">
            <div class="dv1">
              <a class="d-flex justify-content-center align-items-center" data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=z2X2HaTvkl8">
                <img alt="" src="assets/images/play-icon.svg"/>
              </a>
            </div>
          </div>
          <div class="col-12 order-lg-2 order-1 col-lg-5">
            <h2>
              Um pouco sobre nós
            </h2>
            <p>
              Consequat rhoncus ultrices elit vivamus malesuada porttitor consequat lorem gravida. Eget pellentesque phasellus et habitant. Id pretium dui commodo at aliquet donec ultrices et donec. Viverra rhoncus eu nisi, id arcu ut justo. Duis eu senectus fermentum tempor. At auctor facilisis ut felis aliquet.<br/><br/>
              Quis dictum laoreet amet arcu aliquet egestas duis massa. Nibh mauris massa duis in ipsum velit, nullam enim. Dictumst viverra fermentum vitae quisque tellus fringilla magna.
            </p>
          </div>
        </div>
      </div>
    </section>
</div>

<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>
<div id="produtoSingle">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5">
            <div class="prod_img_full">
              <a :href="photo_detach" data-fancybox="image-gallery">
                <img class="img-fluid" :src="photo_detach"/>
              </a>
            </div>
            <div class="thumbnails_blc">
              <carousel :settings="settings_thumbnails" :breakpoints='breakpoints_thumbnails'>
                <slide v-for="photo in thumbnails" :key="photo.id">
                  <a class="img" @click="photo_detach = photo.photo;" href="javascript:;" :style="{ background: 'url('+photo.photo+'), #FFFFFF' }">
                  </a>
                </slide>
                <template #addons>
                  <Navigation />
                  <Pagination />
                </template>
              </carousel>
            </div>
          </div>
          <div class="col-12 col-lg-4">
             <h1 class="prod1">
              {{title}}
             </h1>
             <p v-html="description" class="prod2">
              
             </p>
             <div class="row d-flex align-items-center">
              <div class="col-12 col-lg-3">
                <select class="form-select form-select-lg">
                  <option v-for="option in qtdes" v-bind:value="option">{{option}}</option>
                </select>
              </div>
              <div class="col-6 col-lg-4">
                <del class="d-flex align-items-center justify-content-center">
                  <span>R$</span> {{priceDiscount}}
                </del>
              </div>
              <div class="col-6 col-lg-5">
                <bdi class="d-flex align-items-center justify-content-center">
                 <span>R$</span> {{price}}
                </bdi>
              </div>
             </div>
             <div class="prod3">
              <a href="https://wa.me/5562985653255?text=texto aqui" target="_blank" class="btn d-flex align-items-center justify-content-center btn bt_zap">
                <i class="fab fa-whatsapp"></i> [61] 9 8899-1155
              </a>
             </div>
             <div>
              <a href="javascript:;" @click="btnComprar" class="btn d-flex align-items-center justify-content-between btn bt_comprar">
                COMPRAR AGORA <i class="fal fa-long-arrow-right"></i>
              </a>
             </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="prod4">
              <div class="blc-img d-flex justify-content-center">
                <img class="img-fluid" :src="bannerLateralImg"/>
              </div>
              <div class="prod6">
                <span v-if="bannerLateralDiscount" class="prod5">
                  {{bannerLateralDiscount}}
                </span>
                <h2>
                  {{bannerLateralTitle}}
                </h2>
                <p>
                  {{bannerLateralSubTitle}} 
                </p>
                <div>
                  <a :href="bannerLateralUrl" class="btn d-flex align-items-center justify-content-between btn bt_white">
                    VER MAIS DETALHES <i class="fal fa-long-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="bodyText">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <h2>
              MAIS CARACTERÍSTICAS DO MINI DRONE DJI MAVIC MINI 2
            </h2>
            <div class="bodyTextText" v-html="text">
              
            </dib>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="dv7p">
            <div v-for="item in list" :key="index" class="dv5p">
              <div class="dv6p">
                <h2 v-html="item"></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="bodyRelac">
      <div class="container">
        <h2 class="titlep">
          Você também vai gostar destes produtos
        </h2>
        <div class="bodyRelac1">
          <carousel :settings='settings_produtos_relacionados' :breakpoints='breakpoints_produtos_relacionados'>
            <slide v-for="produto in produtos_relacionados" :key="produto.id">
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
        <div class="btn-td-prod d-flex justify-content-center">
          <a href="produtos.php" class="btn d-flex align-items-center justify-content-between btn bt_green_2">
            VER TODOS OS PRODUTOS <i class="fal fa-long-arrow-right"></i>
          </a>
        </div>
      </div>
    </section>
    <section id="formInteresseProduto" style="display: none;">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-3">
            <h2>
              Tenho interesse<br/>neste produto
            </h2>
          </div>
          <div class="col-12 col-lg-9">
            <form>
              <div class="row">
                <div class="col-6 col-lg-3">
                  <div class="form-floating mb-0">
                    <input v-model="nome" type="text" class="form-control" id="nome" placeholder=" ">
                    <label for="nome">Meu nome é:</label>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="form-floating mb-0">
                    <input v-model="email" type="email" class="form-control" id="email" placeholder=" ">
                    <label for="email">Meu e-mail é:</label>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="form-floating mb-0">
                    <input v-model="whatsapp" type="tel" class="form-control" id="whatsapp" placeholder=" ">
                    <label for="whatsapp">Meu whatsapp:</label>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <a href="javascript:;" @click="formSend" class="btn mt-0 d-flex align-items-center justify-content-between btn bt_comprar">
                    ENVIAR <i class="fal fa-long-arrow-right"></i>
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section id="formFeedbackProduto" style="display: none;">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-1 circlelk">
            <i class="fal fa-check-circle"></i>
          </div>
          <div class="col-12 col-lg-9">
            <h2>Recebemos seus dados e entraremos em contato.</h2>
          </div>
          <div class="col-12 col-lg-2">
            <a href="javascript:;" id="btnOk" class="btn d-flex align-items-center justify-content-between btn bt_comprar mt-0">
              OK <i class="fal fa-long-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <div class="bgForm" style="display: none;"></div>
</div>
<?php include 'footer.php'; ?>
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
              <carousel :settings="settings_thumbnails">
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
              <div class="col-12 col-lg-4">
                <del class="d-flex align-items-center justify-content-center">
                  <span>R$</span> {{priceDiscount}}
                </del>
              </div>
              <div class="col-12 col-lg-5">
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
              <a href="produtos.php" class="btn d-flex align-items-center justify-content-between btn bt_comprar">
                COMPRAR AGORA <i class="fal fa-long-arrow-right"></i>
              </a>
             </div>
          </div>
          <div class="col-12 col-lg-3">
            fdsfs
          </div>
        </div>
      </div>
    </section>
</div>
<?php include 'footer.php'; ?>
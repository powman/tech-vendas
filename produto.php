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
            fdsfs
          </div>
          <div class="col-12 col-lg-3">
            fdsfs
          </div>
        </div>
      </div>
    </section>
</div>
<?php include 'footer.php'; ?>
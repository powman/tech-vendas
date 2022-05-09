import { createApp } from 'vue'
import VueCarousel from '@chenfengyuan/vue-carousel'

const app = createApp({
    data() {
    return {
        banners: [
        `
        <div class="item">
            <div class="row d-flex align-items-center ">
                <div class="col-12 col-lg-6">
                    <div class="dv1">
                        <span class="dv2">
                            17% OFF
                        </span>
                        <h2>
                            iPhone 13 Grafite 256gb
                        </h2>
                        <p class="p1">
                            Tela 6.1, câmera dupla de 12MP
                        </p>
                        <div class="blc_preco d-flex">
                            <del class="preco_regular d-flex align-items-center">
                                <span>R$</span> 7.500,00
                            </del>
                            <ins class="preco_promocao d-flex align-items-start">
                                <span>R$</span> 5.500,00
                            </ins>
                        </div>
                        <a href="" class="btn d-flex align-items-center justify-content-between btn-primary bt_banner_Saiba_mais">
                            VER MAIS DETALHES <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img alt="" class="img-fluid" src="assets/images/iphone13.png"/>
                </div>
            </div>
        </div>
        `,
        `
        <div class="item">
            <div class="row d-flex align-items-center ">
                <div class="col-12 col-lg-6">
                    <div class="dv1">
                        <span class="dv2">
                            17% OFF
                        </span>
                        <h2>
                            iPhone 13 Grafite 256gb
                        </h2>
                        <p class="p1">
                            Tela 6.1, câmera dupla de 12MP
                        </p>
                        <div class="blc_preco d-flex">
                            <del class="preco_regular d-flex align-items-center">
                                <span>R$</span> 7.500,00
                            </del>
                            <ins class="preco_promocao d-flex align-items-start">
                                <span>R$</span> 5.500,00
                            </ins>
                        </div>
                        <a href="" class="btn d-flex align-items-center justify-content-between btn-primary bt_banner_Saiba_mais">
                            VER MAIS DETALHES <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img alt="" class="img-fluid" src="assets/images/iphone13.png"/>
                </div>
            </div>
        </div>
        `
        ]
    }
    }
});

app.component(VueCarousel.name, VueCarousel);
app.mount('#app');
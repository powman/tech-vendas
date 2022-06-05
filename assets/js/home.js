const App = {
	components: {
		Carousel: VueCarousel.Carousel,
		Pagination: VueCarousel.Pagination,
		Navigation: VueCarousel.Navigation,
		Slide: VueCarousel.Slide
	},
	setup() {
		return {
            banners: [
                {
                    title: "iPhone 13 Grafite 256gb",
                    photo: "assets/images/iphone13.png",
                    discount: "17% OFF",
                    description: "Tela 6.1, câmera dupla de 12MP",
                    price_regular: "7.500,00",
                    price_discount: "5.500,00",
                    url: "https://www.google.com.br",
                    target: "_blank",
                },
                {
                    title: "iPhone 14 Grafite 256gb",
                    photo: "assets/images/iphone13.png",
                    discount: "1% OFF",
                    description: "Tela 7.1, câmera dupla de 12MP",
                    price_regular: "78.500,00",
                    price_discount: "50.500,00",
                    url: "https://www.google.com.br",
                    target: "_blank",
                },
            ],
			// carousel settings
			settings_produtos_destaque: {
				itemsToShow: 3.1,
				snapAlign: "start",
                wrapAround: true
			},
			// breakpoints are mobile first
			// any settings not specified will fallback to the carousel settings
			breakpoints: {
				// 700px and up
				700: {
					itemsToShow: 3.5,
					snapAlign: "center"
				},
				// 1024 and up
				1024: {
					itemsToShow: 5,
					snapAlign: "start"
				}
			}
		};
	}
};

Vue.createApp(App).mount("#app");

/*import { createApp } from 'vue'
import VueCarousel from '@chenfengyuan/vue-carousel'
import VueSlickCarousel from 'vue-slick-carousel'

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
            ],
            destaques_produtos: [
                `
                    <div class="component_produto">
                        fdsfsd
                    </div>
                `
            ]
        }
    }
});

app.component(VueCarousel.name, VueCarousel);
app.component(VueSlickCarousel.name, VueSlickCarousel);
app.mount('#app'); */
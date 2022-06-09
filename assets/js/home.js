const myCarousel = Vue.ref(null);
import { Fancybox } from "../vendor/vuejs/fancybox.esm.js";

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
                    id: 1,
                    title: "iPhone 13 Grafite 256gb",
                    photo: "assets/images/iphone13.png",
                    discount: "17% OFF",
                    description: "Tela 6.1, câmera dupla de 12MP",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br",
                    target: "_blank",
                },
                {
                    id: 2,
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
            settings_banners: {
                itemsToShow: 1,
                snapAlign: "center",
                autoplay: 7000,
                mouseDrag: false,
                wrapAround: true,
                touchDrag: false
            },
            produtos_destaque: [
                {
                    id: 1,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    price_discount: "5.500,00",
                    url: "https://www.google.com.br"
                },
                {
                    id: 2,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br"
                },
                {
                    id: 3,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br"
                },
                {
                    id: 4,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br"
                },
                {
                    id: 5,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br"
                },
            ],
            settings_produtos_destaque: {
				itemsToShow: 1,
				snapAlign: "center",
                wrapAround: true,
                touchDrag: true
			},
            breakpoints_produtos_destaque: {
				// 700px and up
				700: {
					itemsToShow: 3.1,
                    snapAlign: "start",
                    wrapAround: true,
                    mouseDrag: false,
                    wrapAround: true,
                    touchDrag: false
				},
			},
            filter_categorias: [
                {
                    id: 1,
                    title: "Smartphones",
                    url: "https://www.google.com.br"
                },
                {
                    id: 2,
                    title: "NOTEBOOKS",
                    url: "https://www.google.com.br"
                },
                {
                    id: 3,
                    title: "DRONES",
                    url: "https://www.google.com.br"
                },
                {
                    id: 4,
                    title: "SMARTWATCHS",
                    url: "https://www.google.com.br"
                },
                {
                    id: 5,
                    title: "MONITORES",
                    url: "https://www.google.com.br"
                },
            ],
            filter_regiao: [
                {
                    id: 1,
                    title: "Goiânia"
                },
                {
                    id: 2,
                    title: "Aparecida de Goiânia"
                },
                {
                    id: 3,
                    title: "Trindade"
                },
                {
                    id: 4,
                    title: "Senador Canedo"
                }
            ],
            filter_price: [
                {
                    id: 1,
                    title: "ATÉ R$800,00"
                },
                {
                    id: 2,
                    title: "R$801,00 - R$1.500,00"
                },
                {
                    id: 3,
                    title: "R$1.500,01 - R$2.500,00"
                }
            ],
            filter_estado_produto: [
                {
                    id: 1,
                    title: "Produto novo"
                },
                {
                    id: 2,
                    title: "Produto usado"
                }
            ],
            produtos_home: [
                {
                    id: 1,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    price_discount: "5.500,00",
                    url: "https://www.google.com.br"
                },
                {
                    id: 2,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br"
                },
                {
                    id: 3,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br"
                },
                {
                    id: 4,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br"
                },
                {
                    id: 5,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br"
                },
                {
                    id: 6,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "https://www.google.com.br"
                },
            ],
            banners_produtos_body: [
                {
                    id: 1,
                    title: "Apple Watch Series 7",
                    photo: "assets/images/apple-watch.png",
                    discount: "17% OFF",
                    description: "Caixa em rosé azul de 45 mm ",
                    url: "https://www.google.com.br",
                },
                {
                    id: 2,
                    title: "Apple Watch Series 7",
                    photo: "assets/images/apple-watch.png",
                    discount: "17% OFF",
                    description: "Caixa em rosé azul de 45 mm ",
                    url: "https://www.google.com.br",
                },
            ],
		};
	},
    mounted() {
        // this.$refs.child will hold an instance of <Child />
        console.log(this.$refs);
    },
    methods: {
        next_produto_destaque() {
            this.$refs.produtos_detaque.next();
        },
        next_banner_todos_os_produtos() {
            this.$refs.produtos_detaque.next();
        },
        prev_produto_destaque() {
            this.$refs.produtos_detaque.prev();
        },
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
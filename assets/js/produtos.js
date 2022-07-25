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
            filter_categorias_produtos: [
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
            filter_regiao_produtos: [
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
            filter_price_produtos: [
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
            filter_estado_produto_produtos: [
                {
                    id: 1,
                    title: "Produto novo"
                },
                {
                    id: 2,
                    title: "Produto usado"
                }
            ],
            produtos_list: [
                {
                    id: 1,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    price_discount: "5.500,00",
                    url: "produto.php",
                    disabled: true
                },
                {
                    id: 2,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "produto.php"
                },
                {
                    id: 3,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "produto.php"
                },
                {
                    id: 4,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "produto.php"
                },
                {
                    id: 5,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "produto.php"
                },
                {
                    id: 6,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 ",
                    price_regular: "7.500,00",
                    url: "produto.php"
                },
            ],
            banners_produtos_body_produtos: [
                {
                    id: 1,
                    title: "Apple Watch Series 7",
                    photo: "assets/images/apple-watch.png",
                    discount: "17% OFF",
                    description: "Caixa em rosé azul de 45 mm ",
                    url: "produto.php",
                },
                {
                    id: 2,
                    title: "Apple Watch Series 7",
                    photo: "assets/images/apple-watch.png",
                    discount: "17% OFF",
                    description: "Caixa em rosé azul de 45 mm ",
                    url: "produto.php",
                },
            ],
            settings_banners_produtos_body_produtos: {
				itemsToShow: 1,
				snapAlign: "center",
                wrapAround: false,
                touchDrag: true,
                mouseDrag: false
			},
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

Vue.createApp(App).mount("#produtosList");
const myCarousel = Vue.ref(null);
import { Fancybox } from "../vendor/vuejs/fancybox.esm.js";

const App = {
	components: {
		Carousel: VueCarousel.Carousel,
		Pagination: VueCarousel.Pagination,
		Navigation: VueCarousel.Navigation,
		Slide: VueCarousel.Slide
	},
    data() {
        return {
            photo_detach:"https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=1144&hei=1144&fmt=jpeg&qlt=95&.v=1534191258296"
        }
    },
	setup() {
		return {
            title:"Mini drone DJI Mavic Mini 2 DRDJI017",
            description:`
                arius mi phasellus elementum felis sit. Sit felis viverra sagittis tellus et mattis etiam.<br/><br/>

                Pharetra morbi aliquam vel aliquam varius. Habitasse phasellus dictum aliquam a.<br/><br/>

                Pulvinar vestibulum at nunc neque fringilla.
            `,
            text:`
            Felis nunc ipsum diam, et. Risus volutpat semper hendrerit arcu, pellentesque faucibus dictum. Habitant tempor nisi gravida ultrices varius eleifend enim felis. Commodo ullamcorper quam nulla et. Pretium tristique viverra scelerisque lacus eget ut lorem. Est vitae odio orci commodo id.<br/><br/>

            Sit quam quam viverra augue nibh sapien integer at. Integer facilisi pellentesque in sit massa sagittis, viverra sollicitudin consectetur. Praesent vitae, bibendum hendrerit metus eu sit sed adipiscing neque. Molestie a, nulla mauris turpis lorem aliquet elementum ipsum. Id adipiscing viverra venenatis, vitae id condimentum nulla. Lorem mus ut viverra vestibulum quis ullamcorper. Platea porttitor viverra et donec.<br/><br/>
            
            Ac pulvinar eu diam mi neque magna non vel. Mauris elit quam amet ipsum eu. Purus, dapibus ultrices tristique sagittis, nulla pharetra, est facilisi. Id quis praesent ut turpis at in scelerisque et id. Neque ut at morbi pharetra, at vitae iaculis scelerisque aliquet. Turpis id feugiat adipiscing eget scelerisque turpis. Urna id orci integer tellus.
            `,
            list:[
                'Felis nunc ipsum diam et;',
                'Risus volutpat semper hendrerit arcu;',
                'Habitant tempor nisi gravida ultrices varius eleifend enim felis.',
                'Commodo ullamcorper quam nulla et.',
                'Urna id orci integer tellus.',
            ],
            priceDiscount:"6.725,00",
            price: "5.725,00",
            qtdes:[
                1,
                2,
                3,
                4,
                5,
                6
            ],
            bannerLateralImg:"assets/images/watch.png",
            bannerLateralDiscount:"17% OFF",
            bannerLateralTitle:"Apple Watch Series 7",
            bannerLateralSubTitle:"Caixa em rosé azul de 45 mm ",
            bannerLateralUrl: "https://www.google.com",
            thumbnails: [
                {
                    id: 1,
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=1144&hei=1144&fmt=jpeg&qlt=95&.v=1534191258296",
                },
                {
                    id: 2,
                    photo: "https://cdn.awsli.com.br/600x1000/514/514723/produto/73787877/d7ac3cd840.jpg",
                },
                {
                    id: 3,
                    photo: "https://images.kabum.com.br/produtos/fotos/103021/drone-multilaser-hawk-camera-hd-fpv-alcance-max-150m-autonomia-ate-10min-preto-es257-_drone-multilaser-hawk-camera-hd-fpv-alcance-max-150m-autonomia-ate-10min-preto-es257-_1564864928_gg.jpg",
                },
                {
                    id: 4,
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=1144&hei=1144&fmt=jpeg&qlt=95&.v=1534191258296",
                },
                {
                    id: 5,
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=1144&hei=1144&fmt=jpeg&qlt=95&.v=1534191258296",
                },
            ],
            settings_thumbnails: {
                itemsToShow: 2,
                snapAlign: "center",
                mouseDrag: false,
                wrapAround: false,
                touchDrag: true
            },
            breakpoints_thumbnails: {
				// 700px and up
				700: {
					itemsToShow: 3,
                    snapAlign: "center",
                    autoplay: 7000,
                    mouseDrag: false,
                    wrapAround: false,
                    touchDrag: true
				},
			},
            produtos_relacionados: [
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
            ],
            settings_produtos_relacionados: {
				itemsToShow: 1,
				snapAlign: "center",
                wrapAround: false,
                touchDrag: true,
			},
            breakpoints_produtos_relacionados: {
				// 700px and up
				700: {
					itemsToShow: 4.2,
                    snapAlign: "start",
                    wrapAround: false,
                    mouseDrag: true,
                    wrapAround: false,
                    touchDrag: false
				},
			},
		};
	},
    methods: {
        replacePhotoDetach: (url) => {
            this.photo_detach = url;
        },
        whatsappSend: (url) => {
            window.location.href="https://wa.me/5562985653255?text=texto aqui";
        },
        next_produto_relacionados() {
            this.$refs.produtos_relacionados.next();
        },
        prev_produto_relacionados() {
            this.$refs.produtos_relacionados.prev();
        },
    }
};

Vue.createApp(App).mount("#produtoSingle");
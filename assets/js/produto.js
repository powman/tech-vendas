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
                itemsToShow: 3,
                snapAlign: "center",
                autoplay: 7000,
                mouseDrag: false,
                wrapAround: false,
                touchDrag: true
            },
		};
	},
    methods: {
        replacePhotoDetach: (url) => {
            this.photo_detach = url;
        }
    }
};

Vue.createApp(App).mount("#produtoSingle");
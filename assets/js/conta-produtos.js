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
            produtos_list: [
                {
                    id: 1,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 "
                },
                {
                    id: 2,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 k jfdsalk fjasd jflsdkdj flsaj flkaj flkas jflkda jflkasd flkasd flsadk falsdk lkasd flkasd jfdlskajflkasd flask jflaksdfalk jfdsa"
                },
                {
                    id: 3,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 "
                },
                {
                    id: 4,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 "
                },
                {
                    id: 5,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 "
                },
                {
                    id: 6,
                    title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                    photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                    description: "Single com câmera 4K light gray DRDJI017 "
                },
            ],
		};
	},
    mounted() {
        // this.$refs.child will hold an instance of <Child />
        console.log(this.$refs);
    },
    methods: {
        deletar(id, index) {
            console.log(id, index);
            alert("Implementar o deletar aqui");
        },
    }
};

Vue.createApp(App).mount("#contaProdutos");

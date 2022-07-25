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
            pedidos: [
                {
                    id: 1,
                    data: "08 de abril",
                    comprador: "Jorge henrique fdsafsda fdsaa fsd fas fsad",
                    total: "R$ 6.225,00",
                    status: "Aguardando",
                    produtos: [
                        {
                            id: 1,
                            title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                            photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                            unidade: 1,
                            preco_unidade: "R$ 6.225,00",
                            preco_total: "R$ 6.225,00",
                        },
                        {
                            id: 2,
                            title: "Mini drone DJI Mavic Mini 2 DRDJI017 kfdjasl fjadslk fjsadlk fjasdlk fjsdlk jfalsk jfsadl jfdasl kfjsa lkfajk faslk fja fa",
                            photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                            unidade: 10,
                            preco_unidade: "R$ 6.225,00",
                            preco_total: "R$ 6.225,00",
                        },
                    ]
                },
                {
                    id: 2,
                    data: "09 de abril",
                    comprador: "Paulo Henrique",
                    total: "R$ 6.225,00",
                    status: "Entregue",
                    produtos: [
                        {
                            id: 1,
                            title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                            photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                            unidade: 1,
                            preco_unidade: "R$ 6.225,00",
                            preco_total: "R$ 6.225,00",
                        },
                        {
                            id: 2,
                            title: "Mini drone DJI Mavic Mini 2 DRDJI017 kfdjasl fjadslk fjsadlk fjasdlk fjsdlk jfalsk jfsadl jfdasl kfjsa lkfajk faslk fja fa",
                            photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                            unidade: 10,
                            preco_unidade: "R$ 6.225,00",
                            preco_total: "R$ 6.225,00",
                        },
                        {
                            id: 3,
                            title: "Mini drone DJI Mavic Mini 2 DRDJI017 kfdjasl fjadslk fjsadlk fjasdlk fjsdlk jfalsk jfsadl jfdasl kfjsa lkfajk faslk fja fa",
                            photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                            unidade: 10,
                            preco_unidade: "R$ 6.225,00",
                            preco_total: "R$ 6.225,00",
                        },
                    ]
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

Vue.createApp(App).mount("#contaPedidos");

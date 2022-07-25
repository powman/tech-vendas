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
            pedido:{
                id: 1,
                data: "08 de abril",
                comprador: "Jorge henrique",
                email: "paulophpweb@gmail.com",
                whatsapp: "(62) 9 9999-9999",
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
                        title: "Mini drone DJI Mavic Mini 2 DRDJI017",
                        photo: "https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/HM9Q2?wid=572&hei=572&fmt=jpeg&qlt=95&.v=1534191258296",
                        unidade: 1,
                        preco_unidade: "R$ 6.225,00",
                        preco_total: "R$ 6.225,00",
                    },
                ]
            },
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
        maskTelefone (v) {
            const self = this;
            if(v){
              var r = v.replace(/\D/g, "");
              r = r.replace(/^0/, "");
              if (r.length > 10) {
                r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
              } else if (r.length > 5) {
                r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
              } else if (r.length > 2) {
                r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
              } else {
                r = r.replace(/^(\d*)/, "($1");
              }
              self.pedido.whatsapp = r;
            }
        }
    }
};

Vue.createApp(App).mount("#contaPedidosDetalhes");

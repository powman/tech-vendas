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
            dados:{
                titulo_produto: "",
                descricao_curta: "",
                titulo_longo: "",
                descricao_longa: "",
                diferencial: [
                    {
                        titulo: "",
                    }
                ],
            },
		};
	},
    mounted() {
    },
    methods: {
        handleSubmit(e) {
          e.preventDefault();
          console.log(this.pedido);
          alert('Validar o formulario aqui');
        },
        addDiferencial: function() {
            this.dados.diferencial.push({
                titulo: "",
            });
        },
        removeDiferencial: function(key) {
            this.dados.diferencial.splice(key, 1);
        }
    }
};

Vue.createApp(App).mount("#contaAddProdutos");

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
                senhaatual: "",
                novasenha: "",
                confsenha: ""
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
    }
};

Vue.createApp(App).mount("#contaAlterarSenha");

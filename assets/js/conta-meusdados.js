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
                id: 1,
                comprador: "Jorge henrique",
                email: "paulophpweb@gmail.com",
                whatsapp: "(62) 9 9999-9999"
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

Vue.createApp(App).mount("#contaMeusDados");

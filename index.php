<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Gapoff, gapoff.com.br">
  <link rel="apple-touch-icon" href="assets/images/apple.png" />
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
  <meta name="description" content="">
  <meta itemprop="description" content="">
  <meta itemprop="name" content="Tech Vendas">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Tech Vendas">
  <meta name="twitter:description" content="">

  <!-- Open Graph geral (Facebook, Pinterest & Google+) -->
  <meta property="og:title" content="Tech Vendas">
  <meta property="og:description" content="">
  <meta property="og:url" content="/">
  <meta property="og:site_name" content="Tech Vendas">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:type" content="website">
  
  <!-- Libs CSS-->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css" />
  <link rel="stylesheet" href="assets/vendor/owl/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendor/aos/aos.css">

  <!--  Style -->
  <link href="assets/css/styles.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/vue3-carousel@0.1.40/dist/carousel.css" rel="stylesheet">

  <!-- Jquery-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <!-- vuejs -->
  <script src="assets/vendor//vuejs/vue.global.js"></script>
  <script src="assets/vendor/vuejs/carousel.js"></script>

  <title>Tech Vendas</title>
</head>

<body>
  <div id="app">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="/">
          <img
            src="assets/images/logo.svg"
            alt="Tech Vendas"
            loading="lazy"
            style="margin-top: -1px;"
          />
        </a>

        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button" 
          data-bs-toggle="collapse" 
          data-bs-target="#navbarNav" 
          aria-controls="navbarNav" 
          aria-expanded="false" 
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <!-- Left links -->
          <ul class="navbar-nav me-auto ms-lg-5 mb-2 mb-lg-0">
          
          </ul>
          <!-- Left links -->

          <div class="d-flex position-relative justify-content-center justify-content-lg-start align-items-center">
            <a role="button" href="#" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-link">
              Home
            </a>
            <a role="button" href="#" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-link">
              Produtos
            </a>
            <a role="button" href="#" data-bs-toggle="dropdown" aria-expanded="false" class="btn d-flex align-items-center justify-content-between btn-link">
              <i class="fal fa-user-circle"></i>
              Login
            </a>
            <a href="mailto:contato@appunisaude.com.br" class="btn d-flex align-items-center justify-content-between btn-header-contato">
              <i class="fal fa-user-circle"></i>
              cadastre-se
            </a>
          </div>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
      
    </nav>
    <!-- Navbar -->

    <!-- Interna -->
    <section class="bgBanner">
      <div class="container">
        <div class="blc_banner">
          <Carousel :touch-drag='false' :mouse-drag='false' :autoplay="7000" :wrap-around="true">
            <Slide v-for="banner in banners" :key="banner.id">
              <div class="item">
                <div class="row w-100 d-flex align-items-center justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="dv1">
                            <span v-if="banner.discount" class="dv2">
                                {{banner.discount}}
                            </span>
                            <h2>
                                {{banner.title}}
                            </h2>
                            <p class="p1">
                              {{banner.description}}
                            </p>
                            <div class="blc_preco d-flex">
                                <del v-if="banner.price_regular && banner.price_discount" class="preco_regular d-flex align-items-center">
                                    <span>R$</span> {{banner.price_regular}}
                                </del>
                                <ins v-if="banner.price_discount" class="preco_promocao d-flex align-items-start">
                                    <span>R$</span> {{banner.price_discount}}
                                </ins>
                                <ins v-if="!banner.price_discount" class="preco_promocao d-flex align-items-start">
                                    <span>R$</span> {{banner.price_regular}}
                                </ins>
                            </div>
                            <a :target="banner.target" v-if="banner.url" :href="banner.url" class="btn d-flex align-items-center justify-content-between btn bt_banner_Saiba_mais">
                                VER MAIS DETALHES <i class="fal fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img alt="" class="img-fluid" :src="banner.photo"/>
                    </div>
                </div>
              </div>
            </Slide>
            <template #addons>
              <Navigation />
            </template>
          </Carousel>
        </div>
      </div>
    </section>
    <section class="produtoDestak">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-3">
            <h2 class="dv1">
              Produtos em destaque
            </h2>
            <div class="dv2">
              <a href="javascript:;" v-on:click="prev_produto_destaque()">
                <img src="assets/images/left-carrousel.svg" alt="" />
              </a>
              <a class="dv3" v-on:click="next_produto_destaque()" href="javascript:;">
                <img src="assets/images/right-carrousel.svg" alt="" />
              </a>
            </div>
            <div class="dv4">
              <a href="produtos.php" class="btn d-flex align-items-center justify-content-between btn bt_green_1">
                VER TODOS <i class="fal fa-long-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-9 blc-carrousel-destaque">
            <carousel :touch-drag='false' :mouse-drag='false' ref="produtos_detaque" :settings='settings_produtos_destaque'>
              <slide v-for="produto in produtos_destaque" :key="produto.id">
                <div class="component_produto">
                  <div>
                    <a class="img" :href="produto.url" :style="{ background: 'url('+produto.photo+'), #F8F8F8' }"></a>
                  </div>
                  <div class="dc0">
                    <h2 class="dc11">
                      {{produto.title}}
                    </h2>
                    <p class="dc22">
                      {{produto.description}}
                    </p>
                    <div class="blc_preco d-flex justify-content-between">
                      <del v-if="produto.price_regular && produto.price_discount" class="preco_regular d-flex align-items-center">
                          <span>R$</span> {{produto.price_regular}}
                      </del>
                      <ins v-if="produto.price_discount" class="preco_promocao d-flex align-items-start">
                          <span>R$</span> {{produto.price_discount}}
                      </ins>
                      <ins v-if="!produto.price_discount" class="preco_promocao d-flex align-items-start">
                          <span>R$</span> {{produto.price_regular}}
                      </ins>
                    </div>
                    <div class="dc23">
                      <a :href="produto.url" class="btn d-flex align-items-center justify-content-between btn bt_green_1">
                        SAIBA MAIS <i class="fal fa-long-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </slide>
            </carousel>
          </div>
        </div>
      </div>
    </section>
    <section class="todos_os_produtos">
      <div class="dv1">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-3 menuLateral">
              <div class="input-group search">
                <input type="text" class="form-control" placeholder="Procure um produto..." aria-label="Procure um produto..." aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
              </div>
              <div class="dv2">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex filter-categoria justify-content-between align-items-center">
                  Categorias
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <a title="" class="d-flex active align-items-center w-100 justify-content-between" href="produtos.php">
                    Todos os produtos <i class="fal fa-angle-right"></i>
                  </a>
                </li>
                <li v-for="categoria in filter_categorias" :key="categoria.id" class="list-group-item d-flex justify-content-between align-items-center">
                  <a title="" class="d-flex  align-items-center w-100 justify-content-between" :href="categoria.url">
                    {{categoria.title}} <i class="fal fa-angle-right"></i>
                  </a>
                </li>
                <li class="list-group-item filter-regiao d-flex justify-content-between align-items-center">
                  REGIÃO
                </li>
                <li>
                  <select class="form-select filter-select form-select-lg">
                    <option selected>Selecione sua regão</option>
                    <option v-for="option in filter_regiao" v-bind:value="option.id">{{option.title}}</option>
                  </select>
                </li>
                <li class="list-group-item filter-faixa-preco d-flex justify-content-between align-items-center">
                  FAIXA DE PREÇO
                </li>
                <li>
                  <ul class="list-unstyled filter-faixa-preco-ul">
                    <li v-for="price in filter_price" :key="price.id" class="list-group-item no-border d-flex align-items-center">
                        <input :id="'inputprice'+price.id" name="filter_price" v-bind:value="price.id" class="me-2" type="radio" />
                        <label :for="'inputprice'+price.id">{{price.title}}</label>               
                    </li>
                  </ul>
                </li>
                <li class="list-group-item filter-estado-produto d-flex justify-content-between align-items-center">
                  ESTADO DO PRODUTO
                </li>
                <li>
                  <select class="form-select filter-select form-select-lg">
                    <option v-for="option in filter_estado_produto" v-bind:value="option.id">{{option.title}}</option>
                  </select>
                </li>
              </ul>
              </div>
            </div>
            <div class="col-12 col-lg-9">
              <div class="bannertop">
                <carousel class="bannertop3" :touch-drag='false' :mouse-drag='false' ref="banners_todos_os_produtos">
                  <slide v-for="banner in banners_produtos_body" :key="banner.id">
                    <div class="bannertop2 w-100 h-100">
                      <div class="row">
                        <div class="col-12 col-lg-6 text-start">
                          <div>
                            <span class="bannertop4">{{banner.discount}}</span>
                          </div>
                          <h2 class="bannertop5">
                            {{banner.title}}
                          </h2>
                          <p class="bannertop6">
                            {{banner.description}}
                          </p>
                          <div class="bannertop7">
                            <a :href="banner.url" class="btn d-flex align-items-center justify-content-between btn bt_green_3">
                              VER MAIS DETALHES <i class="fal fa-long-arrow-right"></i>
                            </a>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="bannertop_img">
                            <img alt="" :src="banner.photo"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </slide>
                  <template #addons>
                    <Navigation />
                  </template>
                </carousel>
              </div>
              <div class="row">
                <div v-for="produto in produtos_home" :key="produto.id" class="col-12 col-lg-4">
                  <div class="component_produto">
                    <div>
                      <a class="img" :href="produto.url" :style="{ background: 'url('+produto.photo+'), #F8F8F8' }"></a>
                    </div>
                    <div class="dc0">
                      <h2 class="dc11">
                        {{produto.title}}
                      </h2>
                      <p class="dc22">
                        {{produto.description}}
                      </p>
                      <div class="blc_preco d-flex justify-content-between">
                        <del v-if="produto.price_regular && produto.price_discount" class="preco_regular d-flex align-items-center">
                            <span>R$</span> {{produto.price_regular}}
                        </del>
                        <ins v-if="produto.price_discount" class="preco_promocao d-flex align-items-start">
                            <span>R$</span> {{produto.price_discount}}
                        </ins>
                        <ins v-if="!produto.price_discount" class="preco_promocao d-flex align-items-start">
                            <span>R$</span> {{produto.price_regular}}
                        </ins>
                      </div>
                      <div class="dc23">
                        <a :href="produto.url" class="btn d-flex align-items-center justify-content-between btn bt_green_1">
                          SAIBA MAIS <i class="fal fa-long-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dv44 d-flex justify-content-center">
                <a href="produtos.php" class="btn d-flex align-items-center justify-content-between btn bt_green_2">
                  VER TODOS OS PRODUTOS <i class="fal fa-long-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sobre-nos">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-6">
            <div class="dv1">
              <a class="d-flex justify-content-center align-items-center" href="">
                <img alt="" src="assets/images/play-icon.svg"/>
              </a>
            </div>
          </div>
          <div class="col-12 offset-lg-1 col-lg-5">
            <h2>
              Um pouco sobre nós
            </h2>
            <p>
              Consequat rhoncus ultrices elit vivamus malesuada porttitor consequat lorem gravida. Eget pellentesque phasellus et habitant. Id pretium dui commodo at aliquet donec ultrices et donec. Viverra rhoncus eu nisi, id arcu ut justo. Duis eu senectus fermentum tempor. At auctor facilisis ut felis aliquet.<br/><br/>
              Quis dictum laoreet amet arcu aliquet egestas duis massa. Nibh mauris massa duis in ipsum velit, nullam enim. Dictumst viverra fermentum vitae quisque tellus fringilla magna.
            </p>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>
          © Copyright TechVendas - 2022 - Todos os Direitos Reservados
        </p>
      </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Privacidade</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <strong>Política de privacidade para Unidoctors</strong><br/><br/>

          Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a tornar a sua visita no nosso site o mais produtiva e agradável possível.<br/><br/>

          A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para o Unidoctors.<br/><br/>

          Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem o Unidoctors serão tratadas em concordância com a Lei da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).<br/><br/>

          A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone e/ou telemóvel, morada, data de nascimento e/ou outros.<br/><br/>

          O uso do Unidoctors pressupõe a aceitação deste Acordo de privacidade. A equipe do Unidoctors reserva-se ao direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade de forma a estar sempre atualizado.<br/><br/>

          <strong>Os anúncios</strong><br/><br/>

          Tal como outros websites, coletamos e utilizamos informação contida nos anúncios. A informação contida nos anúncios, inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro), o browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o Firefox), o tempo da sua visita e que páginas visitou dentro do nosso website.<br/><br/>

          <strong>Cookie DoubleClick Dart</strong><br/><br/>

          O Google, como fornecedor de terceiros, utiliza cookies para exibir anúncios no nosso website;<br/><br/>

          Com o cookie DART, o Google pode exibir anúncios com base nas visitas que o leitor fez a outros websites na Internet;<br/><br/>

          Os utilizadores podem desativar o cookie DART visitando a Política de privacidade da rede de conteúdo e dos anúncios do Google.<br/><br/>

          <strong>Ligações a Sites de terceiros</strong><br/><br/>

          O Unidoctors possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.<br/><br/>

          Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Uteis-->
  <script src="assets/vendor/formulario/formulario.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script type="module" src="assets/js/home.js"></script>
</body>
</html>
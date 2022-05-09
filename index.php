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

  <!-- vuejs -->
  <script src="assets/vendor/vuejs/vue.global.js"></script>
  <script type="importmap">
    {
      "imports": {
        "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js",
        "@chenfengyuan/vue-carousel": "https://unpkg.com/@chenfengyuan/vue-carousel@2.0.0/dist/vue-carousel.esm.min.js"
      }
    }
  </script>

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
    <div class="bgBanner">
      <div class="container">
        <div class="blc_banner">
          <vue-carousel :controls="true" :data="banners"></vue-carousel>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
            <div class="col-12 text-center text-lg-start col-lg-3">
              <a title="" href="<?php echo $baseUrl; ?>">
                <img
                  src="<?php echo $baseUrl; ?>2022/assets/logo.svg"
                  alt="Uni"
                  loading="lazy"
                  style="margin-top: -1px;"
                />
              </a>
            </div>
            <div class="col-12 col-lg-2">
              <ul class="list-unstyled">
                <li>
                  Serviços
                </li>
                <li>
                  <a href="<?php echo $baseUrl; ?>sistema/paciente/public/login">
                    Paciente
                  </a>
                </li>
                <li>
                  <a href="<?php echo $baseUrl; ?>sistema/doutor/public/login">
                    Doutor
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <ul class="list-unstyled">
                <li>
                  Contato
                </li>
                <li>
                  <a href="mailto:contato@appunisaude.com.br">
                    contato@appunisaude.com.br
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-2">
              <ul class="list-unstyled">
                <li>
                  Sobre
                </li>
                <li>
                  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Privacidade
                  </a>
                </li>
              </ul>
            </div>
        
            <div class="col-12 d-flex justify-content-center col-lg-2">
              <div class="redes">
                <a class="d-inline-flex justify-content-center align-items-center" target="_blank" href="https://www.instagram.com/unidoctors.oficial/">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="d-inline-flex justify-content-center align-items-center" target="_blank" href="https://www.facebook.com/Unidoctors-108208857323883">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </div>
            </div>
        </div>
      <div class="col-12 text-center text-lg-start col-lg-3">
              <a title="" href="https://apps.apple.com/br/app/uni-sa%C3%BAde/id1503661320" target="_others">
                <img
                  src="2022/assets/apple.jpg"
                  alt=""
                  loading="lazy"
                  style="margin-top: -1px;"
                />
              </a>
        <a title="" href="https://play.google.com/store/apps/details?id=br.com.unidoctors" target="_others">
                <img
                  src="2022/assets/google.jpg"
                  alt=""
                  loading="lazy"
                  style="margin-top: -1px;"
                />
              </a>
            </div>
        <div class="d-lg-flex dv123 text-center text-lg-start justify-content-between align-items-center">
          <div>
            UniDoctors ® 2022 | All rights reserved
          </div>
        </div>
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
  <!-- Jquery-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Uteis-->
  <script src="assets/vendor/formulario/formulario.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script type="module" src="assets/js/home.js"></script>
</body>
</html>
<?

if (isset($_POST['envioForm'])) {

  include("./processa.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agency - Start Bootstrap Theme</title>

  <!-- Onde usei o bootstrap pro CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- O template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navegaçao -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">HOME</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">SERVIÇOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">INTERFACES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">PROCESSOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">SOBRE MIM</a>
          </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">CONTATO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Cabeçario -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">OLÁ, SOU O SAVEPET!</div>
        <div class="intro-heading text-uppercase">Salvar os animais</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Saiba Mais...</a>
      </div>
    </div>
  </header>

  <!-- Serviços -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">SERVIÇOS</h2>
          <h3 class="section-subheading text-muted">Nossos serviços disponibilizados no site</h3>
        </div>
      </div>
      <div class="row text-center">




        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Telefone e meios para denuncia</h4>
          <p class="text-muted">Chega de maus tratos </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-tablet fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Exemplos de leis direto no seu dispositivo</h4>
            <p class="text-muted">Leis populares que funcionam</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-heart-o fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Temos como objetivo alertar sobre os animais de rua</h4>
            <p class="text-muted">Animais abandonados, queremos evitar</p>
          </div>
        </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">INTERFACES</h2>
          <h3 class="section-subheading text-muted">Pacotes para a sua necessidade</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/denuncia.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Meio de Denunciar</h4>
            <p class="text-muted">Clique para abrir</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/Brincar.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Sobre</h4>
            <p class="text-muted">Informa o que somos</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/Leis.png" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Leis populares</h4>
            <p class="text-muted">Algumas leis que funcionam</p>
          </div>
        </div>



      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Passos</h2>
          <h3 class="section-subheading text-muted">Etapas de denuncia</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/save.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>1 ETAPA</h4>
                  <h4 class="subheading">Denuncia</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Voce pode estar olhando no nosso site o numero de telefone para fazer a denuncia.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/Autoridade.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2 ETAPA</h4>
                  <h4 class="subheading">Abra um B.O</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">no site que disponibilizamos nas interfaces, abra o seu B.O virtualmente e alerte as autoridades.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/fotos.jpeg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>3 ETAPA</h4>
                  <h4 class="subheading">Tente manter provas</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Ter uma gravação, ou foto como forma de provar que aquele animal
                    esta sofrendo maus tratos, irá lhe ajudar a adiantar o processo.
                  </p>
                </div>
              </div>
            </li>

            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Denuncia
                  <br>Feita
                  <br>com sucesso</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">SOBRE MIM</h2>
          <h3 class="section-subheading text-muted">Construção e desenvolvimento com recursos interessantes adaptáveis aos seus projetos de software</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 mx-auto text-center">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/miguel.jfif" alt="">
            <h4>Paulo Miguel</h4>
            <p class="text-muted">Developer</p>
            <ul class="list-inline social-buttons">
              <!--<li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li> -->
              <!--<li class="list-inline-item">
                  <a href="">
                    <i class="fa fa-envelope"></i>
                  </a>
              </li>-->
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/paulo-miguel-98828617a/">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Feito por Paulo Miguel Souza de Jesus</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
  -->

  <!-- Contact -->

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Precisa de orientação?</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <!--FORMULARIO-->
        <div class="row">
          
          <div class="col-lg-12">
            <!--SPAM-->
          <span><? if (isset($UsuarioID)) { print "Usuário cadastrado com sucesso 
            (ID ".$UsuarioID.")"; } else { print "Erro!"; } ?></span>
            <!--SPAM-->
            <form novalidate="novalidate"  method="POST" action="./processa.php">
              <input type='hidden' name='envioForm' value='true'>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" name="nome" type="text" placeholder="Seu Nome *"  >
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" name="email" type="email" placeholder="Seu E-mail *"  >
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" name="telefone" type="tel" placeholder="Seu Telefone *"  >
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="mensagem" placeholder="Mensagem *" ></textarea>
                    <p class="help-block text-danger"></p>
                  </div>

                  <input type="submit" value="Cadastrar" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase">
                  
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright"> Paulo Miguel - 2022</span>
        </div>
        <!-- <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div> -->
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <!-- <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li> -->
            <li class="list-inline-item">
              <a href="#">HOME</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Numero: 0800 61 8080 e voce pode abrir um B.O virtualmente!</h2>
                <p class="item-intro text-muted">Denuncie</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/denuncia.png" alt="">
                <p>Site: https://delegaciavirtual.sinesp.gov.br/portal/</p>
                <ul class="list-inline">
                  <li>2022</li>
                  <li> Ilustração feita por Miguel</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
               Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Projeto Landing Page</h2>
                <p class="item-intro text-muted">Objetivo</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/Brincar.png" alt="">
                <p>Nos ajude a te ajudar</p>
                <ul class="list-inline">
                  <li>2022</li>
                  <li></li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Projeto Painel Admin</h2>
                <p class="item-intro text-muted">Lei 1 e</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/Leis.png" alt="">
                <p>Alguns exemplos de leis que podem ser usadas</p>
                <ul class="list-inline">
                  <li>2022</li>
                  <li>Com fins de ajudar</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Projeto Business</h2>
                <p class="item-intro text-muted">Projeto de site de negócios</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.png" alt="">
                <p>Layout de uma página e-commerce na Web.</p>
                <ul class="list-inline">
                  <li>2018</li>
                  <li>Categoria: Ilustração</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Projeto Blog</h2>
                <p class="item-intro text-muted">Projeto de Blog</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.png" alt="">
                <p>Layout de uma página Blog.</p>
                <ul class="list-inline">
                  <li>2018</li>
                  <li>Categoria: Ilustração</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
            Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Design</h2>
                <p class="item-intro text-muted">Deseja obter um auxílio no Design e Criação do site e app?</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Desenvolvimento e Criação</p>
                <ul class="list-inline">
                  <li>2018</li>
                  <li>Categoria: Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fa fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>

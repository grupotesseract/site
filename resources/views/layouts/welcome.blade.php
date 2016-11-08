{{-- Incluindo HEADER --}}
@include('head')
    <body>
    
        {{-- Seção MENU --}}
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo_medio_branco.png"  />Tesseract</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">projetos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#equipe">equipe</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contato">contato</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        {{-- Fim da Seção MENU --}}

        {{-- Seção CABEÇALHO --}}
        <header class="container header-img">
            <div class="cd-intro">
                <h1 class="cd-headline letters type">
                    <span>Nós criamos</span>
                    <span class="cd-words-wrapper waiting">
                        <b class="is-visible">sites</b>
                        <b>sistemas</b>
                        <b>inteligência</b>
                    </span>
                </h1>
            </div>
        </header>
        {{-- Fim da Seção CABEÇALHO --}}

        {{-- Seção INSTITUCIONAL --}}
        <section id="institucional" class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="institucional-titulo">Tesseract</h2>
                    <h3 class="institucional-texto">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </h3>
                </div>
            </div>
        </section>
        {{-- Fim da Seção INSTITUCIONAL --}}

        {{-- Seção PORTFOLIO --}}
        <section id="portfolio" class="container">
          <div class="parallax text-center primeiro-item">
              <div class="info-projeto">
                <h2 class="titulo-trabalho">Song of the sea</h2>
                <h3 class="itens-trabalho text-muted">
                  banco de dados
                  <br />
                  ecommerce
                  <br />
                  branding
                </h3>
              </div>
          </div>
          <div class="parallax text-center segundo-item">
              <div class="info-projeto">
                <h2 class="titulo-trabalho">Sen to Chihiro</h2>
                <h3 class="itens-trabalho text-muted">
                  banco de dados
                  <br />
                  ecommerce
                  <br />
                  branding
                </h3>
              </div>
          </div>
        </section>
        {{-- Fim da Seção PORTFOLIO --}}

        {{-- Seção EQUIPE --}}
        <section id="equipe" class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="equipe-titulo">Equipe</h2>
                </div>
            </div>
            <div class="row">
              <div class="col-md-8 col-md-offset-2 container-equipe">
                <ul class="img-list">
                  <li class="thumbnail-grande"><a href="#">
                    <img src="img/lilo.jpeg" class="equipe-img-grande" />
                     <span class="conteudo-texto-grande">
                       <span>
                         <h4>Vinicius</h4>
                         <p>Desenvolvedor</p>
                       </span>
                     </span>
                  </a></li>
                  <li class="thumbnail-pequeno"><a href="#">
                    <img src="img/lilo.jpeg" class="equipe-img-pequeno" />
                     <span class="conteudo-texto-pequeno">
                       <span>
                         <h4>Vinicius</h4>
                         <p>teste</p>
                       </span>
                     </span>
                  </a></li>
                  <li class="thumbnail-pequeno"><a href="#">
                    <img src="img/lilo.jpeg" class="equipe-img-pequeno" />
                     <span class="conteudo-texto-pequeno">
                       <span>
                         <h4>Vinicius</h4>
                         <p>teste</p>
                       </span>
                     </span>
                  </a></li>
                  <li class="thumbnail-grande"><a href="#">
                    <img src="img/lilo.jpeg" class="equipe-img-grande" />
                     <span class="conteudo-texto-grande">
                       <span>
                         <h4>Vinicius</h4>
                         <p>Desenvolvedor</p>
                       </span>
                     </span>
                  </a></li>
                  <li class="thumbnail-pequeno"><a href="#">
                    <img src="img/lilo.jpeg" class="equipe-img-pequeno" />
                     <span class="conteudo-texto-pequeno">
                       <span>
                         <h4>Vinicius</h4>
                         <p>teste</p>
                       </span>
                     </span>
                  </a></li>
                  <li class="thumbnail-pequeno"><a href="#">
                    <img src="img/lilo.jpeg" class="equipe-img-pequeno" />
                     <span class="conteudo-texto-pequeno">
                       <span>
                         <h4>Vinicius</h4>
                         <p>teste</p>
                       </span>
                     </span>
                  </a></li>
                  <li class="thumbnail-grande"><a href="#">
                    <img src="img/lilo.jpeg" class="equipe-img-grande" />
                     <span class="conteudo-texto-grande">
                       <span>
                         <h4>Vinicius</h4>
                         <p>Desenvolvedor</p>
                       </span>
                     </span>
                  </a></li>
                </ul>
              </div>
            </div>
        </section>
        {{-- Fim da Seção EQUIPE --}}

        {{-- Seção CONTATO --}}
        <section id="contato" class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="titulo-contato">Contato</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                  <h4 class="label-form">Email</h4>
                                  <input type="text" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your name.">
                                  <p class="help-block text-danger"></p>
                              </div>
                              <div class="form-group">
                                  <h4 class="label-form">Assunto</h4>
                                  <input type="text" class="form-control" placeholder="Assunto" id="assunto" required data-validation-required-message="Please enter your name.">
                                  <p class="help-block text-danger"></p>
                              </div>
                              <div class="form-group">
                                  <h4 class="label-form">Mensagem</h4>
                                  <textarea class="form-control" placeholder="Escreva sua mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                  <p class="help-block text-danger"></p>
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-right">
                                <button type="submit" class="botao-enviar">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        {{-- Fim da Seção CONTATO --}}

        <div class="separador-footer"></div>

{{-- Incluindo FOOTER --}}
@include('footer')
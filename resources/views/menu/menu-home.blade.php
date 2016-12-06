<nav id="menu-principal" class="navbar">
  
  <a class="navbar-logo text-center" href="{{ url('/') }}">
      <img class="img-fluid" src="{{ asset('img/svg/logo-tesseract-branco-simples.svg') }}" title="" alt="Tesseract Logo"/>
      <h1 id="logo-titulo">Tesseract</h1>
  </a>
  
  <ul class="nav navbar-nav pull-right hidden-xs-up">
    <li class="nav-item active">
      <a class="nav-link" data-scroll href="#institucional">{{ trans('global.menu_institucional') }} <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-scroll href="#portfolio">{{ trans('global.menu_portfolio') }}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-scroll href="#equipe">{{ trans('global.menu_equipe') }}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-scroll href="#contato">{{ trans('global.menu_contato') }}</a>
    </li>
  </ul>
</nav>
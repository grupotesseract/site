<nav id="menu-principal" class="navbar navbar-fixed-top bg-faded">
  
  <a class="navbar-brand mb-0" href="{{ url('/') }}">
      <img class="img-fluid navbar-logo" src="{{ asset('img/svg/logo-tesseract-branco-simples.svg') }}" title="" alt="Tesseract Logo"/>
      </a>
  
  <ul class="nav navbar-nav pull-right">
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
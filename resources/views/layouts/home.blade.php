@extends('head')

@section('page-title', trans('global.page-title_home'))

@section('page-content')

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
                        <b>aplicativos</b>
                        <b>conexões</b>
                        <b>segurança</b>
                        <b>tecnologia</b>
                        <b>inteligência.</b>
                    </span>
                </h1>
            </div>
        </header>
        {{-- Fim da Seção CABEÇALHO --}}

        {{-- Seção INSTITUCIONAL --}}
            @include('home.institutional.index')

        {{-- Seção PORTFOLIO --}}
            @include('home.portfolio.index')

        {{-- Seção EQUIPE --}}
            @include('home.team.index')
        
        {{-- Seção CONTATO --}}
            @include('home.contact.index')
        

        <div class="separador-footer"></div>

@endsection
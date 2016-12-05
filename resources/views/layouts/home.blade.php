@extends('head')

@section('page-title', trans('global.page-title_home'))

@section('page-content')

        {{-- Seção MENU --}}
            @include('menu.menu-home')

        {{-- Seção CABEÇALHO --}}
        <div class="row">
          <header class="container header-tesseract">
              <div class="cd-intro">
                  <h1 class="cd-headline letters type">
                      <span>Nós criamos</span>
                      <span class="cd-words-wrapper waiting">
                          <b class="is-visible">sites</b>
                          <b>sistemas</b>
                          <b>aplicativos</b>
                          <b>conexões</b>
                          <b>inteligência</b>
                          <b>segurança</b>
                          <b>inovação</b>
                          <b>tecnologia</b>
                      </span>
                  </h1>
              </div>
          </header>
        </div>
        {{-- Fim da Seção CABEÇALHO --}}

        {{-- Seção INSTITUCIONAL --}}
        <div class="row">
            @include('home.institutional.index')
        </div>

        {{-- Seção PORTFOLIO --}}
            @include('home.portfolio.index')

        {{-- Seção EQUIPE --}}
            @include('home.team.index')

        {{-- Seção CONTATO --}}
            @include('home.contact.index')
        </div>


        <div class="separador-footer"></div>

@endsection

@extends('head')

@section('page-title', trans('global.page-title_home'))

@section('page-content')
        {{-- Seção CABEÇALHO --}}
          <div class="row">
            @include('home.presentation.index')
          </div>
        {{-- Fim da Seção CABEÇALHO --}}

        {{-- Seção INTRO --}}
          <div class="row">
            @include('home.intro.index')
          </div>
        {{-- Fim da Seção INTRO --}}

        {{-- Seção INSTITUCIONAL --}}
          <div class="row">
              @include('home.institutional.index')
          </div>
        {{-- Fim da Seção INSTITUCIONAL --}}

        {{-- Seção PORTFOLIO --}}
          <div class="row">
              @include('home.portfolio.index')
          </div>
        {{-- Fim da Seção PORTFOLIO --}}

        {{-- Seção EQUIPE --}}
          <div class="row"> 
              @include('home.team.index')
          </div>
        {{-- Fim da Seção EQUIPE --}}

        {{-- Seção CONTATO --}}
          <div class="row">
              @include('home.contact.index')
          </div>
        {{-- Fim da Seção CONTATO --}}
@endsection

<div class="separador-footer"></div>
{{-- Incluindo FOOTER --}}
@section('footer')
    @include('footer')
@endsection


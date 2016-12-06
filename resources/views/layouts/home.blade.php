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

        {{-- Seção PORTFOLIO --}}
            @include('home.portfolio.index')

        {{-- Seção EQUIPE --}}
            @include('home.team.index')

        {{-- Seção CONTATO --}}
            @include('home.contact.index')
        </div>

@endsection


<div class="separador-footer"></div>
{{-- Incluindo FOOTER --}}
@section('footer')
    @include('footer')
@endsection


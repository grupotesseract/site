@extends('head')

@section('page-title', trans('global.page-title_home'))

@section('page-content')
        {{-- Seção CABEÇALHO --}}
          @include('home.presentation.index')
        {{-- Fim da Seção CABEÇALHO --}}

        {{-- Seção INTRO --}}
          @include('home.intro.index')
        {{-- Fim da Seção INTRO --}}

        {{-- Seção FUNCIONAMENTO --}}
          @include('home.funcionamento.index')
        {{-- Fim da Seção FUNCIONAMENTO --}}

        {{-- Seção PORTFOLIO --}}
          @include('home.portfolio.index')
        {{-- Fim da Seção PORTFOLIO --}}

        {{-- Seção VANTAGENS --}}
          @include('home.vantagens.index')
        {{-- Fim da Seção VANTAGENS --}}

        {{-- Seção CONTATO --}}
          @include('home.contact.index')
        {{-- Fim da Seção CONTATO --}}
@endsection
{{-- Incluindo FOOTER --}}
@section('footer')
    @include('footer')
@endsection

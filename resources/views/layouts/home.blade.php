@extends('head')

@section('page-title', trans('global.page-title_home'))

@section('page-content')
        {{-- Seção CABEÇALHO --}}
          @include('home.presentation.index')
        {{-- Fim da Seção CABEÇALHO --}}

        {{-- Seção INTRO --}}
          @include('home.intro.index')
        {{-- Fim da Seção INTRO --}}

        {{-- Seção PORTFOLIO --}}
          @include('home.portfolio.index')
        {{-- Fim da Seção PORTFOLIO --}}

        {{-- Seção INSTITUCIONAL --}}
          @include('home.institutional.index')
        {{-- Fim da Seção INSTITUCIONAL --}}

        {{-- Seção EQUIPE --}}
          {{--@include('home.team.index')--}}
        {{-- Fim da Seção EQUIPE --}}

        {{-- Seção CONTATO --}}
          @include('home.contact.index')
        {{-- Fim da Seção CONTATO --}}
@endsection
{{-- Incluindo FOOTER --}}
@section('footer')
    @include('footer')
@endsection

@extends('head')

@section('page-title', trans('global.page-title_home'))

@section('page-content')
        {{-- Seção CABEÇALHO --}}
          @include('equipe.presentation.index')
        {{-- Fim da Seção CABEÇALHO --}}

        {{-- Seção INTRO --}}
          @include('equipe.intro.index')
        {{-- Fim da Seção INTRO --}}

        {{-- Seção MEMBROS --}}
          @include('equipe.membros.index')
        {{-- Fim da Seção MEMBROS --}}
@endsection
{{-- Incluindo FOOTER --}}
@section('footer')
    @include('footer')
@endsection

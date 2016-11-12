@extends('head')

@section('page-title', trans('global.page-title_panel'))
    <div class="container" style="background-color: #EEE">

        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Grupo Tesseract</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @include('alerts.index')
            </div>
        </div>

        <div class="row">

            <div class="col-md-3">
                @include('menu.menu-admin-panel')
            </div>

            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>

@endsection
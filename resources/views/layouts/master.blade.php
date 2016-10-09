<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastramento de Skills do Time Tesseract</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{!! asset('css/all.css') !!}" rel="stylesheet" type="text/css">
    </head>
    <body style="background-color: #eee">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <legend>
                        <h1>Grupo Tesseract</h1>
                    </legend>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    @include('alerts.index')
                </div>
            </div>

            <div class="row">

                <div class="col-md-3">
                    @include('menu.index')
                </div>

                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="{!! asset('js/app.js') !!}"></script>
    </body>
</html>
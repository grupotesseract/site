@include('head')
    <body style="background-color: #EEE">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
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
@include('footer')
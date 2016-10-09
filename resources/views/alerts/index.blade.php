@if (session()->has('alert.message'))
    <div class="alert alert-{{ session('alert.style') }} alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        {!! session('alert.message') !!}
    </div>
@endif
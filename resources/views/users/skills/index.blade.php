@extends('layouts.master')

@section('content')
    <legend><h3>Cadastro de Conhecimentos</h3></legend>
    <div class="row">
        <form action="" method="POST" class="col-md-6" role="form">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Nome do Conhecimentos:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex: JavaScript, PHP, React.js, SASS">
            </div>
            <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
        </form>

        <div class="col-md-6">
            <div class="alert alert-info">
                @if (count($skills))
                    <p><strong>Os itens a seguir já se encontram cadastrados:</strong></p>
                    <ul>
                        @foreach ($skills as $skillName)
                            <li>{{ $skillName }}</li>
                        @endforeach
                    </ul>
                @else
                    <p><strong>Nenhum item cadastrado.</strong></p>
                @endif
            </div>
        </div>
    </div>
@stop

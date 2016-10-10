@extends('layouts.master')

@section('content')
    <legend><h3>Cadastro de Funções</h3></legend>
    <div class="row">
        <form action="" method="POST" class="col-md-6" role="form">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Nome da Função:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Desenvolvedor, Designer..">
            </div>
            <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
        </form>

        <div class="col-md-6">
            <div class="alert alert-info">
                @if (count($roles))
                    <p><strong>Os itens a seguir já se encontram cadastrados:</strong></p>
                    <ul>
                        @foreach ($roles as $roleName)
                            <li>{{ $roleName }}</li>
                        @endforeach
                    </ul>
                @else
                    <p><strong>Nenhum item cadastrado.</strong></p>
                @endif
            </div>
        </div>
    </div>
@stop

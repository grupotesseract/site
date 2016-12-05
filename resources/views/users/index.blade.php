@extends('layouts.master')

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead style="background-color: #337ab7; color: white;">
                <tr>
                    <th width="1%">#</th>
                    <th width="1%">ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th width="5%">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 + (($users->currentPage()-1) * $users->perPage()) }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <a href="{{ route('team-tesseract.edit', ['userId' => $user->id]) }}" title="Editar">
                                <i class="fa fa-edit"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
@stop

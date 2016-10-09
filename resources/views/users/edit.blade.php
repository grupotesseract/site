@extends('layouts.master')

@section('content')
    <legend><h3>Edição de Integrante Tesseract</h3></legend>
    <div class="row">
        <form action="{{ url('team-tesseract/'. $user->id) }}" method="POST" class="col-md-12" role="form">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}

            <input type="hidden" name="user" value="{{ $user->id }}">

            <div class="row">
                <div class="col-md-6">
                    <legend>Informações Gerais</legend>
                    <div class="form-group">
                        <label for="name">Nome Completo:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name')?: $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="name">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email')?: $user->email }}">
                    </div>

                    <div class="form-group">
                        <label for="role_id">Função:</label>
                        <select name="role_id" id="role_id" class="form-control" required="required">
                            @foreach ($roles as $id => $roleName)
                                <option value="{{ $id }}" {{ old('role_id') == $id ? 'selected' : $user->role->id == $id ? 'selected' : '' }}>{{ $roleName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <legend>Redes Sociais</legend>
                    @foreach ($socials->chunk(2) as $row)
                        <div class="row">
                            @foreach ($row as $socialName)
                                <div class="form-group col-md-6">
                                    <label for="{{ $socialName }}">{{ title_case($socialName) }}:</label>
                                    <input type="text"
                                        class="form-control"
                                        id="social[{{ $socialName }}]"
                                        name="social[{{ $socialName }}]"
                                        value="{{ old('social['.$socialName.']') ?: $user->social->$socialName }}"
                                        placeholder="Link para seu perfil">
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <br>
                <legend>Formação Acadêmica</legend>
                <div class="form-group col-md-4">
                        <label for="institution">Instituição:</label>
                        <input type="text" class="form-control" id="institution" name="institution" value="{{ old('institution')?: $user->curriculum->academic->institution }}">
                </div>
                <div class="form-group col-md-4">
                        <label for="degree">Nível:</label>
                        <input type="text" class="form-control" id="degree" name="degree" value="{{ old('degree')?: $user->curriculum->academic->degree }}">
                </div>
                <div class="form-group col-md-4">
                        <label for="course">Curso:</label>
                        <input type="text" class="form-control" id="course" name="course" value="{{ old('course')?: $user->curriculum->academic->course }}">
                </div>
            </div>

            <br>
            <legend>Conhecimentos</legend>
            <div class="form-group">
                <select name="skills[]" id="skills[]" class="form-control add-select2-tags" required multiple>
                    @foreach ($skills as $id => $skillName)
                        <option value="{{ $id }}"

                            @if (old('skills'))
                                {{ in_array($skillName, old("skills")) ? 'selected' : '' }}
                            @else
                                @foreach ($user->curriculum->skills->toArray() as $userSkill)
                                     {{ in_array($skillName, $userSkill) ? 'selected' : '' }}
                                 @endforeach
                            @endif
                        >{{ $skillName }}</option>
                    @endforeach
                </select>
            </div>

            <br>
            <legend>Resumo Curricular</legend>
            <div class="form-group">
                <textarea name="summary" id="summary" class="form-control" rows="4">{!! old('summary') ?: $user->curriculum->summary !!}</textarea>
            </div>


            <button type="submit" class="btn btn-primary pull-right">Editar</button>
        </form>
    </div>
    <br>
@stop

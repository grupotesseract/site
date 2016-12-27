@extends('layouts.master')

@section('content')
    <legend><h3>Busca de membros pelas suas Skills</h3></legend>
    <div class="row">
        <div class="col-xs-12">
          {!! Form::open(['url' => '/team-tesseract/busca']) !!}
            <div class="form-group">
                <select name="skills[]" id="skills[]" class="form-control add-select2" required multiple style="width: 75%">
                    @foreach ($skills as $Skill)
                        <option value="{{ $Skill->id }}"
                            @if ( isset($currentSkills) )
                                {{ in_array($Skill->id, $currentSkills) ? 'selected' : '' }}
                            @endif
                        >{{ $Skill->name }}</option>
                    @endforeach
                </select>
            <div class="form-group mt-1">
                {!! Form::checkbox('mustMatch', true) !!}
                {!! Form::label('mustMatch', 'Apenas usuários que manjem todas as skills?') !!}
            </div>

            </div>
            {!! Form::submit('Buscar') !!}
          {!! Form::close() !!}
        </div>
    </div>

    @if ( isset($users) )
    <div class="row mt-2">
        <div class="col-xs-12">
            <ul class="busca-users-container">
              {{-- SEÇÃO EQUIPE --}}
              @foreach ($users as $k => $Membro)
               <li class="busca-users-item">
                  <img src="{{ $Membro->fotoAvatar ? $Membro->fotoAvatar->URL : $Membro->fotoURL }}" class="" />
                   <span class="conteudo-texto-grande">
                     <span>
                       <h4>{{ $Membro->name }}</h4>
                       <p>{{ $Membro->role->name }}</p>
                     </span>
                      <ul class="social-links">
                          @if($Membro->social->portfolio)
                            <li>
                              <a href="{{ $Membro->social->portfolio }}"><i class="fa fa-external-link"></i></a>
                            </li>
                          @else($Membro->email)
                            <li>
                              <a href="mailto:{{ $Membro->email }}"><i class="fa fa-0-8x fa-envelope"></i></a>
                            </li>
                          @endif
                          @if($Membro->social->github)
                            <li>
                              <a href="{{ $Membro->social->github }}"><i class="fa fa-github"></i></a>
                            </li>
                          @endif
                          @if($Membro->social->googleplus)
                            <li>
                              <a href="{{ $Membro->social->googleplus }}"><i class="fa fa-googleplus"></i></a>
                            </li>
                          @endif
                          @if($Membro->social->facebook)
                            <li>
                              <a href="{{ $Membro->social->facebook }}"><i class="fa fa-facebook"></i></a>
                            </li>
                          @endif
                          @if($Membro->social->linkedin)
                            <li>
                              <a href="{{ $Membro->social->linkedin }}"><i class="fa fa-linkedin"></i></a>
                            </li>
                          @endif
                      </ul>
                   </span>
                  </li>
              @endforeach
            </ul>
          </div>

        </div>
    </div>
    @endif

@endsection

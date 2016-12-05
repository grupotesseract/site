{{-- Seção EQUIPE --}}
  <section id="equipe" class="container">
      <div class="row">
          <div class="col-lg-12 text-xs-center">
              <h2 class="titulo-secao-preto">
                  {{ trans('global.title_equipe') }}
              </h2>
          </div>
      </div>
      <div class="row">
        <div class="container">
          <div class="col-md-8 col-md-offset-2">
            <ul class="img-list">

            {{-- SEÇÃO EQUIPE --}}
            @foreach ($Users as $Membro)
              <li class="thumbnail-grande">
                <img src="{{ $Membro->fotoURL }}" class="equipe-img-grande" />
                 <span class="conteudo-texto-grande">
                   <span>
                     <h4>{{ $Membro->name }}</h4>
                     <p>{{ $Membro->role->name }}</p>
                   </span>
                    <ul class="social-links">
                        @if ($Membro->social->github)
                            <a href="{{ url($Membro->social->github) }}"><i class="fa fa-github"></i></a>
                        @endif
                        @if ($Membro->social->facebook) 
                            <a href="{{ $Membro->social->facebook }}"><i class="fa fa-facebook"></i></a>
                        @endif
                        @if ($Membro->social->portfolio) 
                            <a href="{{ $Membro->social->portfolio }}"><i class="fa fa-portfolio"></i></a>
                        @endif
                        @if ($Membro->social->googleplus) 
                            <a href="{{ $Membro->social->googleplus }}"><i class="fa fa-googleplus"></i></a>
                        @endif


                    </ul>
                 </span>
                </li>
            @endforeach
            </ul>
          </div>
        </div>
      </div>
  </section>
{{-- Fim da Seção EQUIPE --}}

{{-- Seção EQUIPE --}}
<section id="equipe" class="container-fluid">
    <div class="row">
      <div class="col-lg-12 text-xs-center">
        <h2 class="titulo-secao-preto">
          {{ trans('global.title_equipe') }}
        </h2>
      </div>
      <div class="row">
        <div class="container">
          <div class="col-xs-12">
            <ul class="img-list grid">
              {{-- SEÇÃO EQUIPE --}
              @foreach ($Users as $Membro)
              }
              <?php
                //randomiza tamanho dos users
                  $rand = rand(0,10);
                  if($rand < 9) {
                    $cssSize = 'grid-item';
                  } else {
                    $cssSize = 'grid-item grid-item-2';
                  }

               ?>
               <li class="thumbnail-grande <?php echo $cssSize; ?>">
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
    </div>
  </div>
</section>
{{-- Fim da Seção EQUIPE --}}

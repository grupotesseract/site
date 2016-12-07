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
              {{-- SEÇÃO EQUIPE --}}
              @foreach ($Users as $k => $Membro)
              <?php
                //randomiza tamanho dos users
                  $cssSize = 'grid-item';
                  if($k == 0) {
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
                          @if ($Membro->email)
                            <li>
                              <a href="mailto:{{ $Membro->email }}"><i class="fa fa-0-8x fa-envelope"></i></a>
                            </li>
                          @endif
                          @if ($Membro->social->facebook)
                            <li>
                              <a href="{{ $Membro->social->facebook }}"><i class="fa fa-facebook"></i></a>
                            </li>
                          @endif
                          @if ($Membro->social->portfolio)
                            <li>
                              <a href="{{ $Membro->social->portfolio }}"><i class="fa fa-external-link"></i></a>
                            </li>
                          @endif
                          @if ($Membro->social->googleplus)
                            <li>
                              <a href="{{ $Membro->social->googleplus }}"><i class="fa fa-googleplus"></i></a>
                            </li>
                          @endif
                          @if ($Membro->social->github)
                            <li>
                              <a href="{{ $Membro->social->github }}"><i class="fa fa-github"></i></a>
                            </li>
                          @endif                      </ul>
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

<?php $cont = 0;?>
<script type="text/javascript">
  function mostrarIndividuo(id, idMembro) {
      document.getElementById(id).style.display = 'flex';
      console.log(idMembro);
  }
</script>
<section id="membros" class="container-fluid">
  <div class="container pt-4 pb-4">
    <div class="row">
      <div class="col-lg-12 text-xs-center pb-3">
        <p class="texto-introducao">
          Nossa equipe é formada por profissionais de várias áreas e o que nos une
          é a busca por desenvolvimento, individual e coletivo. Nós acreditamos que
          a união das nossas habilidades faz um todo maior que a soma de suas
          partes e levamos isso como filosofia de grupo.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 container-membros">
          @foreach ($Users as $k => $Membro)
          <?php $cont++; ?>
            <div class="card-membro">
              <div class="imagem_avatar">
                <img src="{{$Membro->photo}}" />
              </div>
              <a href="#"  onclick="mostrarIndividuo('container-individual', 5);"><h4>{{$Membro->name}}</h4></a>
              <h5>Desenvolvedor</h5>
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
            </div>
            @if($cont == 6)
              <div class="col-md-12 container-individual" id="container-individual">
                <img src="{{$Membro->photo}}">
                <div class="informacoes">
                  <h2>{{$Membro->name}}</h2>
                  <h4>Full Stack<h5>
                  <p>Formado em ciências da enrolação, lilo procura terminar a faculdade o mais rápido possível e acabar comn essa agonia, no entanto não vai as aulas. O que fazer? Formado em ciências da enrolação, lilo procura terminar a faculdade o mais rápido possível e acabar comn essa agonia, no entanto não vai as aulas. O que fazer?</p>
                  <div class="habilidades-user">
                    <span>Ohana</span><span>Javascript</span><span>PHP</span><span>Laravel</span>
                  </div>
                  <span class="site-pessoal">www.grupotesseract.com.br</span>
                  <div class="social-links">
                    @if($Membro->social->portfolio)
                        <a href="{{ $Membro->social->portfolio }}"><i class="fa fa-external-link"></i></a>
                    @else($Membro->email)
                        <a href="mailto:{{ $Membro->email }}"><i class="fa fa-0-8x fa-envelope"></i></a>
                    @endif
                    @if($Membro->social->github)
                        <a href="{{ $Membro->social->github }}"><i class="fa fa-github"></i></a>
                    @endif
                    @if($Membro->social->googleplus)
                        <a href="{{ $Membro->social->googleplus }}"><i class="fa fa-googleplus"></i></a>
                    @endif
                    @if($Membro->social->facebook)
                        <a href="{{ $Membro->social->facebook }}"><i class="fa fa-facebook"></i></a>
                    @endif
                    @if($Membro->social->linkedin)
                        <a href="{{ $Membro->social->linkedin }}"><i class="fa fa-linkedin"></i></a>
                    @endif
                  </div>
                </div>
              </div>
            @endif
          @endforeach
      </div>
    </div>
  </div>
</section>

<?php $cont = 0;?>
<script type="text/javascript">
  function mostrarIndividuo(id, idMembro) {
      $.ajax({
        type: 'POST',
        url: '/equipe/'+idMembro,
        data: JSON.stringify ({"id": idMembro}),
        success: function(data) { alert('data: ' + data); },
        contentType: "application/json",
        dataType: 'json'
      });
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
            <div class="card-membro">
              <div class="imagem_avatar">
                <img src="{{$Membro->photo}}" />
              </div>
              <a href="#"  onclick="mostrarIndividuo('container-individual', {{$Membro->id}});"><h4>{{$Membro->name}}</h4></a>
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
          @endforeach
      </div>
    </div>
  </div>
</section>

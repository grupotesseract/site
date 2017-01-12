<div class="row">
  <div class="col-md-10 offset-md-1 container-membros">
    <p class="texto-introducao">
      @foreach ($Users as $k => $Membro)
        {{$Membro->name}}
      @endforeach
    </p>
  </div>
</div>

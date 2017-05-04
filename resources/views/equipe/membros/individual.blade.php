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

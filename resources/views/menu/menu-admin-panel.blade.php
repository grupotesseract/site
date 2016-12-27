<aside id="menu" class="well sidebar-nav">
    <h4><i class="fa fa-home"></i> <b>Geral</b></h4>
    <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ url('team-tesseract') }}">Listar Integrantes</a></li>
    </ul>

    <hr>

    <h4><i class="fa fa-group"></i> <b>Cadastros</b></h4>
    <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ url('team-tesseract/skills') }}">Conhecimentos</a></li>
        <li><a href="{{ url('team-tesseract/roles') }}">Funções</a></li>
        <li><a href="{{ url('team-tesseract/create') }}">Integrantes</a></li>
    </ul>

    <hr>

    <h4><i class="fa fa-search"></i> <b>Buscas</b></h4>
    <ul class="nav nav-pills nav-stacked">
        <li><a href="{{ url('team-tesseract/busca') }}">Usuarios por suas skills</a></li>
    </ul>

</aside>

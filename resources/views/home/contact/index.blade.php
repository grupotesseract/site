{{-- Seção CONTATO --}}
  <section id="contato" class="container-fluid">
    <div class="container pt-4 pb-4">
      <div class="row">
          <div class="col-lg-12 text-xs-center">
              <h2 class="titulo-secao-branco">
                  {{ trans('global.title_contato') }}
              </h2>
          </div>
      </div>
      <div class="row">
        {!! Form::open(['url' => 'contato']) !!}
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row">
                    <div class="col-md-12">
                      <div class="flash-message">
                          @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))

                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                          @endforeach
                        </div> 

                        @if ( count($errors) > 0 )
                            @foreach ($errors->all() as $error)
                              <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach
                        @endif
                        <div class="form-group">
                          {{ Form::label('nome', trans("global.label_nome"), ['class' => 'label-form']) }}
                          {{ Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'R. Daneel Olivaw', 'required']) }}
                      </div>
                      <div class="form-group">
                          {{ Form::label('email', trans("global.label_email"), ['class' => 'label-form']) }}
                          {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'exemplo@email.com', 'required']) }}
                      </div>
                      <div class="form-group">
                          {{ Form::label('assunto', trans("global.label_assunto"), ['class' => 'label-form']) }}
                          {{ Form::text('assunto', '', ['class' => 'form-control', 'placeholder' => 'Quem são vocês?', 'required']) }}
                      </div>
                      <div class="form-group">
                          {{ Form::label('mensagem', trans("global.label_mensagem"), ['class' => 'label-form']) }}
                          {{ Form::textarea('mensagem', '', ['class' => 'form-control', 'placeholder' => 'Hey galera! Me expliquem como funciona o trabalho de vocês!', 'required', 'rows' => '4']) }}
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-xs-center text-lg-right">
                        {{ Form::submit(trans("global.btn_enviar"), ['class' => 'btn-enviar']) }}
                    </div>
                </div>
            </form>
        {!! Form::close() !!}
      </div>
    </div>
  </section>
{{-- Fim da Seção CONTATO --}}

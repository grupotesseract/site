{{-- Seção CONTATO --}}
<div class="row contato-container">
  <section id="contato" class="container padding-t-4 padding-b-4">
      <div class="row">
          <div class="col-lg-12 text-xs-center text-md-left">
              <h2 class="titulo-secao-branco">
                  {{ trans('global.title_contato') }}
              </h2>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
              {!! Form::open(['url' => 'foo/bar']) !!}
                  <form name="sentMessage" id="contactForm" novalidate>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                {{ Form::label('nome', trans("global.label_nome"), ['class' => 'label-form']) }}
                                {{ Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Daneel Olivaw', 'required']) }}
                                <p class="help-block text-danger"></p>
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
                                {{ Form::textarea('mensagem', '', ['class' => 'form-control', 'placeholder' => 'Hey galera! Me expliquem como funciona o trabalho de vocês!', 'required']) }}
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
</div>
{{-- Fim da Seção CONTATO --}}

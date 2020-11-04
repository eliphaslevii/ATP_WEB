@extends('layouts.app')

@section('content')

                @if (\Session::has('errors'))
                <div class="col s12 m12 right">
                    <script> $(document).ready(function () {
                            M.toast({html: 'Um erro ocorreu', classes: 'rounded red darken-2'});
                        })
                    </script>
                </div>
                @endif
                @if (\Session::has('Success'))
                    <div class="col s12 m12 right">
                        <script> $(document).ready(function () {
                                M.toast({html: 'Cadastro concluído com sucesso!', classes: 'rounded blue darken-2'});
                            })
                        </script>
                    </div>
                @endif

<form method="GET" action="/dados_post" id="">
    @csrf
    @foreach($retrieve as $r)
    <div class="container">
        <div class="row justify-content-center mgtop sclass">
            <div class="fd-panel fd-panel--fixed">
                <div class="fd-panel__header">
                    <h4 class="fd-panel__title" style="font-size: 20px">Alteração de dados</h4>
                    <div class="fd-toolbar fd-toolbar--clear fd-toolbar--transparent">
                        <div class="col-md-12 right">
                            <div class="fd-segmented-button" role="group" aria-label="Group label">
                                <button id="edit" class="fd-button fd-button--emphasized yellow darken-2 black-text" type="button">Editar</button>
                              </div>
                        </div>

                    </div>
                </div>
                <div class="fd-panel__content">
                    <br><br>
                    <!--Input $table-> id cadastrado -->
                    <div class="row">
                        <div class="fd-col--6">
                            <label for="cod_item" class="col-md-4 col-form-label text-md-right">{{ __('Código do cadastro') }}</label>

                            <div class="fd-form-item">
                                <input placeholder="código funcionário" id="id"
                                class="fd-input validate" name="id"
                            value="{{$r->id}}" type="number" readonly>
                            </div>
                        </div>

                    </div>
                    <!-- Input $table-> name -->
                    <div class="row">
                        <div class="fd-col--6">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome cadastrado') }}</label>

                            <div class="fd-form-item">
                                <input placeholder="Nome cadastrado" id="name"
                                class="fd-input validate" name="name"
                                value="{{$r->name}}" readonly >
                            </div>
                        </div>
                    </div>

                      <!-- Input $table-> email -->
                    <div class="row">
                        <div class="fd-col--6">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail cadastrado') }}</label>

                            <div class="fd-form-item">
                                <input placeholder="E-mail cadastrado" id="email"
                                class="fd-input validate" name="email"
                                value="{{$r->email}}" readonly >
                            </div>
                        </div>
                    </div>

                    <!-- Input $table-> contact -->
                    <div class="row">
                        <div class="fd-col--6">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Telephone cadastrado') }}</label>

                            <div class="fd-form-item">
                                <input id="contact"
                                class="fd-input validate" name="contact"
                                value="{{$r->contact}}" readonly >
                            </div>
                        </div>
                    </div>

                    <!-- Input $table-> born -->
                    <div class="row">
                        <div class="fd-col--6">
                            <label for="born" class="col-md-4 col-form-label text-md-right">{{ __('Data de nascimento') }}</label>

                            <div class="fd-form-item">
                                <input id="born"
                                class="fd-input validate" name="born"
                                value="{{$r->born}}" readonly type="date" >
                            </div>
                        </div>
                    </div>

                    <tfoot>
                        <div class="col-md-12 right">
                            <div class="fd-segmented-button" role="group" aria-label="Group label">
                                <button class="fd-button fd-button--emphasized" type="submit">Salvar</button>
                              </div>
                        </div>

                    </tfoot>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</form>


@endsection

@extends('layouts.app')

@section('content')

                @if (\Session::has('errors'))
                <div class="col s12 m12 right">
                    <script> $(document).ready(function () {
                            M.toast({html: 'O código do item já existe', classes: 'rounded red darken-2'});
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
<form method="GET" action="/emprestimo_post" id="emprestimo_form">
    <div class="container">
        <div class="row justify-content-center mgtop sclass">
            <div class="fd-panel fd-panel--fixed">
                <div class="fd-panel__header">
                    <h4 class="fd-panel__title" style="font-size: 20px">Cadastro de empréstimos</h4>
                    <div class="fd-toolbar fd-toolbar--clear fd-toolbar--transparent">
                        <span class="fd-toolbar__spacer fd-toolbar__spacer--auto">
                        </span>

                    </div>
                </div>

                <div role="region" aria-labelledby="jhqDKYrt" class="fd-panel__content">
                    <br><br>
                    <!--Input $table->código do item -->
                    <!-- Hidden Input->nome item -->
                    <div class="row">
                        <div class="col s6">
                            <label for="id_item" class="col-md-4 col-form-label text-md-right">{{ __('Código do item') }}</label>
                            <div class="fd-form-item">
                                <input placeholder="código item" id="id_item"
                                class="fd-input validate" name="id_item"
                                value="" required autofocus type="number">
                            </div>
                        </div>
                        <div class="col s6">
                            <label for="nome_item" class="col-md-4 col-form-label text-md-right">{{ __('Nome do item') }}</label>
                            <div class="fd-form-item">
                                <input placeholder="Nome do item" id="nome_item"
                                class="fd-input validate" name="nome_item"
                                value="" required >
                            </div>
                        </div>
                    </div>
                    <!--/Input $table->código do item -->
                    <!--/Hidden Input->nome item -->
                    <div class="row">
                        <div class="col s6">
                            <label for="data_devolucao" class="col-md-4 col-form-label text-md-right">{{ __('Data de devolução') }}</label>
                            <div class="fd-form-item">
                                <input placeholder="Data de devolução" id="data_devolucao"
                                class="fd-input validate" name="data_devolucao"
                                value="" type="date" type="number" value="">
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
</form>


@endsection

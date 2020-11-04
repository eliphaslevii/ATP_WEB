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
<form method="GET" action="/item_post" id="item_form">
    <div class="container">
        <div class="row justify-content-center mgtop sclass">
            <div class="fd-panel fd-panel--fixed">
                <div class="fd-panel__header">
                    <h4 class="fd-panel__title" style="font-size: 20px">Cadastro de itens</h4>
                    <div class="fd-toolbar fd-toolbar--clear fd-toolbar--transparent">
                        <span class="fd-toolbar__spacer fd-toolbar__spacer--auto">
                        </span>

                    </div>
                </div>
                <div role="region" aria-labelledby="jhqDKYrt" class="fd-panel__content">
                    <br><br>
                    <!--Input $table->código do item -->
                    <div class="row">
                        <div class="col-md-4">
                            <label for="cod_item" class="col-md-4 col-form-label text-md-right">{{ __('Código do item') }}</label>

                            <div class="fd-form-item">
                                <input placeholder="código item" id="cod_item"
                                class="fd-input validate" name="cod_item"
                                value="" required autofocus type="number">
                            </div>
                        </div>
                    </div>
                    <!-- Input $table->nome_item -->
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nome_item" class="col-md-4 col-form-label text-md-right">{{ __('Nome do item') }}</label>

                            <div class="fd-form-item">
                                <input placeholder="Nome do item" id="nome_item"
                                class="fd-input validate" name="nome_item"
                                value="" required >
                            </div>
                        </div>
                    </div>
                    <!--Input $table->descrição do item -->
                    <div class="row">
                        <div class="col-md-4">
                            <label for="desc_item" class="col-md-4 col-form-label text-md-right">{{ __('Descrição do item') }}</label>

                            <div class="fd-form-item">
                                <textarea placeholder="Descrição do item" name="desc_item"
                                class="fd-textarea txtarea"
                                id="desc_item" required>
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Hidden Input->user_id -->
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

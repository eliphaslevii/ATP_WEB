@extends('layouts.app')

@section('content')

                @if (\Session::has('errors'))
                <div class="col s12 m12 right">
                    <script> $(document).ready(function () {
                            M.toast({html: 'Este item já foi emprestado!', classes: 'rounded red darken-2'});
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
    <div class="container">
        <div class="row justify-content-center mgtop sclass">
            <div class="fd-panel fd-panel--fixed">
                <div class="fd-panel__header">
                    <h4 class="fd-panel__title" style="font-size: 20px">Tabela de itens emprestados</h4>
                    <div class="fd-toolbar fd-toolbar--clear fd-toolbar--transparent">
                        <div class="col-md-12 right">
                            <div class="fd-segmented-button" role="group" aria-label="Group label">
                                <button class="fd-button fd-button--emphasized " type="button" id="cadastro">Novo Emprestimo</button>
                              </div>
                        </div>
                    </div>
                </div>
                <br>
                <div role="region" aria-labelledby="jhqDKYrt" class="fd-panel__content">
                    <table class="fd-table fd-table--no-horizontal-borders fd-table--no-vertical-borders">
                        <thead class="fd-table__header">
                            <tr class="fd-table__row">
                                <th class="fd-table__cell" scope="col">Nome</th>
                                <th class="fd-table__cell" scope="col">Nome do Item</th>
                                <th class="fd-table__cell" scope="col">Data de emprestimo</th>
                                <th class="fd-table__cell" scope="col">Data de devolução</th>
                                <th class="fd-table__cell" scope="col">Contato</th>
                                <th class="fd-table__cell" scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody class="fd-table__body">
                            <?php $i = 0;?>

                            @foreach($retrieve as $r)
                            <tr class="fd-table__row">
                                <input hidden value="{{$r->data_devolucao}}" id="data_devolucao{{$i}}">
                                <script>
                                    $(document).ready(function(){
                                        $('#cadastro').click(function(){
                                            window.location = "/emprestimo"
                                        });
                                        var devolucao = $('#data_devolucao'+{{$i}}+'').val();

                                        var hoje =  $.datepicker.formatDate('yy-mm-dd',new Date());;

                                        var dev = $('#devolucao'+{{$i}}+'');

                                            if(devolucao === "")
                                            {
                                                $('#devolucao'+{{$i}}+'').append('Sem data definida')
                                                dev.addClass('yellow lighten-3');

                                            }
                                            else if (hoje > devolucao) {

                                            dev.append('Devolução em atraso');
                                            dev.addClass('red lighten-3');

                                            }
                                            else if ( hoje < devolucao)
                                            {
                                                $('#devolucao'+{{$i}}+'').append('Devolução dentro do prazo.')
                                                dev.addClass('green lighten-3');

                                            }


                                    })
                                </script>
                                <td class="fd-table__cell">{{$r->name}}</td>
                                <td class="fd-table__cell">{{$r->nome_item}}</td>
                                <td class="fd-table__cell">{{$r->data_emprestimo}}</td>
                                <td class="fd-table__cell">{{$r->data_devolucao}}</td>
                                <td class="fd-table__cell">{{$r->contact}}</td>
                                <td class="fd-table__cell" id="devolucao{{$i}}" class="devolucao"></td>
                            </tr>
                            <?php $i++;?>
                            @endforeach

                        </tbody>
                    </table>
                    <br>


                </div>
            </div>
        </div>
    </div>



@endsection

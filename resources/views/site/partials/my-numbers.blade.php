<div id="my-numbers"></div>
<div id="fh5co-course-categories">

    <div class="col-md-12 img-table">
        <table class="table table-condensed tbl-numeros-sorte">
            <thead>
            <tr>
                <th class="col-md-8">Período considerado para <br/>distribuição dos Números da Sorte</th>
                <th class="col-md-4">Data disponibilização Números da<br/> Sorte referente ao período do hotsite</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-left">De 0h do dia 15/11/2017 até às 23h59m59s do dia 30/11/2017</td>
                <td>Até 15/12/2017</td>
            </tr>
            <tr>
                <td class="text-left">De 0h do dia 01/12/2017 até às 23h59m59s do dia 31/11/2017</td>
                <td>Até 17/12/2018</td>
            </tr>
            <tr>
                <td class="text-left">De 0h do dia 01/01/2018 até às 23h59m59s do dia 31/01/2017</td>
                <td>Até 20/02/2018</td>
            </tr>
            <tr>
                <td class="text-left">De 0h do dia 01/02/2018 até às 23h59m59s do dia 18/02/2017</td>
                <td>Até 01/03/2018</td>
            </tr>
            </tbody>
        </table>
    </div>


    <div class="container" id="sw-my-numbers">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading fh5co-heading-1">
                <h1>MEUS NÚMEROS DA SORTE</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center animate-box">
                <div class="results">
                    <div class="desc">
                        @if(Session::has('message_cupom'))
                            <h3>{!! Session::get('message_cupom') !!}</h3>
                        @endif
                        @if(Session::has('my_cupons'))
                            <ul class="my-numbers">
                                @foreach(Session::get('my_cupons') as $my_cupon)
                                    <li>{{$my_cupon->cupom}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
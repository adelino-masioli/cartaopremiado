@extends('site.layout.site')

@section('content')

	<div class="fh5co-loader"></div>
	
	<div id="page">
    @include("site.layout.menu")
    @include("site.layout.banner")


	<div id="fh5co-course-categories">
		<div class="container" id="lk_comoparticipar">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h1>COMO FUNCIONA</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center animate-box">
					<div class="services"><br/>
                        <img class="img-responsive" src="{{asset('site/images/step.png')}}" alt="" style="margin-top: 30px;margin: auto">
						<div class="desc">
							<h3>Para participar, não precisa se cadastrar. É só usar o seu Sicoobcard. <br/>Acesse o regulamento para mais informações.</h3>
                            <h3><strong>Cartões participantes -</strong> Cabal: Clássico, Conta Empresa, Débito, Empresarial, Essencial, Gold;
                                MasterCard: Conta Empresa, Clássico, Débito, Empresarial, Gold, Platinum, Black, Black Mereti;
                                e Visa: Clássico, Gold e Platinum.
                            </h3>
                            <h4><strong>Campanha exclusiva para associados das cooperativas filiadas ao Sicoob Central Crediminas.</strong></h4>
                            <div class="col-md-12">
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
                            <h3><a href="{{route('cooperatives')}}">Confira as cooperativas participantes</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    @include("site.partials.form-search")
    @include("site.partials.result")
    @include("site.partials.form")
    @include("site.partials.footer")

	</div>

@endsection

@push('scripts')
    @if(Session::has('lk_goto'))
        <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(function () {
                    scrollToDiv('{{Session::get('lk_goto')}}');
                }, 600);
            });
        </script>
    @endif
@endpush

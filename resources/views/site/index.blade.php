@extends('site.layout.site')

@section('content')

	<div class="fh5co-loader"></div>
	
	<div id="page">
    @include("site.layout.menu")
    @include("site.layout.banner")


	<div id="fh5co-course-categories">
		<div class="container" id="lk_comoparticipar">
			<div class="row animate-box">
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center fh5co-heading">
					<h1 class="h1-title"><img src="{{asset('site/images/txt_como_participar.png')}}" alt="" class="img-responsive animate-box"></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center animate-box">
					<div class="servicess">
                        <img class="img-responsive" src="{{asset('site/images/woman.png')}}" alt="Cartão Premiado" style="position:relative;top:18px;">
					</div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-5 text-center animate-box">
					<div class="servicess">
                        <img class="img-maquininha" src="{{asset('site/images/box-cartoes-participantes.png')}}" alt="Cartões participantes Cabal: Clássico, Conta Empresa, Débito, Empresarial, Essencial, Gold; MasterCard: Conta Empresa, Clássico, Débito, Empresarial, Gold, Platinum, Black, Black Mereti; e Visa: Clássico, Gold e Platinum." style="position:relative;top:18px;">            
                        <a href="{{route('cooperatives')}}">
                            <img src="{{asset('site/images/box-coorperativas.png')}}" alt="">   
                        </a>                
					</div>
				</div>
			</div>
		</div>
	</div>


    @include("site.partials.form-search")
    @include("site.partials.result")
    @include("site.partials.regulamento")
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

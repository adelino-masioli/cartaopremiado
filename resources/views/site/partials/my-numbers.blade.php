<div id="my-numbers"></div>
<div id="fh5co-course-categories">
    <div class="container">
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
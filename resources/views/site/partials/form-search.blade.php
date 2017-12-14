<div id="lk_formconsult"></div>
<div class="form-show-2" id="fh5co-register" style="background-image: url({{asset('site/images/img_bg_2.jpg')}});">
    <div class="row" >
        <div class="col-md-8 col-md-offset-2 animate-box">
            <div class="date-counter text-center">
                <div class="box-consult">
                    <form action="{{route('cupons.consult')}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <input type="text" name="txt_document" id="txt_cupom1" onkeypress="onlyNumber('#txt_cupom1');">
                        <input type="submit" id="btn_search_cupom1" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-show-1" id="fh5co-register" style="background-image: url({{asset('site/images/img_bg_2.jpg')}});">
    <div class="row" >
        <div class="col-md-8 col-md-offset-2 animate-box">
            <div class="date-counter text-center">
                <div class="box-consult">
                    <form action="{{route('cupons.consult')}}" method="post">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <input type="text" name="txt_document" id="txt_cupom" onkeypress="onlyNumber('#txt_cupom');">
                        <input type="submit" id="btn_search_cupom" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
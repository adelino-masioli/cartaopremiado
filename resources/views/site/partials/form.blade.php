<div id="lk_contact"></div>
<div id="fh5co-contact">
    <div class="container">
        <div class="row animate-box">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center fh5co-heading">
                    <h1 class="h1-title"><img src="{{asset('site/images/txt_contato.png')}}" alt="" class="img-responsive animate-box" style="width:200px;"></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-push-2 col-md-10 col-md-push-1 animate-box">
                <form action="{{route('submitform')}}" method="post">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    
                    <div class="row form-group">
                        <div class="col-xs-12 col-md-6">
                            <label for="txt_name">Nome:</label>
                            <input type="text" name="txt_name" id="txt_name" class="form-control"  value="{{old('txt_name')}}" required>
                        </div>
                  
                        <div class="col-xs-12 col-md-6">
                            <label for="txt_name">E-mail:</label>
                            <input type="text" name="txt_email" id="txt_email" class="form-control"  value="{{old('txt_email')}}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-4">
                            <label for="txt_name">Telefone:</label>
                            <input type="text" name="txt_phone" id="txt_phone" class="form-control" value="{{old('txt_phone')}}" required>
                        </div>
                
                        <div class="col-xs-12 col-md-4">
                            <label for="txt_name">Estado:</label>
                            <select name="txt_uf" id="txt_uf" class="form-control" required>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <label for="txt_name">Cooperativa:</label>
                            <input type="text" name="txt_coop"  id="txt_coop" class="form-control" value="{{old('txt_coop')}}">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="txt_name">Mensagem:</label>
                            <textarea name="txt_message" id="message" cols="30" rows="10" class="form-control" required>{{old('txt_message')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group btn-send">
                        <button value="Enviar" class="btn">Enviar</button>
                    </div>

                    <div class="form-group text-left">
                        <a href="https://www.facebook.com" target="_blank"><img src="{{asset('site/images/btn-face.png')}}" alt=""></a>
                    </div>



                    @if(Session::has('messageform'))
                        <div id="message-send" class="<?php echo  \Session::get('messageclass'); ?>"><?php echo  \Session::get('messageform'); ?></div>
                    @else
                        <div id="message-send"></div>
                    @endif

                </form>
            </div>
        </div>

    </div>
</div>
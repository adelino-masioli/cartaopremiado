<div id="lk_contact"></div>
<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-push-2 col-md-8 col-md-push-2 animate-box">
                <form action="{{route('submitform')}}" method="post">
                    {{ csrf_field() }}
                    <h3>CONTATO</h3>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="txt_name" id="txt_name" class="form-control" placeholder="NOME:" value="{{old('txt_name')}}">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="txt_email" id="txt_email" class="form-control" placeholder="EMAIL:" value="{{old('txt_email')}}">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="txt_phone" id="txt_phone" class="form-control" placeholder="TELEFONE:" value="{{old('txt_phone')}}">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" name="txt_uf"  id="txt_uf" class="form-control" placeholder="ESTADO:" value="{{old('txt_uf')}}">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <textarea name="txt_message" id="message" cols="30" rows="10" class="form-control" placeholder="MENSAGEM">{{old('txt_message')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group btn-send">
                        <button value="" class="btn"></button>
                    </div>


                    @if(Session::has('messageform'))
                        <div id="message-send" class="<?php echo  \Session::get('messageclass'); ?>"><?php echo  \Session::get('messageform'); ?></div>
                    @else
                        <div id="message-send"></div>
                    @endif

                </form>

                <div class="form-text">
                    <p>Participação válida de 15/11/17 a 18/2/18 para pessoas jurídicas e pessoas físicas maiores de 18 anos associadas das cooperativas filiadas à Sicoob Central Crediminas e titulares dos cartões Sicoobcard participantes. Sorteios pela extração da Loteria Federal.  Consulte relação de cartões participantes, condições de participação, cooperativas participantes e demais informações no Regulamento disponível em www.cartaopremiadosicoobcard.com.br. Imagens ilustrativas. Certificado de Autorização SEAE nº 04.000058/2017.  * Não participam: Sicoobcard Salário Mais, Salário Total, Conta Corrente e Cartões BNDES.  ** As compras realizadas no mesmo mês serão somadas até atingir R$100,00. Saldo residual abaixo desse valor será descartado ao final do mês.  *** Os valores das transações realizadas pelos meios de pagamento SIPAG serão computados em dobro para atribuição de números da sorte.</p>
                    <p><strong>Central de Atendimento Sicoobcard </strong>- Regiões Metropolitanas: 4007-1256 • Demais regiões: 0800 702 0756</p>
                    <p>Ouvidoria: 0800 725 0996 • Atendimento: seg. a sex. - das 8h às 20h • www.ouvidoriasicoob.com.brDeficientes auditivos ou de fala: 0800 940 0458</p>
                </div>
            </div>
        </div>

    </div>
</div>
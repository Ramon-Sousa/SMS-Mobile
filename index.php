<?php

include "head.php";

?>
<style>
    .btn-whats {
        position: fixed;
        width: 70px;
        height: 70px;
        bottom: 10px;
        right: 60px;
        background-color: #22a8cf !important;
        color: #FFF;
        border-radius: 50%;
        font-size: 38px;
        text-align: center;
        justify-content: center;
        z-index: 1000;
        border: 3px solid white;
        -webkit-box-shadow: 0px 15px 25px 0px rgba(0, 0, 30, 0.15);
        -moz-box-shadow: 0px 15px 25px 0px rgba(0, 0, 30, 0.15);
        box-shadow: 0px 15px 25px 0px rgba(0, 0, 30, 0.15);
    }
</style>
<!-- start main banner area -->
<div class="main-banner-style01">

    <!-- <div class="position-absolute right bottom d-none d-lg-block">
                <img class="svg-injector" src="img/bg/shape-07.svg" alt="svg">
            </div> -->
    <!-- start right image banner -->
    <div class="right-bg">
        <img src="img/banner/header.jpg" class="img-fluid float-right w-100" alt="">
    </div>
    <!-- end right image banner -->

    <!-- start shape area -->
    <div class="header-shape-bg">
        <img src="img/banner/header-bg1.png" class="img-fluid w-100" alt="">
    </div>
    <!-- end shape area -->
    <div class="header-down-arrow">
        <img src="img/downarrow.png" width="50">
    </div>
    <!-- start banner text -->
    <div class="header-text">
        <div class="container">
            <div class="row" style="margin-top: -60px;">
                <div class="col-lg-5">
                    <h1 class="wow fadeInUp group_left" style="color:#1f194c;" data-wow-delay=".2s">Aumente sua conversão com o
                        envio de SMS em massa</h1>
                    <p class="wow fadeInUp group_left" data-wow-delay=".3s">Tenha milhares de acessos ao seu link em poucos
                        minutos com a SMSMobile.
                    </p>
                    <!-- <div class="quform-element">
                        <div class="quform-input">
                            <div class="text-left wow fadeInUp" data-wow-delay=".3s">
                                <button class="butn style-one fill" type="submit"><span>Criar conta
                                        agora</span></button>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="col-lg-3">
                    <div class="banner-content-img wow fadeInRight" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; ">
                        <img src="img/banner/banner_landing_page.png" class="img_principal" alt="">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bg-light p-4 text-white form_cad wow fadeInUp group_right" data-wow-delay=".2s" style="margin-top: -10%;">
                        <div class="justify-content-center">
                            <div class="form-group">

                                <h4 class="font-weight-bold mb-1 text-primary" style="margin-top: 10px;text-align: center;	color:#1f194c !important;font-size: 22px;">
                                    Crie sua conta grátis</h4>
                                <form class="row mt-2" action="" method="POST">
                                    <div class="form-group col-md-12 mb-1  text-primary">
                                        <label for="">Nome: *</label>
                                        <input type="text" class="form-control" name="nome">
                                    </div>
                                    <div class="form-group col-md-12 mb-1 text-primary">

                                        <label for="">E-mail: *</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group col-md-12 mb-4 text-primary">

                                        <label for="">Celular: *</label>
                                        <input type="text" class="form-control" name="telefone">
                                    </div>
                                    <!-- <div class="form-group col-md-6 mb-1">
            
                                                <label for="">Senha: *</label>
                                                <input type="text" class="form-control" name="telefone">
                                            </div>
                                            <div class="form-group col-md-6 mb-4">
            
                                                <label for="">Confirme sua senha: *</label>
                                                <input type="text" class="form-control" name="telefone">
                                            </div> -->
                                    <div class="form-group col-md-12 mb-">
                                        <button type="submit" class="butn style-one fill w-100">Criar
                                            conta</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner text -->


</div>
<!-- end main banner area -->

<!-- start service section -->
<section class="bg-light grupo_vantagens">
    <div class="container">
        <div class="float-right btn-whats">
            <a target="_blank" href="<?php link_phone(); ?>" onclick="return gtag_report_conversion('<?php link_phone(); ?>');" id="switchWhats" class="float">
                <span class="my-float">
                    <!-- <i class="fa fa-whatsapp" aria-hidden="true" style="color: black;"></i> -->
                    <i class="fab fa-whatsapp" style="color:white"></i>
                </span>
            </a>
        </div>
        <div class="text-center section-heading">
            <!-- <h2>We Provide Awesome Services</h2> -->
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card card-style05 pt-2-8 pb-2-4 px-1-6 wow fadeInUp" data-wow-delay=".2s">
                    <i class="fas fa-sms"></i>
                    <h3 class="h5 mb-3">+5 Milhões de envios</h3>
                    <p class="mb-0 w-90 w-md-75 w-lg-100 mx-auto">Nossos números ultrapassaram 5
                        milhões em 2020.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card card-style05 pt-2-8 pb-2-4 px-1-6 wow fadeInUp" data-wow-delay=".4s">
                    <i class="fas fa-users"></i>
                    <h3 class="h5 mb-3">+150 Clientes</h3>
                    <p class="mb-0 w-90 w-md-75 w-lg-100 mx-auto">Todos os meses centenas de
                        clientes impulsionam seu negócio
                        utilizando nossa plataforma</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-style05 pt-2-8 pb-2-4 px-1-6 wow fadeInUp" data-wow-delay=".6s">
                    <i class="fas fa-check-circle"></i>
                    <h3 class="h5 mb-3">Consistência na entrega</h3>
                    <p class="mb-0 w-90 w-md-75 w-lg-100 mx-auto">97% de nossos SMS são enviados
                        com sucesso até seu contato.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end service section -->

<!-- start innovate business section one -->
<section>
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-5 text-center text-lg-left mb-5 mb-lg-0">
                <img src="img/banner/img_sms_01.png" alt="...">
            </div>
            <div class="col-lg-7">
                <div class="pl-0 pl-lg-5">

                    <i class="fas fa-gem icon-style mb-1-8"></i>

                    <h2 class="h3 line-height-normal mb-4">Impulsione suas campanhas.</h2>
                    <p class="mb-4">Alcance milhares de contatos em questão de minutos com o SMS Marketing, nossa plataforma irá te ajudar a impulssionar
                        seu negócio com alguns cliques.</p>

                    <!-- <a href="#!" class="butn">Leia mais</a> -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end innovate business section one -->

<!-- start testmonials section -->
<section>
    <div class="container">
        <div class="section-heading">
            <h2>O que nossos clientes dizem</h2>
        </div>
        <div class="owl-carousel owl-theme testmonials-style1" id="testmonials-carousel">
            <div class="testmonial-style01 w-90 w-md-75 w-lg-60 mx-auto text-center">
                <div class="item">
                    <div class="avatar-photo mb-6">
                        <img src="img/avatar/person_01.jpg" alt="...">
                    </div>
                    <div class="avatar-item mt-4">
                        <div class="avatar-info">
                            <h4>Tamires Sousa</h4>
                            <span>Aumentou a conversão em 72%
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="item-inner">

                        <p>"Excelente serviço, tive um retorno muito bom em relação aos acessos no meu site e minhas vendas estão aumentando de novo! Super recomendo!."
                        </p>
                        <span class="display-22 opacity2"><i class="fas fa-quote-right"></i></span>



                    </div>
                </div>
            </div>
            <div class="testmonial-style01 w-90 w-md-75 w-lg-60 mx-auto text-center">
                <div class="item">
                    <div class="avatar-photo mb-6">
                        <img src="img/avatar/person_02.jpg" alt="...">
                    </div>
                    <div class="avatar-item mt-4">
                        <div class="avatar-info">
                            <h4>Leonardo Rodrigues</h4>
                            <span>Aumentou a conversão em 67%
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="item-inner">

                        <p>"Painel simples e super fácil de manusear. Além do suporte incrível. As mensagens realmente chegam ao destinatário."
                        </p>
                        <span class="display-22 opacity2"><i class="fas fa-quote-right"></i></span>



                    </div>
                </div>
            </div>
            <div class="testmonial-style01 w-90 w-md-75 w-lg-60 mx-auto text-center">
                <div class="item">
                    <div class="avatar-photo mb-6">
                        <img src="img/avatar/person_03.jpg" alt="...">
                    </div>
                    <div class="avatar-item mt-4">
                        <div class="avatar-info">
                            <h4>Douglas Noronha</h4>
                            <span>Aumentou a conversão em 47%
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="item-inner">

                        <p>"Ótimo sistema, recomendo.
                            já adquiri um pacote e já estou tento resultados.
                            Parabéns aos desenvolvedores."
                        </p>
                        <span class="display-22 opacity2"><i class="fas fa-quote-right"></i></span>



                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end testmonials section -->

<!-- start contact section -->
<section class="parallax cover-background theme-overlay" data-overlay-dark="9" data-background="img/banner/bg1.jpg">
    <div class="container">
        <div class="text-center section-heading">
            <div class="col-lg-12 col-md-4">
                <h2>Receba um SMS ShortCode Grátis</h2>
                <div class="text-center section-heading white">
                    <p class="mb-2 display-30 col-lg-8">Veja o formato em que seu cliente irá receber os SMS
                        enviados,
                        informe seu número de celular e aguarde o recebimento do SMS.</p>
                    <div class="row" style="display:flex; justify-content:center">

                        <div class="col-md-4">
                            <div class="quform-element form-group">
                                <div class="quform-input">
                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="EX:(99) 99999-9999" style="height: 50px !important;" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="quform-submit-inner">
                            <button class="butn style-one fill" type="submit" style="background-color:white;"><span class="text-primary">Receber SMS
                                    Teste</span></button>
                        </div>
                        <div class="quform-loading-wrap text-left"><span class="quform-loading"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->

<!-- start pricing table -->
<section class="price bg-light" id="price_sms">
    <div class="container">
        <div class="section-heading wow fadeInUp" data-wow-delay=".1s">
            <h2>Escolha a quantidade de SMS ideal para você</h2>
            <p class="mb-0 display-30" style="font-size: 13px;">Deseja personalizar seu pacote?<strong> <a href="" class="text-primary">Fale com um consultor
                        clicando aqui.</a></strong></p>
        </div>

        <div class="col-lg-12 mb-4 mb-lg-0 wow fadeInUp" data-wow-delay=".1s">

            <div class="bg-light" style="padding-bottom: 8% !important;padding-left: 7%;">
                <!-- <input type="range" data-rangeslider style="width: 100%; border-radius:50%"> -->
                <!-- 
            <input type="range" list="planos_sms"  style="width: 100%; border-radius:50%">

                    <datalist id="planos_sms">
                        <option value="0" label="0">

                        <option value="1.000" label="1.000">
                        <option value="5.000" label="5.000">
                        <option value="10.000" label="10.000">
                        <option value="50.000" label="50.000">
                        <option value="100.000" label="100.000">

                    </datalist> -->

                <div class="range">
                    <input type="range" id="valor_sms" min="1" max="5" steps="1" value="1">
                </div>

                <ul class="range-labels">
                    <!-- <li class="active selected btn_sms_price" value="1">0</li> -->
                    <li class="active selected btn_sms_price" value="2">1.000</li>
                    <li class="btn_sms_price" value="3">5.000</li>
                    <li class="btn_sms_price" value="4">10.000</li>
                    <li class="btn_sms_price" value="5">50.000</li>
                    <li class="btn_sms_price" value="6">100.000</li>
                    <!-- <li class="btn_sms_price" value="7">110.000</li> -->
                </ul>
            </div>


        </div>
        <div class="col-lg-12 mb-4 mb-lg-0">
            <div class="card card-style05 pt-2-8 pb-2-4 px-1-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="box-hover">
                    <div class="container">

                        <div class="row position-relative">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table" style="padding-left: 0;">
                                        <thead>
                                            <tr>
                                                <th class="th_sms">Tipo de SMS</th>
                                                <th class="th_sms">ShortCode SMS</th>
                                                <th class="th_sms">Valor por SMS</th>
                                                <th class="th_sms">Valor</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ShortCode SMS</td>
                                                <td id="qntd_sms">000/sms</td>
                                                <td id="prices_sms">R$: 00,00</td>
                                                <td id="totais_sms">R$: 00,00</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="precos_planos" style="display: flex;justify-content: space-between  ;">
                                        <h3>Total:</h3>
                                        <h3 class="text-primary" id="totais_sms_2">R$: 00,00</h3>
                                    </div>
                                    <div class="text-left">
                                        <!-- <p class="mb-6 display-30" style="font-size: 10px;">** Todos os pacotes
                                            de créditos expiram em 1
                                            ano, mas basta fazer uma ativação de qualquer outro pacote antes do
                                            vencimento, para seu saldo anterior ser renovado por mais 1 ano.</p> -->

                                    </div>
                                    <div class="text-right">
                                        <button class="butn style-one fill" type="submit"><span>Adquirir
                                                pacote</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>
<!-- end pricing table -->
<section class="contact bg-light" id="contato_sms">
    <div class="container">
        <div class="section-heading">
            <h2>Deseja entrar em contato?</h2>
        </div>
        <div class="row">
            <a href="contact.php">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card card-style05 pt-2-8 pb-2-4 px-1-6 wow fadeInUp" data-wow-delay=".2s">
                        <i class="fas fa-envelope-open-text"></i>
                        <h3 class="h5 mb-3">Preencha um formulário</h3>
                        <p class="mb-0 w-90 w-md-75 w-lg-100 mx-auto">Entraremos em contato em até 24 horas.</p>
                    </div>
            </a>
        </div>
        <div class="col-lg-6">
            <a target="_blank" href="https://bit.ly/atendK">
                <div class="card card-style05 pt-2-8 pb-2-4 px-1-6 wow fadeInUp" data-wow-delay=".2s">
                    <i class="fab fa-whatsapp"></i>
                    <h3 class="h5 mb-3">Fale com um consultor</h3>
                    <p class="mb-0 w-90 w-md-75 w-lg-100 mx-auto">Fale diretamente pelo WhatsApp.</p>
                </div>
            </a>
        </div>
    </div>
    </div>
</section>

<section class="contact bg-light" id="duvidas_sms">
    <div class="container">
        <div class="section-heading">
            <h2>Tem alguma duvida?</h2>
        </div>
        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="accordion" id="accordionExample">
                    <div class="col-lg-12">

                        <div id="accordion" class="accordion-style01">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="counts">1</span>
                                            <span class="item-title">Meu saldo de créditos tem validade dentro da plataforma?</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Sim, seus créditos são válidos por 90 dias corridos, ou se fizer outra recarga nesse periodo extendo por mais 90 dias.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="counts">2</span>
                                            <span class="item-title">Preciso assinar alguma mensalidade para utilizar a plataforma?</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Não, nossa plataforma de envio é livre de fidelidades e taxas ocultas, você pode recarregar seu saldo quando quiser.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="counts">3</span>
                                            <span class="item-title">Vocês disponibilizam a lista de contatos?</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Não, os SMS serão enviados com base na lista de contatos que você irá fornecer a plataforma.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span class="counts">4</span>
                                            <span class="item-title">Minhas mensagens são filtradas antes do envio?</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        Sim, as mensagens são filtradas para garantir que nenhum SMS seja retido baseado nas diretrizes de cada operadora.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <div class="mb-0">
                                        <h5 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <span class="counts">5</span>
                                            <span class="item-title">Consigo utilizar o sistema no Celular?</span>
                                        </h5>
                                    </div>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        Sim, você pode baixar gratuitamente o aplicativo da SMS Mobile disponível na PlayStore ou acessar diretamente pelo seu navegador de internet.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>
</section>
<!-- start footer section -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
            valor_att(1);

    });
    $('.btn_sms_price').click(function() {
        var id_input = $(this).val();
        // $('#val_plan').val(id_input);
        // alert(id_input);
        valor_att(id_input)
    });
    $('#valor_sms').click(function() {
        var id_input = $(this).val();
        // $('#val_plan').val(id_input);
        // alert(id_input);
        valor_att(id_input)
    });

    function valor_att(id_input) {
        var qtd_sms = '';
        var price_sms = '';
        var total_sms = '';
        var id_plan = id_input;

        // if (id_plan == '1') {
        //     price_sms = 'R$:0,00';
        //     qtd_sms = '0/sms';
        //     total_sms = 'R$:00,00';
        //     $('#qntd_sms').html(qtd_sms);
        //     $('#prices_sms').html(price_sms);
        //     $('#totais_sms').html(total_sms);
        //     $('#totais_sms_2').html(total_sms);
        // }
        if (id_plan == '1') {
            price_sms = 'R$:0,075';
            qtd_sms = '1.000/sms';
            total_sms = 'R$:75,00';
            $('#qntd_sms').html(qtd_sms);
            $('#prices_sms').html(price_sms);
            $('#totais_sms').html(total_sms);
            $('#totais_sms_2').html(total_sms);

        }
        if (id_plan == '2') {
            price_sms = 'R$:0,063';
            qtd_sms = '5.000/sms';
            total_sms = 'R$:315,00';
            $('#qntd_sms').html(qtd_sms);
            $('#prices_sms').html(price_sms);
            $('#totais_sms').html(total_sms);
            $('#totais_sms_2').html(total_sms);

        }
        if (id_plan == '3') {
            price_sms = 'R$:0,05';
            qtd_sms = '10.000/sms';
            total_sms = 'R$:500,00';
            $('#qntd_sms').html(qtd_sms);
            $('#prices_sms').html(price_sms);
            $('#totais_sms').html(total_sms);
            $('#totais_sms_2').html(total_sms);

        }
        if (id_plan == '4') {
            price_sms = 'R$:0,048';
            qtd_sms = '50.000/sms';
            total_sms = 'R$:2.400,00';
            $('#qntd_sms').html(qtd_sms);
            $('#prices_sms').html(price_sms);
            $('#totais_sms').html(total_sms);
            $('#totais_sms_2').html(total_sms);

        }
        if (id_plan == '5') {
            price_sms = 'R$:0,045';
            qtd_sms = '100.000/sms';
            total_sms = 'R$:4.500,00';
            $('#qntd_sms').html(qtd_sms);
            $('#prices_sms').html(price_sms);
            $('#totais_sms').html(total_sms);
            $('#totais_sms_2').html(total_sms);

        }
        // if (id_plan == '7') {
        //     price_sms = 'R$:0,045';
        //     qtd_sms = '110.000/sms';
        //     total_sms = 'R$:4.950,00';
        //     $('#qntd_sms').html(qtd_sms);
        //     $('#prices_sms').html(price_sms);
        //     $('#totais_sms').html(total_sms);
        //     $('#totais_sms_2').html(total_sms);

        // }


    }
</script>
<?php
include "footer.php"
?>
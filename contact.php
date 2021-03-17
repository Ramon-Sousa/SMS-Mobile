<?php

include "head.php";

?>
<style>
    .navbar-default{
         background-color: white;
    }
</style>
<!-- start page title section -->
<div class="page-title-section h-50 " style="
background: linear-gradient(0deg, rgba(34,168,207,1) 0%, rgba(0,138,166,1) 100%);padding: 150px 0 100px;">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Entre em contato</h1>
            </div>
            <div class="col-md-12">
                <ul>
                    <li><a href="demo-1.html">Início</a></li>
                    <li><a href="javascript:void(0)">Entre em contato</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- end page title section -->

<!-- start contact section -->
<section class="bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card card-style07 py-2-8 px-1-6 bg-white wow fadeInUp" data-wow-delay=".2s">
                    <div class="card-body">
                        <div class="title-box mb-4">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="box-circle-large"></div>
                            <div class="box-circle-small"></div>
                        </div>
                        <h3 class="h5 mb-3">Conheça nosso escritório</h3>
                        <p class="mb-0 w-90 w-md-75 w-lg-100 mx-auto"> Av. Paulo VI, 781 - Jardim Alvorada, Franca - SP</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card card-style07 py-2-8 px-1-6 bg-white wow fadeInUp" data-wow-delay=".4s">
                    <div class="card-body">
                        <div class="title-box mb-4">
                            <i class="fas fa-comments"></i>
                            <div class="box-circle-large"></div>
                            <div class="box-circle-small"></div>
                        </div>
                        <h3 class="h5 mb-3">Fale pelo WhatsApp</h3>
                        <p class="mb-0 w-90 w-md-75 w-lg-100 mx-auto"> +55 16 99235-3914</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end contact section -->

<!-- start contact form -->
<section class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 wow fadeIn">
                <div class="card card-style05 pt-2-8 pb-2-4 px-1-6 wow fadeInUp" data-wow-delay=".1s">

                    <div class="w-md-85 w-xl-65 text-center mx-auto mb-6 mb-lg-8">
                        <h2 class="mb-4">Deixe sua mensagem</h2>
                        <p class="mx-auto mb-0">Estamos prontos para te ouvir, preencha os dados abaixo para deixar sua mensagem</p>
                    </div>

                    <!-- start form here -->
                    <form class="quform" action="" method="post" enctype="multipart/form-data" onclick="">

                        <div class="quform-elements">

                            <div class="form-row">

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="name" type="text" name="name" placeholder="Nome" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" type="text" name="email" placeholder="Email" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->
                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="phone" type="text" name="phone" placeholder="Celular" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->
                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="assunto" type="text" name="assunto" placeholder="Assunto desta mensagem" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Textarea element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
                                        <div class="quform-input">
                                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Deixe sua mensagem"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Textarea element -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="text-right quform-submit-inner">
                                        <button class="butn style-one fill" type="submit"><span>Enviar mensagem</span></button>
                                    </div>
                                    <div class="quform-loading-wrap text-left"><span class="quform-loading"></span></div>
                                </div>
                                <!-- End Submit button -->

                            </div>

                        </div>

                    </form>
                    <!-- end form here -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact form -->

<!-- start map section -->
<iframe class="contact-map" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.732051969636!2d-47.40543685004908!3d-20.558141363388472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b0a88f655f3897%3A0xd7751f071215f53e!2sAv.%20Paulo%20VI%2C%20781%20-%20Jardim%20Alvorada%2C%20Franca%20-%20SP%2C%2014403-138!5e0!3m2!1spt-BR!2sbr!4v1615472749432!5m2!1spt-BR!2sbr" scrolling="no" marginheight="0" marginwidth="0"></iframe>
<!-- end map section -->
<?php
include "footer.php"
?>
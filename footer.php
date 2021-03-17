        <!-- footer-->
        <footer class="footer pt-lg-9 pt-5 pb-4" style="color: white  !important;background-color: linear-gradient(0deg, rgba(34,168,207,1) 0%, rgba(0,138,166,1) 100%) !important">

            <!-- container start -->
            <div class="container">

                <!-- row start -->
                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-2 text-center">
                        <a class="mb-5 d-block" href="index.php"><img src="img/logos/logo_2x1 sms_white.png" width="250" alt="Logo"></a>
                        <p class="text-white">Copyright &copy; SMS Mobile
                            <script>
                                document.write(new Date().getFullYear())
                            </script>. <br> Todos os direitos
                            reservados
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <h3 class="footer-title-style2 text-white">Menu</h3>
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <ul class="footer-list mb-3 mb-md-0 pr-3">
                                    <!-- <li><a href="https://smsmobile.com.br/blog/">Blog</a></li> -->
                                    <li><a href="index.php#price_sms">Planos</a></li>
                                    <li><a href="index.php#duvidas_sms">Dúvidas</a></li>
                                    <li><a href="index.php#contato_sms">Contato</a></li>
                                    <li><a href="api.php">API</a></li>
                                    <li><a href="termos.php">Termos de uso</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 offset-lg-1">
                        <h3 class="footer-title-style2 text-white ">Informações de contato</h3>
                        <ul class="footer-list">
                            <li>
                                <div class="media mb-1">
                                    <i class="fas fa-map-marker-alt  mt-1 mr-3"></i>
                                    <div class="media-body">
                                        Av. Paulo VI, 781 - Jardim Alvorada, Franca - SP
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media mb-1">
                                    <i class="fas fa-mobile-alt  mt-1 mr-3"></i>
                                    <div class="media-body">
                                        +55 16 99235-3914
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media mb-1">
                                    <i class="far fa-envelope  mt-1 mr-3"></i>
                                    <div class="media-body">
                                        adm@smsmobile.com.br
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <i class="fas fa-globe  mt-1 mr-3"></i>
                                    <div class="media-body">
                                        www.ibsystem.com.br
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>



                </div>
                <!-- row end -->

                <!-- row start -->
                <!-- <div class="row mt-5">
				<div class="col-12 text-left text-sm-center">
					<p class="mb-0 text-white">© <a class="text-white" href="index-2.php">Soft-x</a> 2020. All rights
						reserved. There are basically six key areas to higher achievement. Some people will tell you
						there are four while others may tell you there are eight. One thing for certain though, is that
						irrespective of the number of steps the experts talk about. <a class="text-white"
							href="terms-and-conditions.php">Terms of Use</a> & <a class="text-white"
							href="privacy-policy.php">Privacy Policy</a></p>
				</div>

			</div> -->
                <!-- row end -->

            </div>
            <!-- container end -->

        </footer>
        <!-- <footer class="bg-grey">

            <div class="footer-bar xl-font-size13">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-left mb-1 mb-md-0 display-30">
                            <p>Copyright &copy; SMS Mobile
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>. Todos os direitos
                                reservados
                            </p>
                        </div>
                        <div class="col-md-6 text-center text-md-right display-31 display-md-30">
                            Desenvolvido por: <a href="https://www.ibsystem.com.br/" target="_blank">ibSystem</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- end footer section -->

        </div>

        <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
        

        <script src="js/core.min.js"></script>

        <!-- Search -->
        <script src="search/search.js"></script>

        <!-- custom scripts -->
        <script src="js/main.js"></script>
        <script src="js/ranger.js"></script>

        <!-- form plugins js -->
        <script src="quform/js/plugins.js"></script>

        <!-- form scripts js -->
        <script src="quform/js/scripts.js"></script>
        <script type="text/javascript">
            var sliderEl1 = document.querySelector('.first [data-rangeslider]')
            var sliderEl2 = document.querySelector('.second [data-rangeslider]')
            var sliderEl3 = document.querySelector('.third [data-rangeslider]')

            sliderEl2.addEventListener('input', (ev) => {
                document.querySelector('.second .output').innerHTML = ev.target.value
            })
            sliderEl3.addEventListener('input', (ev) => {
                document.querySelector('.third .output').innerHTML = ev.target.value
            })

            rangesliderJs.create(sliderEl1, {
                min: 0,
                max: 5,
                step: 0.5
            })
            rangesliderJs.create(sliderEl2)
            rangesliderJs.create(sliderEl3, {
                onSlide: function() {
                    console.log(this)
                }
            })
        </script>
        <!-- all js include end -->

        </body>

        </html>
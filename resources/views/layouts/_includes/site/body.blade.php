<!doctype html>
<html lang="pt-br">
@include('layouts._includes.site.head')

<body>

    <!-- PRELOADER SPINNER
		============================================= -->
    {{--<div id="loading" class="loading--theme">
        <div id="loading-center"><span class="loader"></span></div>
    </div>--}}

    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page font--jakarta">
        <!-- HEADER
			============================================= -->
      @include('layouts._includes.site.menu')
         <!-- END HEADER -->
        @yield('conteudo')

        <!-- MODAL WINDOW (IMAGE LINK)
			============================================= -->
        {{--<div id="modal-1" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">


                    <!-- CLOSE BUTTON -->
                    <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
                        <span class="flaticon-cancel"></span>
                    </button>


                    <!-- MODAL CONTENT -->
                    <div class="bg-img rounded">
                        <div class="overlay-light">
                            <div class="modal-img text-center">
                                <a href="pricing-1.html">
                                    <img class="img-fluid" src="{{ asset('site/images/modal-2-img.jpg')}}" alt="modal-image">
                                </a>
                            </div>
                        </div>
                    </div> <!-- END MODAL CONTENT -->


                </div>
            </div>
        </div> <!-- END MODAL WINDOW (IMAGE LINK) -->

        <!-- MODAL WINDOW (REQUEST FORM)
			============================================= -->
        <div id="modal-3" class="modal auto-off fade" tabindex="-1" role="dialog" aria-labelledby="modal-3">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">


                    <!-- CLOSE BUTTON -->
                    <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
                        <span class="flaticon-cancel"></span>
                    </button>


                    <!-- MODAL CONTENT -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">


                                <!-- BACKGROUND IMAGE -->
                                <div class="col-md-5 bg-img d-none d-sm-flex align-items-end"></div>


                                <!-- REQUEST FORM -->
                                <div class="col-md-7">
                                    <div class="modal-body-content">

                                        <!-- TEXT -->
                                        <div class="request-form-title">

                                            <!-- Title 	-->
                                            <h3 class="s-28 w-700">Get started for Free!</h3>

                                            <!-- Text -->
                                            <p class="color--grey">Aliquam augue suscipit, luctus neque purus ipsum
                                                neque dolor primis libero
                                            </p>

                                        </div>

                                        <!-- FORM -->
                                        <form name="requestForm" class="row request-form">

                                            <!-- Form Input -->
                                            <div class="col-md-12">
                                                <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" autocomplete="off" required>
                                            </div>

                                            <!-- Form Input -->
                                            <div class="col-md-12">
                                                <input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" autocomplete="off" required>
                                            </div>

                                            <!-- Form Button -->
                                            <div class="col-md-12 form-btn">
                                                <button type="submit" class="btn btn--theme hover--black submit">Get
                                                    Started Now</button>
                                            </div>

                                            <!-- Form Message -->
                                            <div class="col-md-12 request-form-msg">
                                                <span class="loading"></span>
                                            </div>

                                        </form> <!-- END FORM -->

                                    </div>
                                </div> <!-- END REQUEST FORM -->


                            </div>
                        </div>
                    </div> <!-- END MODAL CONTENT -->


                </div>
            </div>
        </div>--}} <!-- MODAL WINDOW (REQUEST FORM) -->

        <!-- FOOTER-3
			============================================= -->
       @include('layouts._includes.site.footer')
         <!-- END FOOTER-3 -->

    </div> <!-- END PAGE CONTENT -->

    <!-- EXTERNAL SCRIPTS
		============================================= -->
    <script src="{{ asset('site/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('site/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('site/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('site/js/menu.js') }}"></script>
    <script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/js/pricing-toggle.js') }}"></script>
    <script src="{{ asset('site/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('site/js/request-form.js') }}"></script>
    <script src="{{ asset('site/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('site/js/popper.min.js') }}"></script>
    <script src="{{ asset('site/js/lunar.js') }}"></script>
    <script src="{{ asset('site/js/wow.js') }}"></script>

    <!-- Custom Script -->
    <script src="{{ asset('site/js/custom.js') }}"></script>

    <script>
        $(document).on({
            "contextmenu": function(e) {
                console.log("ctx menu button:", e.which);

                // Stop the context menu
                // e.preventDefault();
            }
            , "mousedown": function(e) {
                console.log("normal mouse down:", e.which);
            }
            , "mouseup": function(e) {
                console.log("normal mouse up:", e.which);
            }
        });

    </script>

    

    <script>
        $(document).ready(function() {
            if ($("body").hasClass("theme--dark")) {
                $(".switch").text("Light Mode");
            } else {
                $(".switch").text("Dark Mode");
            }
        });

    </script>

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
    <!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->

    <script src="{{ asset('site/js/changer.js') }}"></script>
    <script defer src="{{ asset('site/js/styleswitch.js') }}"></script>

</body>

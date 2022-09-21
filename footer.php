<a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget">
                            <a href="index.php"><img alt="" class="img-fluid mb20" src="https://mgc.az/assets/images/logo/logo300.png"></a>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>
                                                                                    44 Jafar Jabbarly Ave.
                                                                                    Baku, Azerbaijan, AZ1065,
                                                                                    Caspian Plaza, 3rd building, 3rd floor
                                </span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+994512072324</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:office@mgc.az">office@mgc.az</a></span>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="id-color mb20"><?php echo constant('our_expertise'); ?></h5>
                        <ul class="ul-style-2">
                            <li><?php echo constant('tax_law'); ?></li>
                            <li><?php echo constant('ngo_law'); ?></li>
                            <li><?php echo constant('labour_law'); ?></li>
                            <li><?php echo constant('migration_law'); ?></li>
                            <li><?php echo constant('project_managment'); ?></li>
                            <li><?php echo constant('accounting'); ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            <h5 class="id-color"><?php echo constant('newsletter'); ?></h5>
                            <p><?php echo constant('newsletter_text'); ?></p>
                            <form action="" class="row" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="name_1" name="name_1" placeholder="<?php echo constant('enter_email'); ?>" type="text" />
                                    <a href="#" id="btn-submit">
                                        <i class="fa fa-long-arrow-right">

                                        </i>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                     <a href="https://burncode.az" target="_blank"> Burncode Systems </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="https://www.facebook.com/mgconsultingazerbaijan" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://www.linkedin.com/in/mgconsultingazerbaijan" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="https://www.instagram.com/mgconsultingazerbaijan" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!-- Javascript Files
    ================================================== -->

<script>
    function change_lang(value){
        window.location.replace("?lang="+value);
    }
</script>

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "648657915183977");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v15.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/easing.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/enquire.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/jquery.plugin.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/jarallax.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.countdown.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/jarallax.js"></script>
    <script src="assets/js/designesia.js"></script>
</body>
</html>
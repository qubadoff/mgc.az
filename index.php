<?php include "header.php"; ?>
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section aria-label="section" class="jarallax vh-100 no-padding text-light">
                <img src="https://mgc.az/assets/images/index/ss2.jpg" class="jarallax-img" alt="">
                <div class="v-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h1 class="wow fadeInUp text-uppercase" data-wow-delay=".6s"><font color="blue"><?php echo constant('title'); ?></font></h1>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s"><font color="blue"><?php echo constant('mg2'); ?></font></h2>
                                <div class="spacer-20"></div>
                                <a class="btn-custom wow fadeInUp" data-wow-delay="1s" href="contact.php"><?php echo constant('contact_slider'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-top relative text-light">
                <div class="container">
                    <div class="row bg-color no-gutters mt-100">
                        <div class="col-lg-4 col-md-6">
                            <div class="feature-box f-boxed style-3 text-center" data-bgcolor="rgba(0,0,0,.1)">
                                <i class="icofont-letter"></i>
                                <div class="text">
                                    <h4><?php echo constant('3_1'); ?></h4>
                                    
                                </div>
                                <i class="wm icofont-letter"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="feature-box f-boxed style-3 text-center" data-bgcolor="rgba(0,0,0,.2)">
                                <i class="icofont-investigation"></i>
                                <div class="text">
                                    <h4><?php echo constant('3_2'); ?></h4>
                                   
                                </div>
                                <i class="wm icofont-investigation"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="feature-box f-boxed style-3 text-center" data-bgcolor="rgba(0,0,0,.3)">
                                <i class="icofont-hand-power"></i>
                                <div class="text">
                                    <br>
                                    <h4><?php echo constant('3_3'); ?></h4>
                                  
                                </div>
                                <i class="wm icofont-hand-power"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2><?php echo constant('our_expertise'); ?></h2>
                                <div class="small-border"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="icofont-group bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4><?php echo constant('tax_law'); ?></h4>
                                    <p><?php echo constant('tax_law_text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="icofont-medical-sign-alt bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4><?php echo constant('ngo_law'); ?></h4>
                                    <p><?php echo constant('ngo_law_text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="icofont-mining bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4><?php echo constant('labour_law'); ?></h4>
                                    <p><?php echo constant('labour_law_text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="icofont-law-order bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4><?php echo constant('migration_law'); ?></h4>
                                    <p><?php echo constant('migration_law_text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="icofont-group-students bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4><?php echo constant('project_managment'); ?></h4>
                                    <p><?php echo constant('project_managment_text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="icofont-money bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4><?php echo constant('accounting'); ?></h4>
                                    <p><?php echo constant('accounting_text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-bgcolor="#f2f2f2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 offset-lg-7">
                            <h2>
                                <?php echo constant('why_choose_us'); ?>
                            </h2>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo constant('our_firm'); ?></a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p>
                                        <?php echo constant('our_firm_text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jarallax image-container col-md-6 pull-right">
                    <img src="https://mgc.az/assets/images/index/clients.jpeg" class="jarallax-img" alt="">
                </div>
            </section>


            <!-- <section id="section-fun-facts" class="pt60 pb60">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay="0s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="1000" data-speed="3000"></span>+</h3>
                                <h5 class="id-color">Client Consultations</h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay=".25s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="95" data-speed="3000"></span>%</h3>
                                <h5 class="id-color">Successful Cases</h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay=".4s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="10" data-speed="3000">0</span>mlns</h3>
                                <h5 class="id-color">Recovered cost for clients</h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 wow fadeInUp mb-sm-30" data-wow-delay=".6s">
                            <div class="de_count">
                                <h3><span class="timer" data-to="5" data-speed="3000">0</span></h3>
                                <h5 class="id-color">Professional Attorneys</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

<br><br>
            <!-- <section class="pt40 pb40 bg-color text-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                            <h3 class="no-bottom">Now! Get a Free Consultation for Your Case.</h3>
                        </div>
                        <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                            <a href="#" class="btn-custom btn-black light">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </section> -->
        </div>
        <!-- content close -->
<?php include "footer.php"; ?>
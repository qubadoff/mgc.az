<?php include "header.php"; ?>
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
<br><br>
            <section aria-label="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://ak-d.tripcdn.com/images/200916000000zlohvF798_Z_1100_824_R5_Q70_D.jpg" alt="" class="img-fluid mb30">
                            <h3><?php echo constant('azerbaijan_office'); ?></h3>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i> 44 Jafar Jabbarly Ave. Baku, Azerbaijan, AZ1065, Caspian Plaza, 3rd building, 3rd floor</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+994512072324</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:office@mgc.az">office@mgc.az</a></span>
                            </address>
                        </div>

                    </div>
                </div>
            </section>
            <section aria-label="section" class="text-light" data-bgcolor="black">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center">
                            <h3><?php echo constant('question'); ?></h3>
                            <form name="contactForm" id="contact_form" class="form-border" method="post" action="system/sendmail.php">
                                <div class="field-set">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="   <?php echo constant('fullname'); ?>" />
                                </div>
                                <div class="field-set">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="   <?php echo constant('email'); ?>" />
                                </div>
                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="   <?php echo constant('phone'); ?>" />
                                </div>
                                <div class="field-set">
                                    <textarea name="message" id="message" class="form-control" placeholder="   <?php echo constant('message'); ?>"></textarea>
                                </div>
                                <div class="spacer-half"></div>
                                <div id="submit">
                                    <input name="submit" type="submit" id="send_message" value="<?php echo constant('submit'); ?>" class="btn btn-custom" />
                                </div>
                                <div id="mail_success" class="success"><?php echo constant('send_success'); ?></div>
                                <div id="mail_fail" class="error"><?php echo constant('send_error'); ?></div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                </div>
            </section>
<br><br>
        </div>
        <!-- content close -->



        <?php include "footer.php"; ?>
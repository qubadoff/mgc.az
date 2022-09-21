<?php include "header.php"; ?>

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
<br><br>
            <section id="section-features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb30">
                            <div class="box-highlight">
                                <div class="heading text-center text-light">
                                    <h3><?php echo constant('general'); ?></h3>
                                </div>
                                <div class="content">
                                    <div class="accordion">
                                        <div class="accordion-section">
                                            <div class="accordion-section-title" data-tab="#accordion-1">
                                                <?php echo constant('faq_1'); ?>
                                            </div>
                                            <div class="accordion-section-content" id="accordion-1">
                                                <p>
                                                    <?php echo constant('faq_1_text'); ?>
                                                </p>
                                            </div>
                                            <div class="accordion-section-title" data-tab="#accordion-2">
                                                <?php echo constant('faq_2'); ?>
                                            </div>
                                            <div class="accordion-section-content" id="accordion-2">
                                                <p>
                                                    <?php echo constant('faq_2_text'); ?>
                                                </p>
                                            </div>
                                            <div class="accordion-section-title" data-tab="#accordion-3">
                                                <?php echo constant('faq_3'); ?>
                                            </div>
                                            <div class="accordion-section-content" id="accordion-3">
                                                <p>
                                                    <?php echo constant('faq_3_text'); ?>
                                                </p>
                                            </div>
                                            <div class="accordion-section-title" data-tab="#accordion-4">
                                                <?php echo constant('faq_4'); ?>
                                            </div>
                                            <div class="accordion-section-content" id="accordion-4">
                                                <p>
                                                    <?php echo constant('faq_4_text'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <!-- content close -->


        <?php include "footer.php"; ?>
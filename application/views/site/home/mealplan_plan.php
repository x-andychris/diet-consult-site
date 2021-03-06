<!--================ Info Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list" style="margin-bottom: 35px;">
                <!-- Eating Timetable section -->
                <section class="page-section cta">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 mx-auto">
                                <div class="cta-inner text-center rounded">
                                    <h2 class="section-heading mb-5">
                                        <span class="section-heading-upper"><?php echo $mealplan_info -> plan; ?></span>
                                        <!-- <span class="section-heading-lower">Your meal plan</span> -->
                                    </h2>
                                    <?php $this->load->view('site/home/sections-3/meals_section');?>
                                    <p class="address mb-5">
                                        <em>
                                            <strong>1116 Orchard Street</strong>
                                            <br>
                                            Golden Valley, Minnesota
                                        </em>
                                    </p>
                                    <p class="mb-0">
                                        <small>
                                            <em>Call Anytime</em>
                                        </small>
                                        <br>
                                        (317) 585-8468
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('site/home/sections-3/sidebar_section');?>
            </div>
        </div>
    </div>
</section>
<!--================ Info Area =================-->

<!-- Importing Modals -->
<?php $this->load->view('site/home/modals/liquids_modal');?>
<?php $this->load->view('site/home/modals/meals_modal');?>
<?php $this->load->view('site/home/modals/shoppinglist_modal');?>
<?php $this->load->view('site/home/modals/snacks_modal');?>
<?php $this->load->view('site/home/modals/toavoid_modal');?>
<?php $this->load->view('site/home/modals/toeat_modal');?>
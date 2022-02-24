<!--================ Info Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
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
                                    <?php $this->load->view('site/mymealplan/sections/meals_section');?>
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
        </div>
    </div>
</section>
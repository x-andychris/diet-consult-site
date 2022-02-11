<!--================ Info Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">
                        <div class="feature-img">
                            <img class="img-fluid"
                                src="<?php echo base_url('assets/images/mealplans/' . $mealplan_info -> image); ?>"
                                style="width: 730px; height: 340px;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3">
                        <div class="blog_info text-right">
                            <div class="post_tag">
                                <a href="javascript:{}">Food,</a>
                                <a href="javascript:{}">Diet,</a>
                                <a href="javascript:{}">Nutrition</a>
                            </div>
                            <ul class="blog_meta list">
                                <li>
                                    <a href="javascript:{}">
                                        <?php if($mealplan_accounts){echo count($mealplan_accounts);}else{echo "0";} ?>
                                        Dieter(s)<i class="fa fa-user-o"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:{}">
                                        Is Blood Group?
                                        <?php if($mealplan_info -> is_blood_group == 0){echo "N";}else{echo "Y";} ?>
                                        <i class="fa fa-calendar-o"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:{}">
                                        Calorie Tracked?
                                        <?php if($mealplan_info -> is_calorie_tracking == 0){echo "N";}else{echo "Y";} ?>
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 blog_details">
                        <h3><?php echo $mealplan_info -> plan; ?></h3>
                        <p class="excert">
                            <?php echo nl2br($mealplan_info -> description); ?>
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <div class="quotes">
                            <?php echo nl2br($mealplan_info -> summary); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('site/home/sections-2/sidebar_section');?>
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
<!--================Blog Area =================-->
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
                                <a href="#">Food,</a>
                                <a href="#">Diet,</a>
                                <a href="#">Nutrition</a>
                            </div>
                            <ul class="blog_meta list">
                                <li><a href="#">1 Dieter(s)<i class="fa fa-user-o"></i></a></li>
                                <li><a href="#">Is Blood Group? Y<i class="fa fa-calendar-o"></i></a></li>
                                <li><a href="#">Calorie Tracking? Y<i class="fa fa-eye"></i></a></li>
                            </ul>
                            <!-- <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul> -->
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
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <button class="widget_title form-control">Select Plan</button>
                        </div>
                        <div class="br"></div>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Meal Plan</h4>
                        <ul class="list cat-list">
                            <!-- To Eat Section -->
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>To Eat</p>
                                    <p>37</p>
                                </a>
                            </li>
                            <!-- To Avoid Section -->
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>To Avoid</p>
                                    <p>24</p>
                                </a>
                            </li>
                            <!-- Liquids Section -->
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Liquid(s)</p>
                                    <p>
                                        <?php if($mealplan_liquids){echo count($mealplan_liquids);}else{echo "0";} ?>
                                    </p>
                                </a>
                            </li>
                            <!-- Snacks Section -->
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Snack(s)</p>
                                    <p>
                                        <?php if($mealplan_snacks){echo count($mealplan_snacks);}else{echo "0";} ?>
                                    </p>
                                </a>
                            </li>
                            <!-- Meals Section -->
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Meal(s)</p>
                                    <p>
                                        <?php if($mealplan_foods){echo count($mealplan_foods);}else{echo "0";} ?>
                                    </p>
                                </a>
                            </li>
                        </ul>
                        <div class="br"></div>
                    </aside>
                    <aside class="single-sidebar-widget newsletter_widget">
                        <h4 class="widget_title">Shopping List</h4>
                    </aside>
                    <!-- <aside class="single-sidebar-widget tag_cloud_widget">
                        <ul class="list">
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Adventure</a></li>
                        </ul>
                    </aside> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
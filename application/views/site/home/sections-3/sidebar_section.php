<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <div class="input-group">
            <button class="widget_title form-control" style="cursor: pointer">Select Plan</button>
        </div>
        <div class="br"></div>
    </aside>

    <aside class="single_sidebar_widget post_category_widget">
        <a href="<?php echo base_url('mealplans/' . $mealplan_info -> diet_type_id . '/info'); ?>">
            <h4 class="widget_title" style="cursor: pointer">Plan Info</h4>
        </a>
        <ul class="list cat-list">
            <!-- To Eat Section -->
            <li>
                <a href="javascript:{}" class="d-flex justify-content-between" data-toggle="modal"
                    data-target="#toEatModal">
                    <p>To Eat</p>
                    <p>
                        <?php if ($mealplan_ingredients){ ?>
                        <?php $totake_count = 0; ?>
                        <?php foreach($mealplan_ingredients as $row) :?>
                        <?php if($row -> consumption == "Take"){ $totake_count++;} ?>
                        <?php endforeach; ?>
                        <?php  echo $totake_count; ?>
                        <?php } else{ echo "0";} ?>
                    </p>
                </a>
            </li>
            <!-- To Avoid Section -->
            <li>
                <a href="javascript:{}" class="d-flex justify-content-between" data-toggle="modal"
                    data-target="#toAvoidModal">
                    <p>To Avoid</p>
                    <p>
                        <?php if ($mealplan_ingredients){ ?>
                        <?php $toavoid_count = 0; ?>
                        <?php foreach($mealplan_ingredients as $row) :?>
                        <?php if($row -> consumption == "Avoid"){ $toavoid_count++;} ?>
                        <?php endforeach; ?>
                        <?php  echo $toavoid_count; ?>
                        <?php } else{ echo "0";} ?>
                    </p>
                </a>
            </li>
            <!-- Liquids Section -->
            <li>
                <a href="javascript:{}" class="d-flex justify-content-between" data-toggle="modal"
                    data-target="#liquidsModal">
                    <p>Liquid(s)</p>
                    <p>
                        <?php if($mealplan_liquids){echo count($mealplan_liquids);}else{echo "0";} ?>
                    </p>
                </a>
            </li>
            <!-- Snacks Section -->
            <li>
                <a href="javascript:{}" class="d-flex justify-content-between" data-toggle="modal"
                    data-target="#snacksModal">
                    <p>Snack(s)</p>
                    <p>
                        <?php if($mealplan_snacks){echo count($mealplan_snacks);}else{echo "0";} ?>
                    </p>
                </a>
            </li>
            <!-- Meals Section -->
            <li>
                <a href="javascript:{}" class="d-flex justify-content-between" data-toggle="modal"
                    data-target="#mealsModal">
                    <p>Meal(s)</p>
                    <p>
                        <?php if($mealplan_foods){echo count($mealplan_foods);}else{echo "0";} ?>
                    </p>
                </a>
            </li>
        </ul>
    </aside>
    <aside class="single-sidebar-widget newsletter_widget" style="margin-top: 10px">
        <a href="">
            <h4 class="widget_title" style="cursor: pointer">Shopping List</h4>
        </a>
        <div class="br"></div>
    </aside>
    <!-- Displaying additional meal plans -->
    <aside class="single_sidebar_widget popular_post_widget">
        <?php if ($mealplans){ ?>
        <?php $mealplan_count = 1; ?>
        <?php foreach($mealplans as $row) :?>
        <?php if ($mealplan_count < 4){ ?>
        <?php if ($mealplan_info -> diet_type_id != $row -> diet_type_id){ ?>
        <div class="media post_item">
            <a href="<?php echo base_url('mealplans/' . $row -> diet_type_id . '/info'); ?>">
                <img src="<?php echo base_url('assets/images/mealplans/' . $row -> image); ?>"
                    style="width: 100px; height: 60px" alt="post">
                <div class="media-body">
                    <a href="<?php echo base_url('mealplans/' . $row -> diet_type_id . '/info'); ?>">
                        <h5><?php echo $row -> plan; ?></h5>
                    </a>
                    <p>02 Hours ago</p>
                </div>
            </a>
        </div>
        <?php $mealplan_count++; }} ?>
        <?php endforeach; ?>
        <?php } ?>
        <div class="br"></div>
    </aside>
</div>
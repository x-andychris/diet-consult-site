<!-- Enclosing everything in a php tag so variables can be readily accessed -->
<?php if($mealplan_foods){ ?>
<ul class="list-unstyled list-hours mb-5 text-left mx-auto" style="width: 100%">

    <!-- Categorizing the meals -->
    <!-- Variables to store values during the process -->
    <?php $noof_breakfast = 0; $noof_lunch = 0; $noof_dinner = 0; ?>
    <?php $content_breakfast = []; $content_lunch = []; $content_dinner = []; ?>
    <?php $last_breakfast = -1; $last_lunch = -1; $last_dinner = -1; ?>
    <!-- Breaking into meal sections -->
    <?php foreach($mealplan_foods as $row) :?>
    <?php if($row -> hour_preferred == "Breakfast"){$noof_breakfast++; array_push($content_breakfast, $row);} ?>
    <?php if($row -> hour_preferred == "Lunch"){$noof_lunch++; array_push($content_lunch, $row);} ?>
    <?php if($row -> hour_preferred == "Dinner"){$noof_dinner++; array_push($content_dinner, $row);} ?>
    <?php endforeach; ?>

    <li class="list-unstyled-item list-hours-item d-flex"></li>

    <!----------------------------------------------------------- Sunday ---------------------------------------------------->
    <li class="list-unstyled-item list-hours-item d-flex">
        <span class="text-warning">Sunday</span>
        <span class="ml-auto"></span>
    </li>
    <!-- Sunday Meals -->
    <li class="list-unstyled-item list-hours-item">
        <span class="d-flex">
            Breakfast <span class="ml-auto" style="font-size: 14px"> 6:00 AM - 8:00 AM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_breakfast != 0) {
                    $random_num = rand(0, ($noof_breakfast - 1));
                    if($random_num != $last_breakfast){
                        echo $content_breakfast[$random_num] -> food; 
                        $last_breakfast = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Lunch <span class="ml-auto" style="font-size: 14px"> 11:30 AM - 2:00 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_lunch != 0) {
                    $random_num = rand(0, ($noof_lunch - 1));
                    if($random_num != $last_lunch){
                        echo $content_lunch[$random_num] -> food;
                        $last_lunch = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Dinner <span class="ml-auto" style="font-size: 14px"> 5:00 PM - 7:30 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_dinner != 0) {
                    $random_num = rand(0, ($noof_dinner - 1));
                    if($random_num != $last_dinner){
                        echo $content_dinner[$random_num] -> food;
                        $last_dinner = $random_num; break;
                    }
                } 
            ?>
        </h4>
    </li>

    <!----------------------------------------------------------- Monday ---------------------------------------------------->
    <li class="list-unstyled-item list-hours-item d-flex">
        <span class="text-warning">Monday</span>
        <span class="ml-auto"></span>
    </li>
    <!-- Monday Meals -->
    <li class="list-unstyled-item list-hours-item">
        <span class="d-flex">
            Breakfast <span class="ml-auto" style="font-size: 14px"> 6:00 AM - 8:00 AM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_breakfast != 0) {
                    $random_num = rand(0, ($noof_breakfast - 1));
                    if($random_num != $last_breakfast){
                        echo $content_breakfast[$random_num] -> food; 
                        $last_breakfast = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Lunch <span class="ml-auto" style="font-size: 14px"> 11:30 AM - 2:00 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_lunch != 0) {
                    $random_num = rand(0, ($noof_lunch - 1));
                    if($random_num != $last_lunch){
                        echo $content_lunch[$random_num] -> food;
                        $last_lunch = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Dinner <span class="ml-auto" style="font-size: 14px"> 5:00 PM - 7:30 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_dinner != 0) {
                    $random_num = rand(0, ($noof_dinner - 1));
                    if($random_num != $last_dinner){
                        echo $content_dinner[$random_num] -> food;
                        $last_dinner = $random_num; break;
                    }
                } 
            ?>
        </h4>
    </li>

    <!----------------------------------------------------------- Tuesday ---------------------------------------------------->
    <li class="list-unstyled-item list-hours-item d-flex">
        <span class="text-warning">Tuesday</span>
        <span class="ml-auto"></span>
    </li>
    <!-- Tuesday Meals -->
    <li class="list-unstyled-item list-hours-item">
        <span class="d-flex">
            Breakfast <span class="ml-auto" style="font-size: 14px"> 6:00 AM - 8:00 AM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_breakfast != 0) {
                    $random_num = rand(0, ($noof_breakfast - 1));
                    if($random_num != $last_breakfast){
                        echo $content_breakfast[$random_num] -> food; 
                        $last_breakfast = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Lunch <span class="ml-auto" style="font-size: 14px"> 11:30 AM - 2:00 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_lunch != 0) {
                    $random_num = rand(0, ($noof_lunch - 1));
                    if($random_num != $last_lunch){
                        echo $content_lunch[$random_num] -> food;
                        $last_lunch = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Dinner <span class="ml-auto" style="font-size: 14px"> 5:00 PM - 7:30 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_dinner != 0) {
                    $random_num = rand(0, ($noof_dinner - 1));
                    if($random_num != $last_dinner){
                        echo $content_dinner[$random_num] -> food;
                        $last_dinner = $random_num; break;
                    }
                } 
            ?>
        </h4>
    </li>

    <!----------------------------------------------------------- Wednesday ---------------------------------------------------->
    <li class="list-unstyled-item list-hours-item d-flex">
        <span class="text-warning">Wednesday</span>
        <span class="ml-auto"></span>
    </li>
    <!-- Wednesday Meals -->
    <li class="list-unstyled-item list-hours-item">
        <span class="d-flex">
            Breakfast <span class="ml-auto" style="font-size: 14px"> 6:00 AM - 8:00 AM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_breakfast != 0) {
                    $random_num = rand(0, ($noof_breakfast - 1));
                    if($random_num != $last_breakfast){
                        echo $content_breakfast[$random_num] -> food; 
                        $last_breakfast = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Lunch <span class="ml-auto" style="font-size: 14px"> 11:30 AM - 2:00 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_lunch != 0) {
                    $random_num = rand(0, ($noof_lunch - 1));
                    if($random_num != $last_lunch){
                        echo $content_lunch[$random_num] -> food;
                        $last_lunch = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Dinner <span class="ml-auto" style="font-size: 14px"> 5:00 PM - 7:30 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_dinner != 0) {
                    $random_num = rand(0, ($noof_dinner - 1));
                    if($random_num != $last_dinner){
                        echo $content_dinner[$random_num] -> food;
                        $last_dinner = $random_num; break;
                    }
                } 
            ?>
        </h4>
    </li>

    <!----------------------------------------------------------- Thursday ---------------------------------------------------->
    <li class="list-unstyled-item list-hours-item d-flex">
        <span class="text-warning">Thursday</span>
        <span class="ml-auto"></span>
    </li>
    <!-- Thursday Meals -->
    <li class="list-unstyled-item list-hours-item">
        <span class="d-flex">
            Breakfast <span class="ml-auto" style="font-size: 14px"> 6:00 AM - 8:00 AM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_breakfast != 0) {
                    $random_num = rand(0, ($noof_breakfast - 1));
                    if($random_num != $last_breakfast){
                        echo $content_breakfast[$random_num] -> food; 
                        $last_breakfast = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Lunch <span class="ml-auto" style="font-size: 14px"> 11:30 AM - 2:00 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_lunch != 0) {
                    $random_num = rand(0, ($noof_lunch - 1));
                    if($random_num != $last_lunch){
                        echo $content_lunch[$random_num] -> food;
                        $last_lunch = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Dinner <span class="ml-auto" style="font-size: 14px"> 5:00 PM - 7:30 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_dinner != 0) {
                    $random_num = rand(0, ($noof_dinner - 1));
                    if($random_num != $last_dinner){
                        echo $content_dinner[$random_num] -> food;
                        $last_dinner = $random_num; break;
                    }
                } 
            ?>
        </h4>
    </li>

    <!----------------------------------------------------------- Friday ---------------------------------------------------->
    <li class="list-unstyled-item list-hours-item d-flex">
        <span class="text-warning">Friday</span>
        <span class="ml-auto"></span>
    </li>
    <!-- Friday Meals -->
    <li class="list-unstyled-item list-hours-item">
        <span class="d-flex">
            Breakfast <span class="ml-auto" style="font-size: 14px"> 6:00 AM - 8:00 AM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_breakfast != 0) {
                    $random_num = rand(0, ($noof_breakfast - 1));
                    if($random_num != $last_breakfast){
                        echo $content_breakfast[$random_num] -> food; 
                        $last_breakfast = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Lunch <span class="ml-auto" style="font-size: 14px"> 11:30 AM - 2:00 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_lunch != 0) {
                    $random_num = rand(0, ($noof_lunch - 1));
                    if($random_num != $last_lunch){
                        echo $content_lunch[$random_num] -> food;
                        $last_lunch = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Dinner <span class="ml-auto" style="font-size: 14px"> 5:00 PM - 7:30 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_dinner != 0) {
                    $random_num = rand(0, ($noof_dinner - 1));
                    if($random_num != $last_dinner){
                        echo $content_dinner[$random_num] -> food;
                        $last_dinner = $random_num; break;
                    }
                } 
            ?>
        </h4>
    </li>

    <!----------------------------------------------------------- Saturday ---------------------------------------------------->
    <li class="list-unstyled-item list-hours-item d-flex">
        <span class="text-warning">Saturday</span>
        <span class="ml-auto"></span>
    </li>
    <!-- Saturday Meals -->
    <li class="list-unstyled-item list-hours-item">
        <span class="d-flex">
            Breakfast <span class="ml-auto" style="font-size: 14px"> 6:00 AM - 8:00 AM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_breakfast != 0) {
                    $random_num = rand(0, ($noof_breakfast - 1));
                    if($random_num != $last_breakfast){
                        echo $content_breakfast[$random_num] -> food; 
                        $last_breakfast = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Lunch <span class="ml-auto" style="font-size: 14px"> 11:30 AM - 2:00 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_lunch != 0) {
                    $random_num = rand(0, ($noof_lunch - 1));
                    if($random_num != $last_lunch){
                        echo $content_lunch[$random_num] -> food;
                        $last_lunch = $random_num; break;
                    }
                } 
            ?>
        </h4>
        <hr>
        <span class="d-flex">
            Dinner <span class="ml-auto" style="font-size: 14px"> 5:00 PM - 7:30 PM </span>
        </span>
        <h4 class="ml-auto">
            <?php 
                while($noof_dinner != 0) {
                    $random_num = rand(0, ($noof_dinner - 1));
                    if($random_num != $last_dinner){
                        echo $content_dinner[$random_num] -> food;
                        $last_dinner = $random_num; break;
                    }
                } 
            ?>
        </h4>
    </li>
</ul>
<?php } ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="section-top text-center">
                <h2>Get a personalized diet plan</h2>
                <p>Our plan covers breakfast, lunch and dinner for a week.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="single-patient mb-4">
                <!-- <img src="<?php echo base_url('assets/images/patient1.png'); ?>" alt=""> -->
                <img src="<?php echo base_url('assets/images/hand-one.png'); ?>"
                    style="object-fit: cover; background-color: white" alt="">
                <h3>Why?</h3>
                <!-- <h5>hp specialist</h5> -->
                <ul class="unordered-list">
                    <li>
                        Make better choices when dining out.
                    </li>
                    <li>
                        Plan and cook healthy meals at home.
                    </li>
                    <li>
                        Read food labels and choose healthy foods at the grocery store.
                    </li>
                </ul>
            </div>
            <div class="single-patient">
                <!-- <img src="<?php echo base_url('assets/images/patient2.png'); ?>" alt=""> -->
                <img src="<?php echo base_url('assets/images/hand-two-2.png'); ?>" style="object-fit: cover" alt="">
                <h3>What do you get?</h3>
                <!-- <h5></h5> -->
                <ul class="unordered-list">
                    <li>
                        A Meal Plan
                    </li>
                    <ul>
                        <li>What to eat
                            <ul>
                                <li>Food</li>
                                <li>Liquids</li>
                                <li>Snacks</li>
                            </ul>
                        </li>
                    </ul>
                    <li>
                        A Shopping List
                    </li>
                </ul>
            </div>
        </div>
        <!-- If not logged in -->
        <?php if(!isset($_SESSION["account_id"]) || $_SESSION["account_id"] == ""){ ?>
        <div class="col-lg-6 offset-lg-1 align-self-center">
            <div class="appointment-form text-center mt-5 mt-lg-0">
                <h3 class="mb-5">Your Information</h3>
                <form action="<?php echo base_url('q/register'); ?>" method="post" enctype="multipart/form-data"
                    id="registerform">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input type="text" name="firstname" placeholder="First Name" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'First Name'" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" name="lastname" placeholder="Last Name" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Last Name'" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="date" name="dob" placeholder="Date of birth" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Date of birth'">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-6 form-group">
                            <select class="form-control" name="gender" required>
                                <option value="" selected hidden disabled> Select Gender </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-6 form-group">
                            <select class="form-control" name="bloodgroup" required>
                                <option value="" selected hidden disabled>Select Blood Group</option>
                                <option value="A-">A-</option>
                                <option value="A+">A+</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
                                <option value="O-">O-</option>
                                <option value="O+">O+</option>
                                <option value="AB-">AB-</option>
                                <option value="AB+">AB+</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-6 form-group">
                            <input type="number" name="weight" placeholder="Weight (Kg)" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Weight (Kg)'" required>
                        </div>
                        <div class="col-sm-6 col-6 form-group">
                            <input type="number" name="height" placeholder="Height (Ft)" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Height (Ft)'" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="dietplan" required>
                            <option value="" selected hidden disabled>Select Diet Plan</option>
                            <?php if ($mealplans){ ?>
                            <?php foreach($mealplans as $row) :?>
                            <option value="<?php echo $row -> diet_type_id; ?>"><?php echo $row -> plan; ?></option>
                            <?php endforeach; ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Your Email'" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Set Password"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Set Password'" required>
                    </div>
                    <button type="submit" class="template-btn" style="border: none;">Create plan</button>
                </form>
            </div>
        </div>
        <?php } else{ ?>
        <div class="col-lg-6 offset-lg-1 align-self-center" id="profile">
            <div class="appointment-form text-center mt-5 mt-lg-0">
                <h3 class="mb-5">Profile Information</h3>
                <form action="<?php echo base_url('q/updateprofile'); ?>" method="post" enctype="multipart/form-data"
                    id="registerform">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input type="text" name="firstname" placeholder="First Name"
                                value="<?php echo $userinfo -> first_name; ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" name="lastname" placeholder="Last Name"
                                value="<?php echo $userinfo -> last_name; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="date" name="dob" value="<?php echo $userinfo -> dob; ?>"
                            placeholder="Date of birth">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-6 form-group">
                            <select class="form-control" name="gender" id="genderSelect" required>
                                <option value="" selected hidden disabled> Select Gender </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <script>
                        var selectvalue = "<?php echo $userinfo -> gender; ?>";
                        document.getElementById("genderSelect").value = selectvalue;
                        </script>
                        <div class="col-sm-6 col-6 form-group">
                            <select class="form-control" name="bloodgroup" id="bloodgroupSelect" required>
                                <option value="" selected hidden disabled>Select Blood Group</option>
                                <option value="A-">A-</option>
                                <option value="A+">A+</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
                                <option value="O-">O-</option>
                                <option value="O+">O+</option>
                                <option value="AB-">AB-</option>
                                <option value="AB+">AB+</option>
                            </select>
                        </div>
                        <script>
                        var selectvalue = "<?php echo $userinfo -> blood_group; ?>";
                        document.getElementById("bloodgroupSelect").value = selectvalue;
                        </script>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-6 form-group">
                            <input type="number" name="weight" value="<?php echo $userinfo -> weight; ?>"
                                placeholder="Weight (Kg)" required>
                        </div>
                        <div class="col-sm-6 col-6 form-group">
                            <input type="number" name="height" value="<?php echo $userinfo -> height; ?>"
                                placeholder="Height (Ft)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="dietplan" id="dietplanSelect" required>
                            <option value="" selected hidden disabled>Select Diet Plan</option>
                            <?php if ($mealplans){ ?>
                            <?php foreach($mealplans as $row) :?>
                            <option value="<?php echo $row -> diet_type_id; ?>"><?php echo $row -> plan; ?></option>
                            <?php endforeach; ?>
                            <?php } ?>
                        </select>
                    </div>
                    <script>
                    var selectvalue = "<?php echo $userinfo -> choosen_plan; ?>";
                    document.getElementById("dietplanSelect").value = selectvalue;
                    </script>
                    <div class="form-group">
                        <input type="email" name="email" value="<?php echo $userinfo -> email; ?>"
                            placeholder="Your Email" required>
                    </div>
                    <button type="submit" class="template-btn" style="border: none;">Update Profile</button>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
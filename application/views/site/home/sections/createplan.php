<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="section-top text-center">
                <h2>Get a personalized diet plan</h2>
                <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word
                    link available in the service for subdue fruit.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="single-patient mb-4">
                <img src="<?php echo base_url('assets/images/patient1.png'); ?>" alt="">
                <h3>daren jhonson</h3>
                <h5>hp specialist</h5>
                <p class="pt-3">Elementum libero hac leo integer. Risus hac road parturient feugiat. Litora cursus
                    hendrerit bib elit Tempus inceptos posuere metus.</p>
            </div>
            <div class="single-patient">
                <img src="<?php echo base_url('assets/images/patient2.png'); ?>" alt="">
                <h3>black heiden</h3>
                <h5>hp specialist</h5>
                <p class="pt-3">Elementum libero hac leo integer. Risus hac road parturient feugiat. Litora cursus
                    hendrerit bib elit Tempus inceptos posuere metus.</p>
            </div>
        </div>
        <div class="col-lg-6 offset-lg-1 align-self-center">
            <div class="appointment-form text-center mt-5 mt-lg-0">
                <h3 class="mb-5">Your Information</h3>
                <form action="<?php echo base_url('q/register'); ?>" method="post" enctype="multipart/form-data"
                    id="registerform">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input type="text" placeholder="First Name" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'First Name'" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" placeholder="Last Name" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Last Name'" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" id="datepicker" placeholder="Date of birth" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Date of birth'">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <select class="form-control" required>
                                <option value="" selected hidden disabled> Select Gender </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <select class="form-control" required>
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
                        <div class="col-sm-6 form-group">
                            <input type="number" placeholder="Weight (Kg)" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Weight (Kg)'" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="number" placeholder="Height (Ft)" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Height (Ft)'" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your Email" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Your Email'" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Set Password" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Set Password'" required>
                    </div>
                    <!-- <div class="form-group">
                        <textarea name="message" cols="20" rows="7" placeholder="Message"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                    </div> -->
                    <button type="submit" class="template-btn" style="border: none;">Create plan</button>
                </form>
            </div>
        </div>
    </div>
</div>
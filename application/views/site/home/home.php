<!-- Banner Area Starts -->
<section class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3 style="color: green; font-weight: bold; text-transform: none">Caring for better life</h3>
                <h1>Leading the way in diet education</h1>
                <p style="color: green; font-weight: bold; text-transform: none">Earth greater grass for good. Place for
                    divide evening yielding them that. Creeping beginning over
                    gathered brought.</p>
                <a href="#createplan" class="template-btn mt-3">create diet plan</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Feature Area Starts -->
<section class="feature-area section-padding">
    <?php $this->load->view('site/home/sections/features');?>
</section>
<!-- Feature Area End -->

<!-- Welcome Area Starts -->
<section class="welcome-area section-padding3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="welcome-img">
                    <img src="<?php echo base_url('assets/images/welcome.png'); ?>" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="welcome-text mt-5 mt-lg-0">
                    <h2>Welcome to Diet Consult</h2>
                    <p class="pt-3">
                        This is a web-based application which allows you to track eating and daily activity habits to
                        help you be in the best form of health. Like a dietician, we act
                        in a similar way to that of a diet consultant, by giving you options and general education on
                        diet types.
                    </p>
                    <p>
                        Why? Having good health is crucial to human happiness and well-being, and it contributes to
                        prosperity and wealth, as well as economic progress, since healthier people are more productive,
                        save more, and live longer.
                    </p>
                    <a href="#" class="template-btn mt-3">learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- Diet Plans Section -->
<section class="dietplans-area section-padding4">
    <?php $this->load->view('site/home/sections/dietplans');?>
</section>
<!-- Diet Plans End -->

<!-- Create Account Area Starts -->
<section class="patient-area section-padding" id="createplan">
    <?php $this->load->view('site/home/sections/createplan');?>
</section>
<!-- Create Account Area End -->

<!-- Specialist Area Starts -->
<section class="specialist-area section-padding">
    <?php $this->load->view('site/home/sections/specialists');?>
</section>
<!-- Specialist Area End -->
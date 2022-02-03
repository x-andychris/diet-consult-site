<div class="container" id="mealplans">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="section-top text-center">
                <h2>Diet Plans</h2>
                <p>
                    We believe that whole, natural foods are key to a healthy and balanced diet, and our meal plans
                    follow these principles.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="dietplans-slider owl-carousel">
                <?php if ($mealplans){ ?>
                <?php foreach($mealplans as $row) :?>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="<?php echo base_url('assets/images/mealplans/' . $row -> image); ?>"
                            style="width: 367px; height: 246px" alt="" class="img-fluid">
                        <div class="hover-state">
                            <a href="<?php echo base_url('mealplans/info/' . $row -> diet_type_id); ?>"><i
                                    class="fa fa-stethoscope"></i>
                            </a>
                        </div>
                    </div>
                    <div class="single-dietplan item-padding text-center">
                        <h3><?php echo $row -> plan; ?></h3>
                        <p>Hath creeping subdue he fish gred face whose spirit that seasons today multiply female
                            midst upon</p>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
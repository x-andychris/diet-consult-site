<!-- Modal -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  patient-area" role="document">
        <div class="modal-content appointment-form" style="background-color: #f9f9fd; border: none">
            <div class="modal-header">
                <h4 class="modal-title" style=" color: #fff; font-weight: bold">
                    Login
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="overflow: auto; max-height: 70vh">
                <div class=" text-center mt-5 mt-lg-0">
                    <!-- <h3 class="mb-5">Your Information</h3> -->
                    <form action="<?php echo base_url('q/login'); ?>" method="post" enctype="multipart/form-data"
                        id="loginform">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Your Email'" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Your Password"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Password'" required>
                        </div>
                        <button type="submit" class="template-btn" style="border: none;">Login</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer"> </div>
        </div>
    </div>
</div>
<!-- <div class="toast" id="siteSuccessToast" data-autohide="true">
    <div class="toast-header">
        <strong class="mr-auto text-success">Diet Consult</strong>
        <small class="text-muted">0s ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body" id="successToastMessage">
    </div>
</div>
<div class="toast hide" role="alert" id="siteErrorToast" data-autohide="true">
    <div class="toast-header">
        <strong class="mr-auto text-danger">Diet Consult</strong>
        <small class="text-muted">0s ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body" id="errorToastMessage">
    </div>
</div>
<div class="toast" id="siteAltToast">
    <div class="toast-header">
        <strong class="mr-auto text-warning">Diet Consult</strong>
        <small class="text-muted">0s ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body" id="altToastMessage">
    </div>
</div> -->

<!-- Validating session requirements -->
<script>
$(document).ready(function() {
    if ("<?php echo $this->session->flashdata("success"); ?>") {
        alert("<?php echo $this->session->flashdata("success"); ?>");
    }

    if ("<?php echo $this->session->flashdata("error"); ?>") {
        alert("<?php echo $this->session->flashdata("error"); ?>");
    }

    if ("<?php echo $this->session->flashdata("alt"); ?>") {
        alert("<?php echo $this->session->flashdata("alt"); ?>");
    }
});
</script>
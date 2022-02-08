<!-- Modal -->
<div class="modal fade" id="snacksModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" style="background-color: #f9f9fd; border: none">
            <div class="modal-header" style="background: linear-gradient(to right, #244cfd, #15e4fd);">
                <h4 class="modal-title" style=" color: #fff; font-weight: bold">
                    <?php echo $page_title; ?> - (<span style="font-size: 14px; color: #fff">Snacks</span>)
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="overflow: auto; max-height: 70vh">
                <!-- <div class="header">Users</div> -->
                <div class="form-group">
                    <div class="input-group-icon ">
                        <div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                        <input type="text" class="single-input form-control" placeholder="Search"
                            style="background-color: white" id="snacksTableSearchBox">
                    </div>
                </div>
                <table cellspacing="0" id="snacksTable">
                    <tr style="background: linear-gradient(to right, #244cfd, #15e4fd);">
                        <th>Snack</th>
                        <th>Info</th>
                        <th>Hour</th>
                        <th>Moderation</th>
                    </tr>

                    <?php if ($mealplan_snacks){ ?>
                    <?php foreach($mealplan_snacks as $row) :?>
                    <tr class="filter">
                        <td><?php echo $row -> snack; ?></td>
                        <td><?php if ($row -> info) {echo $row -> info;} else{echo "N/A";} ?></td>
                        <td><?php echo $row -> hour_preferred; ?></td>
                        <td><?php echo $row -> moderation; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php } ?>
                </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<!-- Jquery Filter -->
<script>
$(document).ready(function() {
    $("#snacksTableSearchBox").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#snacksTable .filter").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
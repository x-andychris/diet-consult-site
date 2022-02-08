<!-- Modal -->
<div class="modal fade" id="mealsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" style="background-color: #f9f9fd; border: none">
            <div class="modal-header" style="background: linear-gradient(to right, #244cfd, #15e4fd);">
                <h4 class="modal-title" style=" color: #fff; font-weight: bold">
                    <?php echo $page_title; ?> - (<span style="font-size: 14px; color: #fff">Meals</span>)
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
                            style="background-color: white" id="mealsTableSearchBox">
                    </div>
                </div>
                <table cellspacing="0" id="mealsTable">
                    <tr style="background: linear-gradient(to right, #244cfd, #15e4fd);">
                        <!-- <th>Picture</th> -->
                        <!-- <th>S/N</th> -->
                        <th>Meal</th>
                        <!-- <th width="230">Info</th> -->
                        <th>Info</th>
                        <th>Hour</th>
                        <th>Moderation</th>
                    </tr>

                    <?php if ($mealplan_foods){ ?>
                    <?php $count = 1; ?>
                    <?php foreach($mealplan_foods as $row) :?>
                    <tr class="filter">
                        <!-- <td><img src="https://i.picsum.photos/id/1005/100/100.jpg" alt="" /></td> -->
                        <!-- <td><?php echo $count ?></td> -->
                        <td><?php echo $row -> food; ?></td>
                        <td><?php if ($row -> info) {echo $row -> info;} else{echo "N/A";} ?></td>
                        <td><?php echo $row -> hour_preferred; ?></td>
                        <td><?php echo $row -> moderation; ?></td>
                    </tr>
                    <?php $count++; ?>
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
    $("#mealsTableSearchBox").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#mealsTable .filter").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
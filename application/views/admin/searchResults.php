<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Search Results...</h2><hr>
            <table class="table table-condensed table-striped">
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Total Jobs</th>
                    <th>Category</th>
                    <th>Department</th>
                    <th>City</th>
                    <th>News Paper</th>
                    <th>Announcement Date</th>
                    <th>Last Date</th>
                    <th>Image</th>
                </thead>
                <?php foreach($results as $result) :  ?>
                <tr>
                    <td><?php echo $result->ad_title; ?></td>
                    <td><?php echo $result->description; ?></td>
                    <td><?php echo $result->total_jobs ?></td>
                    <td><?php echo $result->catName ?></td>
                    <td><?php echo $result->depttName; ?></td>
                    <td><?php echo $result->cityName; ?></td>
                    <td><?php echo $result->PaperName; ?></td>
                    <td><?php echo $result->ad_announced_date; ?></td>
                    <td><?php echo $result->ad_last_date; ?></td>
                    <td><img class="img-rounded img-responsive smallPlus" src="<?php echo $result->ad_image;?>"></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


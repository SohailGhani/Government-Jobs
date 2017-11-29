<div class="container">
    <div class="row">


        <h1>Job Details...</h1><hr>
        <div class="col-md-6">

            <div class="row">



                <table class="table table-condensed table-striped">
                    <tr>
                        <td colspan="2" align="center"><h3><b><?php echo $job['ad_title'];?><b></h3></td>

                    </tr>
                    <tr>
                        <th><?php echo 'category :' ?></th>
                        <td><?php echo $job['catName'] ?></td>

                    </tr>
                    <tr>
                        <th><?php echo 'Department Name :' ?></th>
                        <td><?php echo $job['depttName']; ?></td>

                    </tr>
                    <tr>
                        <th><?php echo 'City :'; ?></th>
                        <td><?php echo $job['cityName']; ?></td>

                    </tr>
                    <tr>
                        <th><?php echo 'News Paper :'; ?></th>
                        <td><?php echo $job['PaperName']; ?></td>

                    </tr>
                    <tr>
                        <th><?php echo 'Total Posts :'; ?></th>
                        <td><?php echo $job['total_jobs']; ?></td>

                    </tr>
                    <tr>
                        <th><?php echo 'Annoucement Date :'; ?></th>
                        <td><?php echo $job['ad_announced_date']; ?></td>

                    </tr>
                    <tr>
                        <th><?php echo 'Last Date :'; ?></th>
                        <td><?php echo $job['ad_last_date']; ?></td>

                    </tr>
                    <tr>
                        <td colspan="2" align="center"><?php echo $job['description']; ?></td>

                    </tr>
                </table>




            </div>

        </div>




        <div class="col-lg-6">
            <h3>Advertisement</h3>
            <img  src="<?php echo  $job['ad_image']?>" class="img-responsive img-rounded smallForDetailView">
        </div>


    </div>
</div>
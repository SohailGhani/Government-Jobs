<div class="container">

    <div class="row clrmegreenfont ">
            <div class="col-md-6">
                <h1>Job Description &hellip;</h1><hr>

                <div class="row">



                    <table class="table table-condensed table-striped clrmegreenfont">
                        <tr>
                            <td colspan="3" align="center"><h3><span class="fa fa-bullhorn"></span> <b><?php echo  $read['ad_title'];?><b></h3></td>

                        </tr>
                        <tr>
                            <td><span class="fa fa-users"></span> </td>
                            <th><?php echo 'category :' ?></th>
                            <td>  <?php echo $read['catName'] ?></td>

                        </tr>
                        <tr>
                            <td><span class="fa fa-institution"></span></td>
                            <th><?php echo 'Department Name :' ?></th>
                            <td> <?php echo $read['depttName']; ?></td>

                        </tr>
                        <tr>
                            <td><span class="fa fa-map-marker"></span></td>
                            <th><?php echo 'City :'; ?></th>
                            <td> <?php echo $read['cityName']; ?></td>

                        </tr>
                        <tr>
                            <td><span class="fa fa-newspaper-o"></span></td>
                            <th><?php echo 'News Paper :'; ?></th>
                            <td> <?php echo $read['PaperName']; ?></td>

                        </tr>
                        <tr>
                            <td><span class="fa fa-user-plus"></span></td>
                            <th><?php echo 'Total Posts :'; ?></th>
                            <td> <?php echo $read['total_jobs']; ?></td>

                        </tr>
                        <tr>
                            <td><span class="fa fa-calendar-plus-o"></span></td>
                            <th><?php echo 'Annoucement Date :'; ?></th>
                            <td> <?php echo $read['ad_announced_date']; ?></td>

                        </tr>
                        <tr>
                            <td><span class="fa fa-calendar-times-o"></span></td>
                            <th><?php echo 'Last Date :'; ?></th>
                            <td> <?php echo $read['ad_last_date']; ?></td>

                        </tr>
                        <tr>
                            <td colspan="3" align="center"><span class="fa fa-folder-open"></span> <?php echo $read['description']; ?></td>

                        </tr>
                    </table>




                </div>

            </div>




            <div class="col-lg-6">
                <h3>Advertisement</h3>
                <a  href="<?php echo base_url("home/imgShow"); ?>/<?php echo $read['id'] ?>">
                <img  src="<?php echo  $read['ad_image']?>" class="img-responsive img-rounded smallForDetailView">
                </a>
            </div>



    </div>


</div>
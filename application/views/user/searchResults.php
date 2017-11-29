

<div class="container">

    <h2 class="clrmegreenfont">Search Results...</h2><hr>


    <div class="col-lg-2"></div>


    <div class="col-lg-7">



        <?php if(isset($result)) : foreach($result as $job) : ?>

            <div class=" clrmewhite ">


                <div class="col-lg-12 clrmegreen">


                    <h2><?php echo $job->ad_title; ?></h2>
                    <table class="clrmewhite">
                        <tr><td>&nbsp;</td></tr>
                        <tr>

                            <td><span class="fa fa-institution"></span></td>
                            <td>&nbsp; </td>
                            <td>Department : </td>
                            <td><?php echo $job->depttName; ?></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>

                            <td><span class="fa fa-calendar-times-o"></span></td>
                            <td>&nbsp; </td>
                            <td>Application Deadline : </td>
                            <td><?php echo $job->ad_last_date; ?></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><span class="fa fa-user-plus"></span></td>
                            <td>. </td>
                            <td>Total No. of Jobs : </td>
                            <td><?php echo $job->total_jobs; ?></td>
                        </tr>
                    </table><br>

                    <table  align="center" valign="center">
                        <tr><td>
                                <a  href="<?php echo base_url("home/imgShow/$job->id"); ?>">

                                    <img class="img-responsive img-rounded smallForUserView" src="<?php echo $job->ad_image; ?>"><br>
                                </a>
                            </td></tr>
                    </table>




                    <a href="<?php echo base_url("home/readMore/$job->id"); ?>" class="btn btn-default">Read more </a>

                    <br><br>

                </div>

                <!--//for spacing between each post-->

                <?php for ($i=1;$i<50;$i++): ?>
                    <div class="row">
                        <div class="col-lg-1"> </div>
                    </div>
                <?php endfor; ?>


            </div>

        <?php endforeach; ?>
        <?php endif; ?>


        <?php if (empty($result)):?>
           <h2 class="clrmegreenfont">No Jobs Found!!!</h2><hr>
        <?php endif;?>

    </div>



    <!--///////////////////////////////////////////////////End posts//////////////////////////////////////////////////////////-->


    <!--<div class="col-lg-1"></div>-->

    <div class="col-lg-2 ">      <img src="<?php echo base_url("assets/img/gallery/ad.jpg");?>" >        </div>
 </div>


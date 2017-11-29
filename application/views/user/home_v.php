



    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 200px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            
              <?php $i=0;foreach ($sliders as $slider):?>
            <li data-target="#myCarousel" data-slide-to="<?=$i?>" <?php if($i==0) echo 'class="active"' ?>></li>
            <?php $i++;endforeach;?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

                <?php foreach ($sliders as $slider) :
                $sliderActive = $slider->id;
                endforeach;
                ?>

                <?php foreach ($sliders as $slider):?>
                <div class="item <?php if ($slider->id==$sliderActive)
                {
                   echo 'active';
                }?>">
                <img src="<?php echo $slider->sliderImage; ?>" class="img-responsive" alt="<?php echo $slider->sliderTitle; ?>">
                <div class="carousel-caption">
                    <h3><?php echo $slider->sliderTitle; ?></h3>
                    <p><?php echo $slider->sliderDescroption; ?></p>

                </div>
            </div>
                <?php endforeach;?>
        </div>







        <!-- Left and right controls -->
        <div class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="downme fa fa-arrow-left"></span>
            <span class="sr-only">Previous</span>
        </div>
        <div class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="downme fa fa-arrow-right"></span>
            <span class="sr-only">Next</span>
        </div>
    </div>

    <!--/////////////////////////////////////////navBarEnd////////////////////////////////////////////////////////////////////////////////////-->


    <br>
    <div class="container">
        <div class="row padme widthme">




                <div class="">
                    <div class="row">


                            <form action="<?php echo base_url('home/searchJobs'); ?>" method="post" class="form-inline">
                             <input class="flipkart-navbar-input  col-xs-10 search-form " type="" placeholder="Search your job here..." name="query">

                                <button  class="flipkart-navbar-button col-xs-1  ">
                                    <div width="0px" height="5px">
                                       <span class="fa fa-search"></span>
                                    </div>
                                    </button>
                            </form>

                    </div>
                </div>


        </div>
    </div>
    <br>







    <!--/////////////////////////////////////////SearchBOxEnd////////////////////////////////////////////////////////////////////////////////////-->

    <div class="col-lg-2 ">

        <div class="container">
            <div class="row ">
                <div class="col-lg-3 ">
                    <ul class="nav nav-pills nav-stacked clrmegreenuser  ">
                        <li class="active"><a href="<?php echo base_url('home'); ?>"><i class="fa fa-home fa-fw"></i>Home</a></li>


                        <li><a><label href="#" data-toggle="collapse" data-target="#demo" class="collapsed" aria-expanded="false"><i class="fa fa-users fa-fw"></i>&nbsp; Categories</label></li>
                        <div id="demo" class="facollapse collapse" style="height: 10px;" aria-expanded="false">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <ul>
                                <?php foreach($cat as $cate) : ?>
                                    <li><a href="<?php echo base_url("home/categories/$cate->catId") ; ?>"><?php echo $cate->catName;?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!--<li><a href="#"><i class="has-sub fa fa-users fa-fw"></i>Categories &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="fa fa-sort-down"></span></a>
                            <ul>
                                <li><a href="#">Sprint</a></li>
                                <li><a href="#">Fitness-touring</a></li>
                                <li><a href="#">High Performance</a></li>
                                <li><a href="#">Surf Skis</a></li>
                            </ul>
                        </li>-->
                        <li><a><label href="#" data-toggle="collapse" data-target="#demoDeptt" class="collapsed" aria-expanded="false"><i class="fa fa-institution fa-fw"></i>&nbsp; Department</label></li>
                        <div id="demoDeptt" class="facollapse collapse" style="height: 0px;" aria-expanded="false">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <ul>
                                <?php foreach($dep as $d) : ?>
                                    <li><a href="<?php echo base_url("home/departments/$d->depttId"); ?>"><?php echo $d->depttName;?></a></li>
                                <?php endforeach; ?>
                        </div>

                        <li><a><label href="#" data-toggle="collapse" data-target="#demoCity" class="collapsed" aria-expanded="false"><i class="fa fa-map-marker fa-fw"></i>&nbsp; Cities</label></li>
                        <div id="demoCity" class="facollapse collapse" style="height: 0px;" aria-expanded="false">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <ul>
                                <?php foreach($city as $c) : ?>
                                    <li><a href="<?php echo base_url("home/cities/$c->cityId"); ?>"><?php echo $c->cityName;?></a></li>
                                <?php endforeach; ?>
                        </div>

                        <li><a><label href="#" data-toggle="collapse" data-target="#demoPaper" class="collapsed" aria-expanded="false"><i class="fa fa-newspaper-o fa-fw"></i>&nbsp; News Papers</label></li>
                        <div id="demoPaper"  style="height: 0px;" aria-expanded="false">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <ul>
                                <?php foreach($nPaper as $p) : ?>
                                    <li><a href="<?php echo base_url("home/papers/$p->paperId"); ?>"><?php echo $p->PaperName;?></a></li>
                                <?php endforeach; ?>
                        </div>
                    </ul>
                </div>

            </div>

        </div>

    </div>







    <!--///////////////////////////////////////////////////////Col1End/////////////////////////////////////////////////////////////////-->

     <div class="col-lg-1"></div>


    <div class="col-lg-6">

            <?php if($success = $this->session->flashdata('success')) : ?>


                <div class="placeMeNotice col-lg-12 alert alert-dismissable">
                    <?php echo $success; ?>
                </div>

            <?php endif;?>



            <?php if(isset($jobs)) : foreach($jobs as $job) : ?>

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

     </div>



    <!--///////////////////////////////////////////////////End posts//////////////////////////////////////////////////////////-->


    <div class="col-lg-1"></div>

    <div class="col-lg-2 ">      <img src="<?php echo base_url("assets/img/gallery/ad.jpg");?>" >        </div>







    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>








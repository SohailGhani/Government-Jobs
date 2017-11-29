<style>
    span{
        color: red;
    }
</style>
<div class="page-heading"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 pull-right">
            <h2>Update Jobs Here...</h2>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-md-7">
            <?php if($error = $this->session->flashdata('updated')) : ?>
            <div class="alert alert-success">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            <form action="<?php echo base_url("admin_c/update/$id"); ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="name">Ad Name:</label>
                    <input type="text" name="adName" class="form-control" value="<?php echo $job['ad_title']; ?>">
                    <?php echo form_error('adName','<div class="text-danger">','</div>') ?>
                </div>

                <div class="form-group">
                    <label for="name">Description:</label>
                    <textarea name="description" class="form-control"><?php echo $job['description']; ?></textarea>
                    <span><?php echo form_error('description'); ?></span>
                </div>


                <div class="form-group">
                    <label for="name">Total Jobs:</label>
                    <input type="text" name="total" class="form-control" value="<?php echo $job['total_jobs']; ?>">
                    <span><?php echo form_error('total'); ?></span>
                </div>



                <div class="form-group">
                    <label for="select" control-label">Select Category:</label>

                    <select name="catSelect"  class="form-control">
                        <?php if(isset($cat)) : foreach($cat as $ca) : ?>
                            <?php if ($ca->catId==$job['catId']): ?>
                                <option  selected value="<?php echo $ca->catId?>"><?php echo $ca->catName;?></option>
                            <?php endif;?>
                            <option value="<?php echo $ca->catId?>"><?php echo $ca->catName?></option>

                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <?php echo form_error('catSelect','<div class="text-danger">','</div>') ?>
                    </label>
                </div>


                <div class="form-group">
                <label for="name">Select Department:</label>
                <select name="adDeptt"  class="form-control">
                    <?php if(isset($deptt)) : foreach($deptt as $dept) : ?>
                        <?php if ($dept->depttId==$job['depttId']): ?>
                            <option  selected value="<?php echo $dept->depttId?>"><?php echo $dept->depttName;?></option>
                        <?php endif;?>
                        <option  value="<?php echo $dept->depttId?>"><?php echo $dept->depttName;?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </select>
                <?php echo form_error('citySelect','<div class="text-danger">','</div>') ?>
                </label>
                </div>

                <div class="form-group">
                    <label for="name">Select City:</label>
                    <select name="citySelect"  class="form-control">
                        <?php if(isset($city)) : foreach($city as $cit) : ?>
                            <?php if ($cit->cityId==$job['cityId']): ?>
                                <option  selected value="<?php echo $cit->cityId?>"><?php echo $cit->cityName;?></option>
                            <?php endif;?>
                            <option value="<?php echo $cit->cityId?>"><?php echo $cit->cityName?></option>

                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <?php echo form_error('citySelect','<div class="text-danger">','</div>') ?>
                </div>


                <div class="form-group">
                    <label for="select" control-label">Select News Paper:</label>

                    <select name="paperSelect"  class="form-control">
                        <?php if(isset($pName)) : foreach($pName as $pNam) : ?>
                            <?php if ($pNam->paperId==$job['paperId']): ?>
                                <option  selected value="<?php echo $pNam->paperId?>"><?php echo $pNam->PaperName;?></option>
                            <?php endif;?>
                            <option value="<?php echo $pNam->paperId?>"><?php echo $pNam->PaperName?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <?php echo form_error('paperSelect','<div class="text-danger">','</div>') ?>
                    </label>
                </div>


                <div class="form-group">
                    <label for="name">Announcement Date:</label>
                    <input type="date" name="announcedDate" class="form-control" value="<?php echo $job['ad_announced_date']; ?>">
                    <?php echo form_error('announcedDate','<div class="text-danger">','</div>') ?>
                </div>
                <div class="form-group">
                    <label for="name">Last Date:</label>
                    <input type="date" name="lastDate" class="form-control" value="<?php echo $job['ad_last_date']; ?>">
                    <?php echo form_error('lastDate','<div class="text-danger">','</div>') ?>
                </div>



                <div class="form-group">
                    <h4 class="abc">Ad Image</h4>

                    <input type="file" name="userfile" size="20"  class="btn btn-primary" />
                    <?php echo form_error('userfile','<div class="text-danger">','</div>'); ?>

                    <br /><br />
                </div>
                <label>
                    <?php echo form_submit(['name'=>'submit','value'=>'UPDATE' ,'class'=>'btn btn-success']);?>
                </label>
                </div>
           <?php echo form_close(); ?>
        </div>
    </div>
</div>




<style xmlns="http://www.w3.org/1999/html">
    span{
        color: red;
    }
</style>
<div class="page-heading"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 pull-right"><br><br><br><br>
            <h2>Add Jobs Here...</h2>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-md-7">
            <?php if($error = $this->session->flashdata('failed')) : ?>
            <div class="alert alert-danger">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            <?php echo form_open_multipart('admin_c/add_job',['class'=>'form-horizontal']) ?>
                <div class="form-group">
                    <label for="name">Ad Name:</label>
                    <input type="text" name="adName" class="form-control" value="<?php echo set_value('adName'); ?>">
                    <span><?php echo form_error('adName'); ?></span>
                </div>

                <div class="form-group">
                    <label for="name">Description:</label>
                    <textarea name="description" class="form-control"><?php echo set_value('description'); ?></textarea>
                    <span><?php echo form_error('description'); ?></span>
                </div>

                <div class="form-group">
                    <label for="name">Total Jobs:</label>
                    <input type="text" name="total" class="form-control" value="<?php echo set_value('total'); ?>">
                    <span><?php echo form_error('total'); ?></span>
                </div>


                <div class="form-group">
                    <label for="select" control-label">Select Category</label>

                    <select name="catSelect"  class="form-control">
                        <?php if(isset($cat)) : foreach($cat as $ca) : ?>
                            <option <?php if(set_value('catSelect')==$ca->catId) echo 'selected="selected"'; ?>  value="<?php echo $ca->catId?>"><?php echo $ca->catName?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <?php echo form_error('catSelect','<div class="text-danger">','</div>') ?>
                    </label>
                </div>


                <div class="form-group">
                    <label for="select" control-label">Select Department</label>

                    <select name="depttSelect"  class="form-control">
                        <?php if(isset($deptt)) : foreach($deptt as $dept) : ?>
                            <option <?php if(set_value('depttSelect')==$dept->depttId) echo 'selected="selected"'; ?> value="<?php echo $dept->depttId?>"><?php echo $dept->depttName?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <?php echo form_error('depttSelect','<div class="text-danger">','</div>') ?>
                    </label>
                </div>



                <div class="form-group">
                    <label for="select" control-label">Select City</label>

                    <select name="citySelect"  class="form-control">
                        <?php if(isset($city)) : foreach($city as $cit) : ?>
                            <option <?php if(set_value('citySelect')==$cit->cityId) echo 'selected="selected"'; ?> value="<?php echo $cit->cityId?>"><?php echo $cit->cityName?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <?php echo form_error('citySelect','<div class="text-danger">','</div>') ?>
                    </label>
                </div>


                <div class="form-group">
                    <label for="select" control-label">Select News Paper</label>

                    <select name="paperSelect"  class="form-control">
                        <?php if(isset($pName)) : foreach($pName as $pNam) : ?>
                            <option <?php if(set_value('paperSelect')==$pNam->paperId) echo 'selected="selected"'; ?> value="<?php echo $pNam->paperId?>" ><?php echo $pNam->PaperName?></option>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <?php echo form_error('paperSelect','<div class="text-danger">','</div>') ?>
                    </label>
                </div>


                <div class="form-group">
                    <label for="name">Annoucement Date:</label>
                    <input type="date" name="annoucementDate" class="form-control" value="<?php echo set_value('annoucementDate'); ?>">
                    <span><?php echo form_error('annoucementDate'); ?></span>
                </div>
                <div class="form-group">
                    <label for="name">Last Date:</label>
                    <input type="date" name="lastDate" class="form-control" value="<?php echo set_value('lastDate'); ?>">
                    <span><?php echo form_error('lastDate'); ?></span>
                </div>








              <div class="form-group">
                <h4 class="abc">Ad Image</h4>

                    <input type="file" name="userfile" size="20"  class="btn btn-primary" />
                    <?php echo form_error('userfile','<div class="text-danger">','</div>'); ?>

                    <br /><br />
              </div>
                <label>
                    <?php echo form_submit(['name'=>'submit','value'=>'PUBLISH POST' ,'class'=>'btn btn-success']);?>
                </label>
            <div class="col-md-2">
                <?php echo form_close(); ?>
        </div>
    </div>
</div>


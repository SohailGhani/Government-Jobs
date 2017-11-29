<style xmlns="http://www.w3.org/1999/html">
    span{
        color: red;
    }
</style>
<div class="page-heading"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 pull-right"><br><br><br><br><br>
            <h2>Add Slider Here...</h2>
        </div>
    </div><hr>
    <div class="row">


        <div class="col-md-7">
            <?php if($error = $this->session->flashdata('failed')) : ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <?php echo form_open_multipart('admin_c/addSlider',['class'=>'form-horizontal']) ?>
            <div class="form-group">
                <label for="name">Slider Title:</label>
                <input type="text" name="sliderTitle" class="form-control" value="<?php echo set_value('sliderTitle'); ?>">
                <span><?php echo form_error('sliderTitle'); ?></span>
            </div>

            <div class="form-group">
                <label for="name">Description:</label>
                <textarea name="sliderDescription" class="form-control"><?php echo set_value('sliderDescription'); ?></textarea>
                <span><?php echo form_error('sliderDescription'); ?></span>
            </div>



            <div class="form-group">
                <h4 class="abc">Slider Image</h4>

                <input type="file" name="userfile" size="20"  class="btn btn-primary" />
                <?php echo form_error('userfile','<div class="text-danger">','</div>'); ?>

                <br /><br />
            </div>
            <label>
                <?php echo form_submit(['name'=>'submit','value'=>'PUBLISH SLIDER' ,'class'=>'btn btn-success']);?>
            </label>
            <div class="col-md-2">
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>


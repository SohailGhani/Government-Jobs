<style>
    span{
        color: red;
    }
</style>
<div class="page-heading"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 pull-right">
            <h2>Update Slider Here...</h2>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-md-7">
            <?php if($error = $this->session->flashdata('updated')) : ?>
                <div class="alert alert-success">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url("admin_c/updateSliderwith/$id"); ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="name">Title:</label>
                    <input type="text" name="sliderT" class="form-control" value="<?php echo $sliders['sliderTitle']; ?>">
                    <?php echo form_error('sliderT','<div class="text-danger">','</div>') ?>
                </div>



                <div class="form-group">
                    <label for="name">Description:</label>
                    <textarea name="sliderD" class="form-control"><?php echo $sliders['sliderDescroption']; ?></textarea>
                    <span><?php echo form_error('sliderD'); ?></span>
                </div>



                <div class="form-group">
                    <h4 class="abc">Slider Image</h4>

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




<div class="container">
    <div class="page-header"></div>
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="<?php echo base_url('admin_c/addSliders'); ?>" class="btn btn-primary btn-lg"><span class="fa fa-plus"></span> Add a Slider</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <?php if($success = $this->session->flashdata('success')) : ?>
                <div class="alert alert-success">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>
            <?php if($failed = $this->session->flashdata('failed')) : ?>
                <div class="alert alert-danger">
                    <?php echo $failed; ?>
                </div>
            <?php endif; ?>
            <table class="table table-condensed table-striped">
                <thead>
                <th>Title</th>
                <th>Descrciption</th>
                <th>Image</th>
                <th>Action</th>
                </thead>
                <tbody>
                <?php if(isset($sliders)) : foreach($sliders as $slider) : ?>
                    <tr>
                        <td><?php echo $slider->sliderTitle; ?></td>
                        <td><?php echo $slider->sliderDescroption; ?></td>
                        <td><img class="img-rounded img-responsive small" src="<?php echo $slider->sliderImage;?>"></td>
                        <td>
                            <a href="<?php echo base_url() . "admin_c/updateSlider/" . $slider->id; ?>" class="btn btn-info"><span class="fa fa-pencil"></span>  EDIT
                            </a>
                            <a href="<?php echo base_url() . "admin_c/deleteSlider/" . $slider->id; ?>" class="btn btn-danger" onclick="javascript: return confirm('Are you sure to delete?');"><span class="fa fa-trash"></span> DELET
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


    <div class="container">
        <div class="page-header"></div>
        <div class="row">
            <div class="col-md-10 text-left">
                <a href="<?php echo base_url('admin_c/sliderread'); ?>" class="btn btn-primary btn-lg"><span class="fa fa-plus"></span> Sliders</a>
            </div>
            <div class="col-md-2 text-right">
                <a href="<?php echo base_url('admin_c/addData'); ?>" class="btn btn-primary btn-lg"><span class="fa fa-plus"></span> Add a Job</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 text-right">
                <form action="<?php echo base_url('admin_c/userSearch'); ?>" method="post" class="form-inline">
                    <input type="text" name="query" class="form-control" placeholder="Search this page...">
    <!--           <input type="submit" class="btn btn-default" value="Search">-->
                    <button type="submit" class="btn btn-default"><span class="fa fa-search"></span> Search</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php if($success = $this->session->flashdata('success')) : ?>
                <div class="alert alert-success">
                    <?php echo $success; ?>
                </div>
                <?php endif; ?>
                <table class="table table-condensed table-striped">
                    <thead>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Last Date</th>
                        <th>Total Jobs</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php if(isset($jobs)) : foreach($jobs as $job) : ?>
                        <tr>
                            <td><?php echo $job->ad_title; ?></td>
                            <td><?php echo $job->depttName; ?></td>
                            <td><?php echo $job->ad_last_date; ?></td>
                            <td><?php echo $job->total_jobs; ?></td>
                            <td><img class="img-rounded img-responsive small" src="<?php echo $job->ad_image?>"></td>
                            <td>
                                <a href="<?php echo base_url() . "admin_c/updateJob/" . $job->id; ?>" class="btn btn-info"><span class="fa fa-pencil"></span>  EDIT
                                </a>
                                <a href="<?php echo base_url() . "admin_c/deleteJob/" . $job->id; ?>" class="btn btn-danger" onclick="javascript: return confirm('Are you sure to delete?');"><span class="fa fa-trash"></span> DELET
                                </a>
                                <a href="<?php echo base_url() . "admin_c/viewJob/" . $job->id; ?>" class="btn btn-default"><span class="fa fa-list-alt"></span> View Details
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


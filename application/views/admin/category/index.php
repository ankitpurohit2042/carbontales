<div class="col-md-12">
    <div class="row">
    <div class="container-fluid">
            <div class="card my-4">
                <div class="card-header">
                    <div>
                        <p class="mt-4 d-inline">
                            <?php echo $title; ?>
                        </p>
                        <a href="<?=site_url('admin/category/create')?>" style="float: right;" class="btn btn-light active" role="button" aria-disabled="true">Add Category</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-success">
                        <?php if ($this->session->flashdata('success_msg')) {
                            echo $this->session->flashdata('success_msg');
                        }?>
                    </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="feedback" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data as $key => $value){ ?>
                                        <tr>
                                            <td><?php echo $value->sno ?></td>
                                            <td><?php echo $value->category_name ?></td>
                                            <td><a href="<?php echo site_url('admin/category/edit/'.$this->encryption->encrypt($value->id)) ?>" class="btn-sm btn-primary">Edit</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

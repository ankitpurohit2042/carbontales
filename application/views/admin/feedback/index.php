<div id="layoutSidenav">
    <?php $this->load->view('/admin/templates/sidebar'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">

                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <?php echo $title; ?>
                            <a href="<?= base_url('admin/addFeedback') ?>" style="float: right;" class="btn btn-success active" role="button" aria-disabled="true">Add Feedback</a>

                            </div>
                            <?php if($this->session->flashdata('msg')){ ?>
                                <div class="alert alert-success hide-out" role="alert">  
                                    <?php echo $this->session->flashdata('msg');?>
                                </div>
                            <?php } ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="feedback" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Feedback</th>
                                                <th>Created At</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach ($data as $row){ ?><tr>  
                                                <td><?php echo $row->name;?></td>  
                                                <td width="1000"><?php echo $row->feedback;?></td>
                                                <td><?php echo $row->created_at;?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/editFeedback/'.$row->feedback_id) ?>"><i class="far fa-edit"></i></a>
                                                    <a href="<?= base_url('admin/deleteFeedback/'.$row->feedback_id) ?>"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                                </tr>  
                                             <?php }  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>
            </main>
        </div>
</div>
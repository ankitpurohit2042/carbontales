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
                    <div class="text-danger">
                        <?php if ($this->session->flashdata('error_msg')) {
                            echo $this->session->flashdata('error_msg');
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
                                    <?php foreach ($data as $key => $value) {?>
                                        <tr>
                                            <td><?php echo $value->sno ?></td>
                                            <td><?php echo $value->category_name ?></td>
                                            <td>
                                                <a href="<?php echo site_url('admin/category/edit/' . $this->encryption->encrypt($value->id)) ?>" class="" title="Edit"><i class="far fa-edit text-link"></i></a>
                                                <a href="<?php echo site_url('admin/category/delete/' . $this->encryption->encrypt($value->id)) ?>" class="delete-btn" title="Delete"><i class="far fa-trash-alt text-danger"></i></a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.delete-btn', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        Swal.fire({
            title: "Are you sure?",
            text: "You wont be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        })
    });
</script>
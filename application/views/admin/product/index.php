<div id="layoutSidenav">
    <?php $this->load->view('/admin/templates/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        <?php echo $title; ?>
                        <a href="<?= base_url('admin/addProduct') ?>" style="float: right;" class="btn btn-success active" role="button" aria-disabled="true">Add Product</a>

                    </div>
                    <?php if ($this->session->flashdata('msg')) { ?>
                        <div class="alert alert-success hide-out" role="alert">
                            <?php echo $this->session->flashdata('msg'); ?>
                        </div>
                    <?php } ?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="feedback" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <!-- <th>Price</th> -->
                                        <th>Is Active</th>
                                        <th>Type</th>
                                        <th>Images</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row) {
                                        // echo "<pre>"; print_r($row);die;
                                        if (strlen($row['description']) > 100) {
                                            $pos = stripos($row['description'], ' ', 90);
                                            $string = substr($row['description'], 0, $pos) . '.....';
                                        } else {
                                            $string = $row['description'];
                                        }
                                    ?><tr>
                                            <td><?= $row['product_id']; ?></td>
                                            <td><?= $row['name']; ?></td>
                                            <td style="width: 200px;"><?php echo $string; ?></td>
                                            <!-- <td><?= $row['price']; ?></td> -->
                                            <td><?= ($row['is_active'] ==1 ) ? 'Yes': 'No'; ?></td>
                                            <td><?= $row['type']; ?></td>
                                            <td>
                                            <?php foreach ($row['image_details'] as $value) { ?>
                                                <img width="50" height="50" src="<?php echo base_url() . 'assets/upload/product/' . $value->file_name; ?>" />
                                                <?php } ?>    
                                            </td>
                                            <td>
                                                <?= $row['created_at']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/viewProduct/'.$row['product_id']) ?>"><i class="fas fa-search"></i></a>
                                                <a href="<?= base_url('admin/editProduct/' . $row['product_id']) ?>"><i class="far fa-edit"></i></a>
                                                <a href="<?= base_url('admin/deleteProduct/' . $row['product_id']) ?>"><i class="far fa-trash-alt"></i></a>
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
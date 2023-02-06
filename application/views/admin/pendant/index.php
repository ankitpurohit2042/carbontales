<div id="layoutSidenav">
    <?php $this->load->view('/admin/templates/sidebar'); //echo "<pre>"; print_r($data);die; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">

                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <?php echo $title; ?>
                            <a href="<?= base_url('admin/addPendant') ?>" style="float: right;" class="btn btn-success active" role="button" aria-disabled="true">Add Pendant</a>

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
                                                <th>Product Code</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Diamond Weight</th>
                                                <th>Gold Weight</th>
                                                <th>Image</th>
                                                <th>Created At</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach ($data as $row){
                                                ?><tr>

                                                <td><?php echo $row->product_code;?></td>
                                                <td><?php echo $row->name;?></td>
                                                <td><?php echo $row->price;?></td>
                                                <td><?php echo $row->diamond_weight;?></td>
                                                <td><?php echo $row->gold_weight;?></td>
                                                <td ><img width="50" height="50" src="<?php echo base_url().'/assets/upload/pendant/'.$row->file_name;?>"/> </td>
                                                <td><?php echo $row->created_at;?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/editPendant/'.$row->id) ?>"><i class="far fa-edit"></i></a>
                                                    <a href="<?= base_url('admin/deletePendant/'.$row->id) ?>"><i class="far fa-trash-alt"></i></a>
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
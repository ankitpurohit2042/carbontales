<div class="container">
    <form action="<?php echo site_url('admin/category/update/'.$this->encryption->encrypt($data->id)) ?>" method="post">
        <div class="mt-2">
            <h2>
                <?php echo isset($title) ? $title : '' ?>
            </h2>
        </div>
        <div class="form-group">
            <div class="form ">                
                <div class="form-group col-md-12">
                    <label for="categoryName" class="form-label ">Category Name</label>
                    <input type="text" class="form-control" name="categoryName" id="categoryName"
                        placeholder="Enter Category Name" value="<?php echo isset($data) ? $data->category_name : 'ankit' ?>">
                        <span class="text-danger" id="errorCategoryName">
                            <?php if ($this->session->flashdata('error')) {
                                echo $this->session->flashdata('error');
                            }?>
                        </span>
                </div>

                <div class="form-group col-lg-4">
                    <button type="submit" class=" btn btn-primary" id="addCategory">Add</button>
                    <a href="<?php echo  site_url('admin/category') ?>" class=" btn btn-danger padding-top">cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function(){
        $("#addCategory").click(function(){
            var categoryName = $('#categoryName').val();
            var check = true;

            if(!categoryName){
                check = false;
                $('#errorCategoryName').html('Enter category name');
            }
            return check;
        })
    })
</script>
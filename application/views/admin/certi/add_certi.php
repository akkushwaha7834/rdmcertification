<div class="content">
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">ADD</h6>
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('certi/certi_submit_data'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name" class="form-label">Certificates name<span class="text-danger">*</span> </label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Certificates name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="slug" class="form-label">Certificates slug<span class="text-danger">*</span> </label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="Certificates slug" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="image" class="form-label">Certificates image<span class="text-danger">*</span> </label>
                                <input type="file" name="image" class="form-control" id="image" placeholder="Certificates image" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="name" class="form-label">Certificates brief desc<span class="text-danger">*</span> </label>
                                <input type="text" name="brief_desc" class="form-control" id="brief_desc" placeholder="Certificates brief desc" required>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="description" class="form-label">Certificates description<span class="text-danger">*</span> </label>
                                <textarea type="text" name="description" class="form-control" id="description" placeholder="Certificates description" required></textarea>
                            </div>
                            <div>
                                <button type="submit" name="submit" value="Add" class="btn btn-primary" style="margin: 10px;">Add</button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
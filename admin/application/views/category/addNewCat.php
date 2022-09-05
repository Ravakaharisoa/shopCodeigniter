<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="card">
                        <div class="card-header text-success"><h4>ADD NEW CATEGORY</h4></div>
                            <div class="card-body">
                                <form action="<?= base_url('category/addNewCategory') ?>" method="post" class="pl-5 pr-5">
                                    <div class="form-group">
                                        <label class="control-label mb-1">Category Name</label>
                                        <input name="catname" type="text" class="form-control" onKeyUp="javascript:this.value=this.value.toUpperCase();">
                                        <span class="text-danger"><?= form_error('catname') ?></span>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="control-label mb-1">Category Description</label>
                                        <input name="catdesc" type="text" class="form-control">
                                        <span class="text-danger"><?= form_error('catdesc') ?></span>
                                    </div>
                                    <div>
                                        <button  type="submit" name="submit" class="btn btn-success btn-block">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                        
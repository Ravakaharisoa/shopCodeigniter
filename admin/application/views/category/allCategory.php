<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <?php if($this->session->flashdata('success')): ?>
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <span><?=$this->session->flashdata('success') ?></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header text-success"><h4>ALL CATEGORY</h4></div>
                            <div class="card-body">
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>CATEGORY NAME</th>
                                                <th>CATEGORY DESCRIPTION</th>
                                                <th>ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($categories as $categorie) :
                                            ?>
                                            <tr>
                                                <td><?= $categorie->cat_name ?></td>
                                                <td><?= $categorie->cat_desc ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="item" href="<?= base_url('category/addNewCategory') ?>" data-toggle="tooltip" data-placement="top" title="Add">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </a>
                                                        <a href="<?= base_url() ?>category/editCategory?cat_id=<?= $categorie->cat_id ?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a>
                                                        <a href="<?= base_url() ?>category/deleteCategory?cat_id=<?= $categorie->cat_id ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
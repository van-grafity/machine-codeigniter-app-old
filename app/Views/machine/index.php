<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $page_title ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage Machine</h3>
                            <div class="d-flex justify-content-end mb-1">
                                <a href="<?= url_to('machine-create') ?>" class="btn btn-success mb-2"
                                    id="btn_modal_create">Create</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="machine_table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kind Of Machine</th>
                                        <th width="150">Brand</th>
                                        <th width="150">Model</th>
                                        <th width="150">Serial</th>
                                        <th width="150">QTY</th>
                                        <th width="150">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($machines as $key => $machine) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $machine['kind_of_machine'] ?></td>
                                        <td><?= $machine['brand'] ?></td>
                                        <td><?= $machine['model'] ?></td>
                                        <td><?= $machine['serial'] ?></td>
                                        <td><?= $machine['qty'] ?></td>
                                        <td>
                                            <a href="<?= url_to('machine-edit', $machine['id'])?>"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= url_to('machine-delete', $machine['id'])?>"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-boody -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>



<?= $this->endSection('content'); ?>
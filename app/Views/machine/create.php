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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('machine-store')?>" method="POST">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="machine_type">Machine Type</label>
                                            <select id="machine_type" name="machine_type" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($machine_types as $key => $machine_type) : ?>
                                                <option value="<?= $machine_type['id']; ?>">
                                                    <?= $machine_type['machine_type']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Brand </label>
                                            <select id="brand" name="brand" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($brands as $key => $brand) : ?>
                                                <option value="<?= $brand['id']; ?>">
                                                    <?= $brand['brand']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="model">Model</label>
                                            <input type="text" class="form-control" id="model" name="model" required>
                                        <div class="form-group">
                                            <label for="serial_number">Serial Number</label">
                                            <input type="text" class="form-control" id="serial_number" name="serial_number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 text-right">
                                            <a href="<?= url_to('machine') ?>" type="button"
                                                class="btn btn-secondary">Cancel</a>
                                            <button type="submit" class="btn btn-primary" id="btn_submit">Add
                                                Machine</button>
                                        </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
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
<?= $this->extend('app-layout/template'); ?>

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

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('machine_location-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="machine_location_id" value="<?= $machine_location['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Machine</label>
                                            <select id="serial_number" name="serial_number" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($machines as $key => $machine) : ?>
                                                <option value="<?= $machine['id']; ?>"
                                                    <?php if($machine_location['machine_id'] == $machine['id']) echo "selected"; ?>>
                                                    <?= $machine['serial_number']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <select id="location" name="location" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($locations as $key => $location) : ?>
                                                <option value="<?= $location['id']; ?>"
                                                    <?php if($machine_location['location_id'] == $location['id']) echo "selected"; ?>>
                                                    <?= $location['location']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" class="form-control" id="date" name="date"
                                                value="<?= $machine_location['date'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="time">Time</label>
                                            <input type="time" class="form-control" id="time" name="time"
                                                value="<?= $machine_location['time'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('machine_location') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Machine
                                        Location</button>
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
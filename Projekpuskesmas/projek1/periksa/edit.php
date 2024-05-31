<?php
require_once 'header.php';
require_once 'sidebar.php';

require '../dbkoneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Query untuk mengambil data pasien berdasarkan id
    $sql = "SELECT * FROM periksa WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submit'])) {
    $_id = $_POST['id'];
    $_tanggal = $_POST['tanggal'];
    $_berat = $_POST['berat'];
    $_tinggi = $_POST['tinggi'];
    $_tensi = $_POST['tensi'];
    $_keterangan = $_POST['keterangan'];
    $_pasien_id = $_POST['pasien_id'];
    $_dokter_id = $_POST['dokter_id'];
    $data = [$_id, $_tanggal, $_berat, $_tinggi, $_tensi, $_keterangan, $_pasien_id, $_dokter_id];
    // Query SQL untuk update data pasien berdasarkan id
    $sql = "UPDATE periksa SET id = ?, tanggal = ?, berat = ?, tinggi = ?, tensi = ?, keterangan = ?, pasien_id = ?, dokter_id = ? WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    echo "<script>window.location.href = 'index.php';</script>";
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Periksa</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-center">Form Periksa</h2>
                            <form action="edit.php?id=<?= $row['id'] ?>" method="POST">
                                <div class="form-group row">
                                    <label for="kode" class="col-4 col-form-label">id</label>
                                    <div class="col-8">
                                        <input id="id" name="id" type="text" class="form-control" value="<?= $row['id'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">tanggal</label>
                                    <div class="col-8">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $row['tanggal'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tmp_lahir" class="col-4 col-form-label">berat</label>
                                    <div class="col-8">
                                        <input id="berat" name="berat" type="text" class="form-control" value="<?= $row['berat'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-4 col-form-label">tinggi</label>
                                    <div class="col-8">
                                        <input id="tinggi" name="tinggi" type="text" class="form-control" value="<?= $row['tinggi'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-4 col-form-label">tensi</label>
                                    <div class="col-8">
                                        <input id="tensi" name="tensi" type="text" class="form-control" value="<?= $row['tensi'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-4 col-form-label">keterangan</label>
                                    <div class="col-8">
                                        <input id="keterangan" name="keterangan" type="text" class="form-control" value="<?= $row['keterangan'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-4 col-form-label">pasien_id</label>
                                    <div class="col-8">
                                        <input id="pasien_id" name="pasien_id" type="text" class="form-control" value="<?= $row['pasien_id'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-4 col-form-label">dokter_id</label>
                                    <div class="col-8">
                                        <input id="dokter_id" name="dokter_id" type="text" class="form-control" value="<?= $row['dokter_id'] ?>">
                                    </div>
                                </div>
                            
                                
                                            <?php
                                            $sqljenis = "SELECT * FROM periksa";
                                            $rsjenis = $dbh->query($sqljenis);
                                            foreach ($rsjenis as $rowjenis) {
                                                $selected = ($row['id'] == $rowjenis['id']) ? 'selected' : '';
                                                echo "<option value='" . $rowjenis['id'] . "' $selected>" . $rowjenis['id'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Projek 1 - Aplikasi Web Sederhana Puskesmas
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>
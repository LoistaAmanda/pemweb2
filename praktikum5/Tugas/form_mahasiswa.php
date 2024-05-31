<?php require_once 'class_nilaimahasiswa.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai  Ujian Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
        <h2>Form Nilai Ujian</h2>

    <form method= "POST" >
        <div class="form-group row">
             <label for="nim" class="col-4 col-form-label">NIM</label> 
             <div class="col-8">
             <input id="nim" name="nim" type="text" required="required" class="form-control">
            </div>
        </div><br>

        <div class="form-group row">
            <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="matakuliah" name="matakuliah" class="custom-select" required="required">
                <?php foreach ($matakuliah as $key => $value){?>
                    <option value="<?= $key; ?>"><?= $value ?></option>
                <?php }?>
            </select>
            </div>
        </div><br>

        <div class="form-group row">
             <label for="nilai" class="col-4 col-form-label">Nilai</label> 
             <div class="col-8">
             <input id="nilai" name="nilai" type="number" required="required" class="form-control">
            </div>
        </div><br>

        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php 

    if (isset($_POST['submit'])) {

    $nim = $_POST['nim'];
    $matakuliah = $_POST['matakuliah'];
    $nilai = $_POST['nilai'];

    
    $nilaiMahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim);
    $hasilUjian = $nilaiMahasiswa->hasilujian();
    $grade = $nilaiMahasiswa->grade();
    ?>

    <ul>
        <li>NIM: <?= $nim ?></li>
        <li>Mata Kuliah: <?= $matakuliah ?></li>
        <li>Nilai: <?= $nilai ?></li>
        <li>Hasil Ujian: <?= $hasilUjian ?></li>
        <li>Grade: <?= $grade ?></li>
    </ul>
    <?php } ?> 
</body>
</html>
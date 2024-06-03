<?php
session_start();

include_once 'header.php';
include_once 'sidebar.php';

$praktikum = 'Praktikum 1';
$title = 'Array Buah';
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?= $praktikum ?></a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
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
                <h3 class="card-title"><?= $title ?></h3>

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
              <form method="post" action="form_nilai.php">
                <legend>Form Nilai</legend>
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                  <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                  <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                      <option value="DDP">Dasar Dasar Pemrograman</option>
                      <option value="BD1">Basis Data 1</option>
                      <option value="PW">Pemrograman Web</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                  <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS Anda" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                  <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS Anda" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                  <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas/Praktikum Anda" type="text" class="form-control">
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </form>
              <hr>
              <?php
              if (isset($_POST['submit'])) {
              $submit = $_POST['submit'];
              $nama = $_POST['nama'];    
              $mata_kuliah = $_POST['matkul'];    
              $nilai_uts = $_POST['nilai_uts'];    
              $nilai_uas = $_POST['nilai_uas'];    
              $nilai_tugas = $_POST['nilai_tugas'];        
              
              echo '<br/>Nama Lengkap : '.$nama;
              echo '<br/>Mata Kuliah : '.$mata_kuliah;
              echo '<br/>Nilai UTS : '.$nilai_uts;
              echo '<br/>Nilai UAS : '.$nilai_uas;
              echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
              }
              ?>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>


<?php 
include_once 'footer.php';
?>
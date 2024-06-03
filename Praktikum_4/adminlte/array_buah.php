<?php
session_start();

include_once 'header.php';
include_once 'sidebar.php';

$praktikum = 'Praktikum 1';
$title = 'Array Buah';
?>

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
                <?php
                $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];

                echo $ar_buah[2];

                echo '<br/>Jumlah Buah ' . count($ar_buah);

                echo '<ol>';
                foreach($ar_buah as $buah){
                echo '<li>'. $buah .'</li>';
                }
                echo '</ol>';
                
                $ar_buah[]="Durian";

                unset($ar_buah[1]);

                $ar_buah[2]="Manggis";

                echo '<ul>';
                foreach($ar_buah as $k => $v){
                echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
                }
                echo '</ul>';
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
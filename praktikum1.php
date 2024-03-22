<?php include_once "header.php" ?>

<?php include_once "sidebar.php" ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum</h1>
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
                <h3 class="card-title">Praktikum 1</h3>

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
                $nama = 'Muhammad Afif Abdurrahman';
                $kelas = 07;
                $umur = 18;
                $kampus = 'STT Nurul Fikri';

                echo 'Nama : ', $nama;
                echo '<br/>Kelas : ',' TI', $kelas;
                echo '<br/>Umur : ', $umur, ' Tahun';

                echo "<br/>Kampus : .$kampus Depok";

                echo '<hr/>';
                // variable system
                echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
                echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

                echo '<hr/>';
                //Definikan variabel konstanta dengan menggunakan DEFINE
                define('PELAJARAN', 'UI/UX');

                echo 'Mata Kuliah : ', PELAJARAN;
                ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Ini adalah hasil praktikum 1
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

<?php include_once "footer.php" ?>
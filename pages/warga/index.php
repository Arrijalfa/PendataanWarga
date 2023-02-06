<?php include('../_partials/dashboard-top.php') ?>

<!-- Page Wrapper -->
<div id="wrapper">
<?php include('../_partials/dashboard-sidebar.php'); ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
  
<!-- Main Content -->
<div id="content">
<?php include('../_partials/dashboard-topbar.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h4 mb-0 text-gray-800">Data Warga</h1>
</div>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<?php include('../dashboard/data-index.php') ?>

<div class="table-responsive">
  <table class="table table-striped table-condensed table-hover" id="datatable">
    <thead>
      <tr>
        <th>#</th>
        <th>NIK</th>
        <th>Nama Warga</th>
        <th>L/P</th>
        <!-- <th>Lahir</th> -->
        <th>Usia</th>
        <th>Pendidikan</th>
        <th>Pekerjaan</th>
        <th>Kawin</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $nomor = 1; ?>
      <?php foreach ($data_warga as $warga) : ?>
      <tr>
        <td><?php echo $nomor++ ?>.</td>
        <td><?php echo $warga['nik_warga'] ?></td>
        <td><?php echo $warga['nama_warga'] ?></td>
        <td><?php echo $warga['jenis_kelamin_warga'] ?></td>
        <!-- <td>
          <?php echo ($warga['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($warga['tanggal_lahir_warga'])) : ''?>
        </td> -->
        <td><?php echo $warga['usia_warga'] ?></td>
        <td><?php echo $warga['pendidikan_terakhir_warga'] ?></td>
        <td><?php echo $warga['pekerjaan_warga'] ?></td>
        <td><?php echo $warga['status_perkawinan_warga'] ?></td>
        <td><?php echo $warga['status_warga'] ?></td>
        <td>
          <!-- Single button -->
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            </button>

          <div class="dropdown-menu pull-right">
              <a class="dropdown-item" href="show.php?id_warga=<?= $warga['id_warga'] ?>">
                <i class="fas fa-eye"></i> Detail</a>
              <a class="dropdown-item" href="edit.php?id_warga=<?= $warga['id_warga'] ?>"><i class="fas fa-edit"></i>
                Ubah</a>
              <a class="dropdown-item" href="cetak-show.php?id_warga=<?= $warga['id_warga'] ?>">
              <i class="fas fa-print"></i> Cetak</a>

            <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="delete.php?id_warga=<?= $warga['id_warga'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                            <i class="fas fa-trash"></i>
                            Delete
                          </a>
                        </div>
          </div>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<br><br>

<div class="card text-grey bg-light mb-1">
  <div class="card-body">
    <h6><b>Total Warga : </b>
    <?php echo $jumlah_warga['total'] ?> orang</h6>

    <h6><b>Jumlah Laki-laki : </b>
    <?php echo $jumlah_warga_l['total'] ?> orang</h6>

    <h6><b>Jumlah Perempuan : </b>
    <?php echo $jumlah_warga_p['total'] ?> orang</h6>

    <h6><b>Jumlah Warga <17 Tahun : </b>
    <?php echo $jumlah_warga_kd_17['total'] ?> orang</h6>

    <h6><b>Jumlah Warga >=17 Tahun </b>
    <?php echo $jumlah_warga_ld_17['total'] ?> orang</h6>
  </div>
</div>

<!-- End of Main Content -->

<?php include('../_partials/dashboard-footer.php') ?>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- End of Page Wrapper -->

<?php include('../_partials/dashboard-logout.php'); ?>

<?php include('../_partials/dashboard-bottom.php') ?>
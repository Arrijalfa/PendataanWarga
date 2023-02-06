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
<h1 class="h4 mb-0 text-gray-800">Data Kartu Keluarga</h1>
</div>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<?php include('../dashboard/data-index.php') ?>

<div class="table-responsive">
  <table class="table table-striped table-condensed table-hover" id="datatable">
    <thead>
      <tr>
        <th>#</th>
        <th>Nomor KK</th>
        <th>Kepala Keluarga</th>
        <th>NIK Kepala</th>
        <th>Jml. Anggota</th>
        <th>Alamat</th>
        <th>RT</th>
        <th>RW</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $nomor = 1; ?>
      <?php foreach ($data_kartu_keluarga as $kartu_keluarga) : ?>

      <?php
      // hitung anggota
      $query_jumlah_anggota = "SELECT COUNT(*) AS total FROM warga_has_kartu_keluarga WHERE id_keluarga = ".$kartu_keluarga['id_keluarga'];
      $hasil_jumlah_anggota = mysqli_query($db, $query_jumlah_anggota);
      $jumlah_jumlah_anggota = mysqli_fetch_assoc($hasil_jumlah_anggota);
      ?>

      <tr>
        <td><?php echo $nomor++ ?>.</td>
        <td><?php echo $kartu_keluarga['nomor_keluarga'] ?></td>
        <td><?php echo $kartu_keluarga['nama_warga'] ?></td>
        <td><?php echo $kartu_keluarga['nik_warga'] ?></td>
        <td><?php echo $jumlah_jumlah_anggota['total'] ?></td>
        <td><?php echo $kartu_keluarga['alamat_keluarga'] ?></td>
        <td><?php echo $kartu_keluarga['rt_keluarga'] ?></td>
        <td><?php echo $kartu_keluarga['rw_keluarga'] ?></td>
        <td>
          <!-- Single button -->
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            </button>

            <div class="dropdown-menu pull-right">
                <a class="dropdown-item" href="show.php?id_keluarga=<?=$kartu_keluarga['id_keluarga'] ?>">
                    <i class="fas fa-eye"></i> Detail</a>

                <a class="dropdown-item" href="edit.php?id_keluarga=<?=$kartu_keluarga['id_keluarga'] ?>">
                    <i class="fas fa-edit"></i> Ubah</a> 

                <a class="dropdown-item" href="cetak-show.php?id_keluarga=<?=$kartu_keluarga['id_keluarga'] ?>" target="_blank"> 
                    <i class="fas fa-print"></i>  Cetak</a>
                    
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="edit-anggota.php?id_keluarga=<?=$kartu_keluarga['id_keluarga'] ?>">
                    <i class="fas fa-list"></i> Ubah Anggota</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" ref="delete.php?id_keluarga=<?=$kartu_keluarga['id_keluarga'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                            <i class="fas fa-trash"></i>
                            Hapus
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
    <dl class="dl-horizontal">
      <dt>Total Kartu Keluarga</dt>
      <dd><?php echo $jumlah_kartu_keluarga['total'] ?> keluarga</dd>
    </dl>
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
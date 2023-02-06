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
          <h1 class="h3 mb-0 text-gray-800">Data User</h1>
        </div>

        <?php include('_partials/menu.php') ?>

        <?php include('data-show.php') ?>

        <h5>A. Data Pribadi</h5>
        <table class="table table-sm table-middle">
          <tr>
            <th width="20%">Nama User</th>
            <td width="1%">:</td>
            <td><?php echo $data_user[0]['nama_user'] ?></td>
          </tr>
          <tr>
            <th>Username</th>
            <td>:</td>
            <td><?php echo $data_user[0]['username_user'] ?></td>
          </tr>
          <tr>
            <th>Keterangan</th>
            <td>:</td>
            <td><?php echo $data_user[0]['keterangan_user'] ?></td>
          </tr>
          <tr>
            <th>Status</th>
            <td>:</td>
            <td><?php echo $data_user[0]['status_user'] ?></td>
          </tr>
        </table>

        <h5>B. Data Alamat</h5>
        <table class="table table-sm">
          <tr>
            <th width="20%">Desa/Kelurahan</th>
            <td width="1%">:</td>
            <td><?php echo $data_user[0]['desa_kelurahan_user'] ?></td>
          </tr>
          <tr>
            <th>Kecamatan</th>
            <td>:</td>
            <td><?php echo $data_user[0]['kecamatan_user'] ?></td>
          </tr>
          <tr>
            <th>Kabupaten/Kota</th>
            <td>:</td>
            <td><?php echo $data_user[0]['kabupaten_kota_user'] ?></td>
          </tr>
          <tr>
            <th>Provinsi</th>
            <td>:</td>
            <td><?php echo $data_user[0]['provinsi_user'] ?></td>
          </tr>
          <tr>
            <th>Negara</th>
            <td>:</td>
            <td><?php echo $data_user[0]['negara_user'] ?></td>
          </tr>
          <tr>
            <th>RT</th>
            <td>:</td>
            <td><?php echo $data_user[0]['rt_user'] ?></td>
          </tr>
          <tr>
            <th>RW</th>
            <td>:</td>
            <td><?php echo $data_user[0]['rw_user'] ?></td>
          </tr>
        </table>

        <h5>C. Data Aplikasi</h5>
        <table class="table table-sm">
          <tr>
            <th width="20%">Diinput</th>
            <td width="1%">:</td>
            <td><?php echo $data_user[0]['created_at'] ?></td>
          </tr>
          <tr>
            <th>Diperbaharui</th>
            <td>:</td>
            <td><?php echo $data_user[0]['updated_at'] ?></td>
          </tr>
        </table>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <?php include('../_partials/dashboard-footer.php'); ?>
  </div>
  <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<?php include('../_partials/dashboard-bottom.php') ?>
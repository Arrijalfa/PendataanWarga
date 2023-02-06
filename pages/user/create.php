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
<h1 class="h4 mb-0 text-gray-800">Data User</h1>
</div>

<?php include('_partials/menu.php') ?>

<form action="store.php" method="post">
<h5>A. Data Pribadi</h5>
          <table class="table table-sm table-middle">
            <tr>
              <th width="20%">Nama User</th>
              <td width="1%">:</td>
              <td><input type="text" class="form-control" name="nama_user" required></td>
            </tr>
            <tr>
              <th>Username</th>
              <td>:</td>
              <td><input type="text" class="form-control" name="username_user" required></td>
            </tr>
            <tr>
              <th>Password</th>
              <td>:</td>
              <td><input type="password" class="form-control" name="password_user" required></td>
            </tr>
            <tr>
              <th>Keterangan</th>
              <td>:</td>
              <td><textarea class="form-control" name="keterangan_user"></textarea></td>
            </tr>
            <tr>
              <th>Status</th>
              <td>:</td>
              <td>
                <select class="form-control selectpicker" name="status_user" required>
                  <option value="" selected disabled>- pilih -</option>
                  <option value="Admin">Admin</option>
                  <option value="RT">RT</option>
                  <option value="RW">RW</option>
                </select>
              </td>
            </tr>
          </table>

<h5>B. Data Alamat</h5>
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">Desa/Kelurahan</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_user" value="<?php echo $_SESSION['user']['desa_kelurahan_user'] ?>" required></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_user" value="<?php echo $_SESSION['user']['kecamatan_user'] ?>" required></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_user" value="<?php echo $_SESSION['user']['kabupaten_kota_user'] ?>" required></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_user" value="<?php echo $_SESSION['user']['provinsi_user'] ?>" required></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_user" value="<?php echo $_SESSION['user']['negara_user'] ?>" required></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_user" value="<?php echo $_SESSION['user']['rt_user'] ?>" required></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_user" value="<?php echo $_SESSION['user']['rw_user'] ?>" required></td>
  </tr>
</table>
<button type="submit" class="btn btn-primary btn-lg mb-3"><i class="fas fa-save"></i> Simpan</button>
</form>
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
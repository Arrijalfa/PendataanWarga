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
<h1 class="h4 mb-0 text-gray-800">Data Kartu Keluarga</h1>
<br>
<?php include('_partials/menu.php') ?>

<?php include('data-create.php') ?>

<form action="store.php" method="post">
<h5>A. Data Pribadi</h5>
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nomor_keluarga" required></td>
  </tr>
  <tr>
    <th>ID Kepala Keluarga</th>
    <td>:</td>
    <td>
      <select class="form-control selectlive" id="kepala_keluarga" name="id_kepala_keluarga" required>
        <option value="" selected disabled>- pilih -</option>
        <?php foreach ($data_warga as $warga) : ?>
        <option value="<?php echo $warga['id_warga'] ?>">
          <?php echo $warga['nama_warga'] ?> (NIK: <?php echo $warga['nik_warga'] ?>)
        </option>
        <?php endforeach ?>
      </select>
    </td>
  </tr>
</table>

<h5>B. Data Alamat</h5>
<table class="table table-sm table-middle">
  <tr>
    <th width="20%">Alamat</th>
    <td width="1%">:</td>
    <td><textarea class="form-control" name="alamat_keluarga" id="alamat_keluarga"></textarea></td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_keluarga" id="desa_kelurahan_keluarga" required></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_keluarga" id="kecamatan_keluarga" required></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_keluarga" id="kabupaten_kota_keluarga" required></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_keluarga" id="provinsi_keluarga" required></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_keluarga" value="<?php echo $_SESSION['user']['negara_user'] ?>" required></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_keluarga" id="rt_keluarga" required></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_keluarga" id="rw_keluarga" required></td>
  </tr>
  <tr>
    <th>Kode Pos</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kode_pos_keluarga" id="kode_pos_keluarga" ></td>
  </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="fas fa-save"></i> Simpan
</button>
</form>
<?php include('../_partials/dashboard-footer.php'); ?>
<?php include('../_partials/dashboard-logout.php'); ?>
<?php include('../_partials/dashboard-bottom.php') ?>

<script>
  $(document).ready(function () {
  // code to get all records from table via select box
    $("#kepala_keluarga").change(function () {
      var id = $(this).find(":selected").val();
      var dataString = "wargaid=" + id;
      $.ajax({
        url: "../../pages/kartu-keluarga/get-keluarga.php",
        dataType: "json",
        data: dataString,
        cache: false,
        success: function (dataWarga) {
          if (dataWarga) {
            $("#alamat_keluarga").val(dataWarga.alamat_warga);
            $("#desa_kelurahan_keluarga").val(dataWarga.desa_kelurahan_warga);
            $("#kecamatan_keluarga").val(dataWarga.kecamatan_warga);
            $("#kabupaten_kota_keluarga").val(dataWarga.kabupaten_kota_warga);
            $("#provinsi_keluarga").val(dataWarga.provinsi_warga);
            $("#rt_keluarga").val(dataWarga.rt_warga);
            $("#rw_keluarga").val(dataWarga.rw_warga);
            $("#kode_pos_keluarga").val(dataWarga.kode_pos_warga);
          }
        },
      });
    });
  });
</script>
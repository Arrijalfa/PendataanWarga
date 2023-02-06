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

        <?php include('data-index.php') ?>

        <div class="table-responsive">
          <table class="table table-striped table-condensed table-hover" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data_user as $user) : ?>
              <tr>
                <td><?php echo $user['id_user'] ?></td>
                <td><?php echo $user['nama_user'] ?></td>
                <td><?php echo $user['username_user'] ?></td>
                <td><?php echo $user['keterangan_user'] ?></td>
                <td><?php echo $user['status_user'] ?></td>
                <td>
                  <!-- Single button -->
                  <div class="btn-group pull-right">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                      <span class="caret"></span>
                    </button>

                      <div class="dropdown-menu pull-right">
                        <a class="dropdown-item" href="show.php?id_user=<?= $user['id_user'] ?>">
                          <i class="fas fa-eye"></i>
                          Detail
                        </a>
                        <a class="dropdown-item" href="edit.php?id_user=<?= $user['id_user'] ?>">
                          <i class="fas fa-edit"></i>
                          Ubah
                        </a>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="delete.php?id_user=<?= $user['id_user'] ?>" onclick="return confirm('Yakin hapus data ini?')">
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
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <?php include('../_partials/dashboard-footer.php'); ?>
  </div>
  <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<?php include('../_partials/dashboard-logout.php'); ?>

<?php include('../_partials/dashboard-bottom.php') ?>
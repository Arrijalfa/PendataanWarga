<?php
  include_once("../../config/koneksi.php");
  if($_REQUEST['wargaid']) {
    // $sql = "SELECT * FROM kartu_keluarga LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga WHERE id_keluarga = '".$_REQUEST['wargaid']."'";
    $sql = "SELECT * FROM warga WHERE id_warga = '".$_REQUEST['wargaid']."'";
    $resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));	
    $data = array();
    while( $rows = mysqli_fetch_assoc($resultset) ) {
      $data = $rows;
    }
    echo json_encode($data);
  } else {
    echo 0;	
  }
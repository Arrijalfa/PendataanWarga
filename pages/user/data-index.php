<?php

require_once "../../config/koneksi.php";

// get data 
$query = "SELECT * FROM user";
$result = mysqli_query($db, $query);
$data_user = array();

while ($row = mysqli_fetch_assoc($result)) {
  $data_user[] = $row;
}
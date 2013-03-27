<?php
  if($_GET['index']) {
    $i = $_GET['index'] + 1;
  } else {
    $i = 1;
  }
  $formatted_i = sprintf('%03d', $i);
  $csv_filename = "data/ISS".$formatted_i.".csv";
  $csv = file_get_contents($csv_filename);
  $array = array_map("str_getcsv", explode("\r\n", $csv));
  print json_encode($array);
?>
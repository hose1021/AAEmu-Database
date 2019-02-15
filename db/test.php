<?php 
$json = file_get_contents('results.json');
$data = json_decode($json, true);
echo $data[0]['name'];
 ?>
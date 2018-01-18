<?php

include "functions/database.php";

$query = "SELECT * from articles LIMIT 1";

$result_set = $connection->query($query);

if($result_set->num_rows > 0) {
  $response = "";
  while($data = $result_set->fetch_array()) {
    echo $response = $data["body"];
  }
}

?>
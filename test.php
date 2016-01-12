<?php

$conn = null;


function conntest( ) {
  global $conn;
  $conn = date("H:i:s");
  echo $conn."\n";
  sleep(3);
  return($conn);
}

$conn1 = conntest();
$conn2 = conntest();

echo $conn1.":".$conn2."\n";

?>
<?php
require('config.php');
$id = $_REQUEST["id"];
$sql = "DELETE FROM USERS WHERE id = '$id'";
$result = $conn->query($sql);
if (!$result == TRUE) {
  echo "Error:" . $sql . "<br>" . $conn->error;
}
echo $result;
?>
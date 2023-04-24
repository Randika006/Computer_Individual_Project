<?php
include_once 'Config.php';
$sql = "DELETE FROM internal_params WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($db, $sql)) {
    header("location: report.php");
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
?>
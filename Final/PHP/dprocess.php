<?php
include_once 'Config.php';
$sql = "DELETE FROM vehicles_details WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($db, $sql)) {
    header("location: VehiclesDetails.php");
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
?>
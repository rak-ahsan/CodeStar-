<?php
include('../../includes/db.php');
    $id=$_GET['id'];
    $sql = "DELETE FROM booking WHERE land_id = $id"; 
    $result = $conn->query($sql);
    header('location:bookingview.php');
?>
<?php

session_start();

session_destroy();

include('includes/db.php');

$delete_cart = "delete from cart where 1";
$deleted_cart = mysqli_query($conn,$delete_cart);

echo "<script>window.open('index.php','_self');</script>";

?>
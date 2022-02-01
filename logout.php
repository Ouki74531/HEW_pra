<?php
if(isset($_SESSION["id"])){
    unset($_SESSION["id"]);
    header("location:./product_screen.php");
    exit;
}
?>
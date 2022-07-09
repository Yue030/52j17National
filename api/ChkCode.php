<?php
$chkcode = $_POST["chkcode"];

if(!isset($_SESSION)){ session_start(); } //檢查SESSION是否啟動

echo json_encode(array(
    "status" => $_SESSION["check_word"] == $chkcode
));
?>

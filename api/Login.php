<?php
$acc = $_POST["acc"];
$pw = $_POST["pw"];

if ($acc == "admin" && $pw == "1234") {
    echo json_encode(array(
        "status" => 1
    ));
    return;
}

echo json_encode(array(
    "status" => 0
))


?>
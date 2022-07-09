<?php
    include_once "db.php";

    $id = $_POST["id"];

    $sql = "UPDATE `messageboard` SET `is_top` = 0";
    $pdo->exec($sql);

    $sql = "UPDATE `messageboard` SET `is_top` = 1 WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        $id
    ));

    echo json_encode(array(
        "status" => 1
    ));
?>
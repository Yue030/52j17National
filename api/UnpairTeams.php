<?php
    include_once "db.php";

    $id = $_POST["id"];
    $sql = "UPDATE `team` SET `team_id`=0 WHERE `team_id`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));

    echo json_encode(array("status" => 0));
?>
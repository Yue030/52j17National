<?php
    include_once "db.php";

    $id = $_POST["id"];
    $isAdmin = $_POST["isAdmin"];

    $sql = "UPDATE messageboard SET del=1 WHERE id=?";
    $adminSql = "DELETE FROM messageboard WHERE id=?";

    $stmt = $isAdmin ? $pdo->prepare($adminSql) : $pdo->prepare($sql);
    $stmt->execute(array(
        $id
    ));

    echo json_encode(array(
        "status" => 1
    ));
?>
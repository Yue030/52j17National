<?php
    include_once "db.php";

    $sql = "SELECT * FROM `team`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $sql_result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $result = [];

    foreach ($sql_result as $data) {
        $result[$data["team_id"]][] = $data;
    }

    echo json_encode($result, JSON_PRETTY_PRINT)
?>
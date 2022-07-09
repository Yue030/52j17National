<?php
include_once "db.php";

$sql = "SELECT * FROM `messageboard` ORDER BY `is_top` DESC, `created_time` DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result, JSON_PRETTY_PRINT);

?>
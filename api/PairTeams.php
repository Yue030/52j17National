<?php
    include_once "db.php";

    $rows = $pdo->query("SELECT * FROM team WHERE team_id=0 ORDER BY team_id DESC")->fetchAll();

    $idlist = array_column($rows, "id");

    while (count($idlist) > 1) {
        $p1 = array_splice($idlist, array_rand($idlist), 1)[0];
        $p2 = array_splice($idlist, array_rand($idlist), 1)[0];
        $sql = "UPDATE team SET team_id=? WHERE id=? OR id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($p1, $p1, $p2));
    }

    echo json_encode(
        array(
            "status" => 1
        )
    )
?>
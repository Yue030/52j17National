<?php
    include_once "db.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $img_url = time() . "_" .$_FILES["img"]["name"];

    move_uploaded_file($_FILES["img"]["tmp_name"], "../match_img/{$img_url}");

    $sql = "INSERT INTO `team` (`name`, `tel`, `mail`, `img`) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        $name,
        $email,
        $phone,
        $img_url
    ));

    echo json_encode(array("status" => 1));
?>
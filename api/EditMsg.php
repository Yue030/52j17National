<?php
    include_once "db.php";

    $avatar_url = $_POST["avatar_url"];

    if (isset($_FILES["avatar"])) {
        $avatar_url = time() . "_" .$_FILES["avatar"]["name"];
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "../user_avatar/{$avatar_url}");
    }

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $msg = $_POST["msg"];
    $serial = $_POST["serial"];
    $show_email = $_POST["show_mail"];
    $show_phone = $_POST["show_phone"];
    $reply = $_POST["reply"];

    $sql = "UPDATE messageboard SET `name`=?, `email`=?, `phone`=?, `msg`=?, `serial`=?, `avatar_url`=?, `show_email`=?, `show_phone`=?, `reply`=? WHERE `id`=?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(
        array(
            $name,
            $email,
            $phone,
            $msg,
            $serial,
            $avatar_url,
            $show_email,
            $show_phone,
            $reply,
            $id
        )
    );

    echo json_encode(array(
        "status" => 1
    ));
?>
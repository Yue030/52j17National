<?php
include_once "db.php";

$avatar_url = null;

if (isset($_FILES["avatar"])) {
    $avatar_url = time() . "_" .$_FILES["avatar"]["name"];
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "../user_avatar/{$avatar_url}");
}

$sql = "INSERT INTO `messageboard` (`name`, `email`, `phone`, `msg`, `serial`, `avatar_url`, `show_email`, `show_phone`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);

$stmt->execute(
    array(
        $_POST["name"],
        $_POST["email"],
        $_POST["phone"],
        $_POST["msg"],
        $_POST["serial"],
        $avatar_url,
        $_POST["show_mail"],
        $_POST["show_phone"]
    )
);

echo json_encode(
    array(
        "status" => 1
    )
)

?>
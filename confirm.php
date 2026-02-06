<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>内容確認</title>
</head>
<body>
    <?php
        $user_id = $_POST["user_id"];
        $username = $_POST["username"];
        $pass = $_POST["pass"];

        echo "UserID: ".$user_id."<br>";
        echo "UserName: ".$username."<br>";
        echo "Password: ".$pass."<br>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Setting</title>
</head>
<body>
    <?php
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $sql_db = "exhibition_db"; // Replace with your actual DB name

    $dbconn = mysqli_connect($host, $user, $pwd, $sql_db);

    if (!$dbconn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
</body>
</html>
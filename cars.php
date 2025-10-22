<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connection</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    require_once "settings.php";
    $dbconn = @mysqli_connect ($host,$user,$pwd,$sql_db);
    if($dbconn)
    {
        $query = "SELECT * FROM cars";
        $result = mysqli_query($dbconn, $query);
        if($result){
            echo "<p> It works! </p>";
        }
        else
            echo "<p> It does not work... </p>";
        mysqli_close($dbconn);
    }
    else
        echo "<p> Unable to connect to the db.</p>";
    ?>
</body>
</html>
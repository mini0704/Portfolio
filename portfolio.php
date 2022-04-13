<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style>
    body{
        background-image: url("linkedin.png");
        background-color:grey;
    }
    </style>
</head>
<body>
    <h1>Kashish Roy</h1>
    <h2>MCA Student</h2>
    <p><a href="https://linkedin.com">Visit my linkedIn!</a></p>
    <center>
        <img scr="profile.png" alt="Student" width="125" height="125">


<?php
$expertise="cloud";

switch ($expertise){
    case "database":
        echo "<p> <font color=blue> My expertise is in the databse</font></p>";
        break;
    case "cloud":
        echo "<p> <font color=blue> My expertise is in the Cloud computing</font></p>";
        break;
    case "linux":
        echo "<p> <font color=blue> My expertise is in the Linux</font></p>";
        break;
    case "networking":
        echo "<p> <font color=blue> My expertise is in the Networking</font></p>";
        break;
    default:
        echo "<p> <font color=blue> My expertise is in Nothing</font></p>";
}
?>
</body>
</center>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$servername="localhost";
$username="root";
$dbpassword="";
$dbname="mca";

$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);

if(!$conn){
    echo"connection fail";
}
echo"connection stablish<br>";

$temp="SELECT excellent FROM feedback";
$result = mysqli_query($conn,$temp);
$row = mysqli_fetch_assoc($result);
echo $row["excellent"];

$temp="SELECT good FROM feedback";
$result = mysqli_query($conn,$temp);
$row = mysqli_fetch_assoc($result);

echo $row["good"];
$temp="SELECT poor FROM feedback";
$result = mysqli_query($conn,$temp);
$row = mysqli_fetch_assoc($result);

echo $row["poor"];
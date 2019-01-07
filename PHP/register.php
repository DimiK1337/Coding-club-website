<?php
//Database Related
//$server = "ptvp.myd.infomaniak.com";
$server = "localhost";
$dbname = "coding_club_registration";
$db_table = "user_data";
$username = "root";
$password = "";
//$user = 'ptvp_dmitriy';
//$pass = 'nations2018';
//Form variables
$name = $_POST["name_input"];
$email = $_POST["email_input"];
$year_level = $_POST["year_level_input"];
$coding_experience = $_POST["coding_experience"];
$coding_experience_array = json_encode($coding_experience);
$coding_level = $_POST["coding_level"];
/*
INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)
*/
$sql_insert = "INSERT INTO `user_data` (`name`,`email`,`year`,`coding_experience`, `coding_level`) VALUES ('$name', '$email', '$year_level','$coding_experience_array','$coding_level')";
$conn = new mysqli($server, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_query($conn, $sql_insert)) {
    echo "data inserted into DB<br>"; 
} 
else {
    echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

echo gettype($coding_experience_array);


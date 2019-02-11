<?php
//Database Related
$servername = "127.0.0.1";
//$server = "ptvp.myd.infomaniak.com";
//$user = 'ptvp_dmitriy';
//$pass = 'nations2018';
$dbname = "coding_club";
$db_table = "user_data";
$username = "root";
$password = "";


//Form variables

if(isset($_POST["name_input"])) {
    $name = $_POST["name_input"];
}
if(isset($_POST["email_input"])) {
    $email = $_POST["email_input"];
}
if(isset($_POST["year_level_input"])) {
    $year_level = $_POST["year_level_input"];
}
if(isset($_POST["coding_level"])) {
    $coding_level = $_POST["coding_level"];
}
if(isset($_POST["coding_experience"])) {
    $coding_experience = json_encode($_POST["coding_experience"]);
}
else{
    $coding_experience = "ERROR: NOT SET IN FORM";
}
//name	email	year	coding_experience	coding_level
$conn = new mysqli($servername, $username, $password, $dbname);
$sql_insert = "INSERT INTO `user_data` (`name`,`email`,`year`,`coding_experience`, `coding_level`) VALUES ('$name', '$email', '$year_level','$coding_experience','$coding_level')";
$duplicate=mysqli_query($conn,"select * from $db_table where name='$name' or email='$email'");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_num_rows($duplicate)>0){
    //header("Location: ../HTML/registered.php?message=Member or Email already registered.");
    echo "Member or Email already registered. Please try a different name and email, if not talk to a member of the coding club";
}
if (mysqli_query($conn, $sql_insert)) {
    echo "data inserted into DB<br>"; 
} 
else {
    //echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
#print(implode(" ",$coding_experience));

function get_user_status($msg){
    return $msg;
}
?>


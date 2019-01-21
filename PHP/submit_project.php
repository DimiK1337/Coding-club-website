<?php
//Database Related
$servername = "127.0.0.1";
//$server = "ptvp.myd.infomaniak.com";
//$user = 'ptvp_dmitriy';
//$pass = 'nations2018';
$dbname = "coding_club";
$db_table = "project_submissions";
$user_data_db_table = "user_data";
$username = "root";
$password = "";

if(isset($_POST["project_name"])){
    $project_name = $_POST["project_name"];
}
if(isset($_POST["user_email"])){
    // Checks to see if the user has registered into the club, before uploading
    $user_email = $_POST["user_email"]; 
}
if(isset($_POST["description"])){
    $description = $_POST["description"];
}
if(isset($_POST["media_links"])){
    $media_links = $_POST["media_links"];
}
else{
    $media_links = null;
}
//project-name	user-email	media-links	description
$conn = new mysqli($servername, $username, $password, $dbname);
$sql_insert = "INSERT INTO $db_table (`project_name`,`user_email`,`media_links`,`description`) VALUES ('$project_name','$user_email','$media_links','$description')";
$email_verification = mysqli_query($conn,"select * from $user_data_db_table where email='$user_email'");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_num_rows($email_verification) < 1){
    //header("Location: ../HTML/registered.php?message=Member or Email already registered.");
    //die("ERROR: email not registered");
    echo "ERROR: email not registered";
}
else{
    if (mysqli_query($conn, $sql_insert)) {
        echo "data inserted into DB<br>"; 
    }
}

mysqli_close($conn); 
?>
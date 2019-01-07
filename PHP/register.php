<?php
//Database Related
$server = "127.0.0.1";
//$server = "ptvp.myd.infomaniak.com";
//$user = 'ptvp_dmitriy';
//$pass = 'nations2018';
$dataBase = "coding_club_registration";
$db_table = "user_data";

//Form variables
$name = $_POST["name_input"];
$email = $_POST["email_input"];
$year_level = $_POST["year_level_input"];
$coding_experience = $_POST["coding_experience"];
$coding_level = $_POST["coding_level"];



if( empty($_POST["name_input"]) ) { 
    echo "Checkbox was left unchecked."; 
}
else { 
    echo "Not empty";
}

function IsChecked($checkname,$value){
    if(!empty($_POST[$checkname])){
        foreach($_POST[$checkname] as $checkVal){
                if($checkVal == $value){
                    return true;
                }
            }
        }
        return false;
    }
?>


<?php
// //photo upload


// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["photo"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["photo"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["photo"]["size"] > 5000000000000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }

$donor_id = trim($_POST['id']);
$donor_name = trim($_POST['flname']);
$donor_blood = trim($_POST['blood']);
$donor_location = trim($_POST['location']);
$donor_gender = trim($_POST['gender']);
$donor_email = trim($_POST['email']);
$donor_phone = trim($_POST['phone']);
$donor_pass = trim($_POST['pass']);

include "db_connect.php";
include "db_select.php";

$donor_update = "UPDATE $dbname"."_donor_list
                    SET donor_name = '$donor_name',
                    donor_blood = '$donor_blood',
                    donor_location = '$donor_location',
                    donor_gender = '$donor_gender',
                    donor_email = '$donor_email',
                    donor_phone = '$donor_phone',
                    donor_pass = '$donor_pass'
                    WHERE donor_id = '$donor_id'
                    ";

mysqli_query($connect,$donor_update);

if (isset($_POST["admin-update-form"])){
    header("Location: admin-panel.php?page=admin-update-form&submit=success&id=$donor_id");
    exit;
}

?>
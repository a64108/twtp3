<?php
$target_path = "storage/";
$dir = $target_path;
$target_path = $target_path . basename($_FILES["uploadedfile"]["name"]);
$uploadOk = 1;


// Check if file already exists
if (file_exists($target_path)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";


// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], $target_path)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["uploadedfile"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
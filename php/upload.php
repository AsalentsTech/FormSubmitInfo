<?php

$usernamebro = $_SESSION['username'];

if(isset($_POST['uploadimagenowbro']))
{
$response = "";
$target_dir = "../Non-Profit-Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    $errors['filetype'] = "Sorry, file already exists.";
}else {

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "pdf" ) {
    $errors['filetype'] = "Sorry, only JPG & PDF files are allowed.";
}
    
    date_default_timezone_set('America/New_York');
    $date = date('F d Y');
    $time = date('h:i:s a');
    $filenameisbro = $_FILES["fileToUpload"]["name"];
    
    $sql226 = "SELECT * FROM `nonprofitformationform` WHERE question2answer1 = '$pulledfirstandlast'";
		$result226 = $conx->query($sql226);
        while($row226 = $result226->fetch_assoc()) {
      
		$checkifusersubmittednonprofitform = $row226['question2answer1'];
        }
    
    if($checkifusersubmittednonprofitform !== $pulledfirstandlast){
            $errors['filetype'] = "Error you have not yet submitted a Non-Profit Formation Form, you need to go <a href='../Non-Profit/'>here</a> and submit a form before uploading files.";
        }else {
            if(count($errors) === 0){
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $sanitized_filename = mysqli_real_escape_string($conx, $_FILES["fileToUpload"]["name"]);
            $sql = mysqli_query($conx, "UPDATE `nonprofitformationform` SET fileuploadedbyuser = '$filenameisbro' WHERE question2answer1 = '$pulledfirstandlast'") or die(mysqli_error($conx));
            $sql2 = mysqli_query($conx, "UPDATE `uploadedfilesbyuser` SET username = '$man', filename = '$filenameisbro' WHERE firstandlastname = '$pulledfirstandlast'") or die(mysqli_error($conx));
    $response = "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                }
            } 
        }
    }
}
    
?>
<?php 
$up=1;
$res=$err='';
$target_dir="uploads/";
$target_file=$target_dir . basename($_FILES["file"]["name"]);
$fileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST['submit'])){
  if(empty($_FILES["file"])){
    $err='Field is Empty';
  }
  else{
    $chk=getimagesize($_FILES['file']['tmp_name']);
    if($check !== false) {
      
      $up = 1;
    } else {
      
      $up = 0;
    }
  }
 } 

  
  if($_FILES['file']['size']>2000000){
    $err='File too Large';
    $up=0;
  }
  else{
    $up=1;
  }
  if($fileType!='png'){
    $err='Only PNG';
    $up=0;
  }
  else{
    $up=1;
  }

  if($up==0){
    $res='Sorry Cannot Upload';
  }
  else{
       if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
         $res='Uploaded';
       }
       else{
         $res='Sorry Some error Occured';
       }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method='POST' enctype="multipart/form-data">
   <input type='file' name='file' id="file"><span class='error'>*</span>

   <input type='submit' value='submit' name='submit'>

</form>
  <!-- <h1><?php echo $res; ?></h1> -->
</body>
</html>
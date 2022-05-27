<?php 
session_start();
if (!isset($_SESSION['Images']))
{
$_SESSION['Images']=array();
}
$up=1;
$res=$err='';
 $target_dir="uploads/";
 $target_file=$target_dir . basename($_FILES["file"]["name"]);
$fileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 if(isset($_POST)){
  
  if(empty($_FILES["file"])){
    $err='Field is Empty';
  }
  else{
    $chk=getimagesize($_FILES['file']['tmp_name']);
    if($chk !== false) {

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
    echo 'Sorry Cannot Upload';
  }
  else{
       if( move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){

        array_push($_SESSION['Images'],$_FILES['file']['name']);


       }
       else{
         echo 'Sorry Some error Occured';
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
  <form action='index.php' method='POST' enctype="multipart/form-data">
   <br><input type='file' name='file' id="file"><span class='error'>*<?php echo $err;?></span><br><br>

    <input type='submit' value='submit' name='submit'>
    <hr>

   <a href='test.php'>push to destroy</a><br>

</form>
   <?php foreach($_SESSION['Images'] as $image){
        echo "<img src='uploads/".$image."' width='33vw'; height='33vh';>";}; ?>
</body>
</html>
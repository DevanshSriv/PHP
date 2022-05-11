<?php 
$err=$res='';
$cal=$in=0;
if(isset($_POST)){
  if(empty($_POST['input'])){
    $err='Cannot Be Empty';
  }
  else{
    $in=$_POST['input'];
    if(preg_match('/^[A-Za-z]+$/',$in)){
      $err='Only Numbers';
    }
    else{
      $c=$_POST['choice'];
      if($c=='mins'){
        $cal=$in*60;
        $res=$in.'Hr = '.$cal.'mins';
      }
      else{
        $cal=$in*3600;
        $res=$in.'Hr = '.$cal.'sec';
      }
    } 
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
  <style>.error{color:red;}</style>
</head>
<body>
  <div style='display:flex;flex-direction:coloumn;justify-content:center;'>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'method='POST'>
     <input type='text' placeholder='Enter Hours' name='input'><span class='error'>*<?php echo $err; ?></span><br><br>
     <input type='radio' name='choice' value='mins'>Hours to Min<br><br>
     <input type='radio' name='choice' value='sec'>Hours to Second<br>
     <br><br>
      <?php echo $res; ?><br><br>
      <input type='submit'  value='CONVERT'> 
  </form>
 
</div>

</body>
</html>
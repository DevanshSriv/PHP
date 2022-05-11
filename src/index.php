<?php
$len=$wid=$area=$perimeter=0;
$ubitErr2=$unitErr1='';
if(isset($_POST)){
   if(empty($_POST['length'])){
    $unitErr1='required';
   }
   if(empty($_POST['width'])){
     $unitErr2='required';
    }
  else{
    $len=test($_POST['length']);
    $wid=test($_POST['width']);
    if(!preg_match('/^[0-9]+$/',$num1)){
      $unitErr1='Invalid Unit';
    }
    elseif(!preg_match('/^[0-9]+$/',$num2)){
      $unitErr2='Invalid Unit';
    }
    
     $area= $len*$wid;
     $perimeter=2*($len+$wid);
    
   }
}

  
function test($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  .error{color:red;}
  </style>
</head>
<body>
  <div style='display:flex;flex-direction:coloumn;justify-content:center;margin:5%;padding:5%;'>
  <form method='POST' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> align ='center'>
    Length Of Rectangle: <input type='text' name='length'>mtr
    <br><br>
    Length Of Width: <input type='text' name='width'>mtr
    <br><br>
    <input type='submit' value='Calculate Area And Perimeter' style='padding:2%;background-color:grey;border-radius:5px'>
     
  </form>
  
  </div>
  <div style=' margin:5%;float:left;'>
<p>Area Of Rectangle: <?php echo $area." sq mtr"; ?></p>
<p>Perimeter Of Rectangle: <?php echo $perimeter.' mtr'; ?></p>
</div> 
</body>
</html>
<?php
$unit=$unitErr='';
$billToPay=0;
if(isset($_POST)){
   if(empty($_POST['Unit'])){
     $unitErr='Cannot Be Null';
   }
  else{
    $unit=test($_POST['Unit']);
    if(!preg_match('/^[0-9]+$/',$unit)){
      $unitErr='Invalid Unit';
    }
    else{
     $billToPay=Calc($unit); 
    }
   }
  
}

function Calc($b){
  $sum=0;
   if($b<=50){
     $sum=$b*3.50;
   }
   elseif($b<150){
     $sum=50*3.50+($b-50)*4;
   }
   elseif($b<200){
     $sum=50*3.50+100*4+($b-150)*5.20;
   }
   elseif($b>250){
    $sum=50*3.50+100*4+100*5.20+($b-200)*6.50;
   }
   return $sum;
}
  
function test($detail){
$un=trim($detail);
return $un;
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
<body >
  <form method='POST' action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>>
    <input type='text' placeholder='Units..' name='Unit'><span class='error'>*
      <?php  echo $unitErr; ?>
    </span>
    <br>
    <button type='submit' value='submit' style="margin-top:3%">SUBMIT</button>
    <br>
    <h2>YOUR BILL IS <?php echo $billToPay;?></h2>
  </form>
</body>
</html>
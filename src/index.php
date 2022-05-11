<?php
$res=$num1=$num2=0;
$ubitErr2=$unitErr1='';
if(isset($_POST)){
   if(empty($_POST['num1'])){
    $unitErr1='required';
   }
   if(empty($_POST['num2'])){
     $unitErr2='required';
    }
  else{
    $num1=test($_POST['num1']);
    $num2=test($_POST['num2']);
    if(!preg_match('/^[0-9]+$/',$num1)){
      $unitErr1='Invalid Unit';
    }
    elseif(!preg_match('/^[0-9]+$/',$num2)){
      $unitErr2='Invalid Unit';
    }
    else{
      $res= Calc($_POST['btn']);
      
    }
     
       
      
    
   }
  
}

function Calc($b){
  global $num1,$num2;
       switch($b){
         case '+':return ($num1+$num2);
                  break;
         case '-':return ($num1-$num2);
         case '*':return ($num1*$num2);
         case '/':return ($num1/$num2);
         default: return 00;
       }
  
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
    NUMBER1<input type='text' placeholder='Units..' name='num1'><span class='error'>*
      <?php  echo $unitErr1; ?>
    </span><br>
    NUMBER2<input type='text' placeholder='Units..' name='num2'><span class='error'>*
      <?php  echo $unitErr2; ?>
    </span><br>
    Result   <input type='text' placeholder='result..' value=<?php echo $res;?>>
    <br>
    <button type='submit' value='+' style="margin-top:3%" name='btn'>+</button>
    <button type='submit' value='-' style="margin-top:3%" name='btn'>-</button>
    <button type='submit' value='/' style="margin-top:3%" name='btn'>/</button>
    <button type='submit' value='*' style="margin-top:3%" name='btn'>*</button>
    <br>
     
  </form>
</body>
</html>
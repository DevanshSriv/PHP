<?php
function temperature($list){
  $s=0;
  $l=count($list);
  $s=array_sum($list);
 $avg=$s/$l;
  
  echo "Average Temperature is: ".$avg;

  asort($list);
  echo "<br>List of seven lowest temperatures: ";
  for($i=0;$i<7;$i++){
    echo " ".$list[$i];
  }

  rsort($list);
  echo "<br>List of seven highest temperatures: ";
  for($i=0;$i<7;$i++){
    echo " ".$list[$i];
  }
   
}
$arr= array(1,2,3,4,5,6,7,8,9,10,11,55,12,78,32);
temperature($arr);


?>
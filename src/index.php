<?php
function temperature($list){
  $s=0;
  $l=count($list);
  $s=array_sum($list);
 $avg=$s/$l;

  echo "Average Temperature is: ".$avg;
  $un=array_unique($list);
  
  sort($un);
  echo "<br>List of seven lowest temperatures: ";
  for($i=0;$i<7;$i++){
    echo " ".$un[$i];
  }

  rsort($un);
  echo "<br>List of seven highest temperatures: ";
  for($i=0;$i<7;$i++){
    echo " ".$un[$i];
  }

}
$arr= array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
temperature($arr);


?>
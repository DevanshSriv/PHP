<?php
function insert($pos,$val){
   static $arr=array(1,2,3,4,5,6);

   echo "Original Array:"."<br>";
   foreach($arr as $x){
       echo $x." ";
   }

   array_splice($arr,$pos-1,0,$val);
   echo "<br>After inserting:"."<br>";
   foreach($arr as $x){
       echo $x." ";
   }
   
}
insert(3,44);


?>
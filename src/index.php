<?php
function insert($pos,$val){
   static $arr=array(1,2,3,4,5,6);

   array_splice($arr,$pos,0,$val);
   var_dump($arr);
   
}
insert(3,44);
echo "<br>";
insert(1,77);

?>
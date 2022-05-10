<?php
$arr=array(1,2,3,4,5,6,7,8);
$rem=5;
$result= array_filter($arr,function($value) use($rem){
return $value!=$rem;
});
foreach($result as $r){
    echo " ".$r;
}
?>
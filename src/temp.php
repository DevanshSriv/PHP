<?php
function filterr($val1,$val2){
foreach($val2 as $x){
    if(array_key_exists($x,$val1)){
        unset($val1[$x]);

    }
    echo "<br>";
}
foreach($val1 as $key => $val){
    echo $key." => ".$val."<br>";
    
}
}
$array =array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
 $array2 =array('c2', 'c4');
 filterr($array,$array2);
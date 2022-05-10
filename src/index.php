<?php
function filterr($val1,$val2){
foreach($val2 as $x){
    if(array_key_exists($x,$val1)){
        echo $x."=>".$val1[$x];

    }
    echo "<br>";
}
 
}
$array =array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
 $array2 =array('c2', 'c4');
 filterr($array,$array2);
?>
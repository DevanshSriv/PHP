<?php
function fact($a){
    $f=1;
    for($i=1;$i<=$a;$i++){
        $f*=$i;
    }
    echo $f;
}
fact(5);


?>
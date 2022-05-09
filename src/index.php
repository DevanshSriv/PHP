<?php
function grades($a){
    if($a>60){
        echo "First Division";
    }
    else if($a>=45 && $a<=59){
        echo "Second Division";
    }
    else if($a>=33 && $a<=44){
        echo "Third Division";
    }
    else if($a<33){
        echo "Fail";
    }
}
grades(28);


?>
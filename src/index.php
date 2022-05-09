<?php
echo "<table border=1px solid black>";
for($row=1;$row<=8;$row++){
    echo "<tr>";
    for($col=1;$col<=8;$col++){
        if(($row+$col)%2==0){
            echo "<td width=30px height=30px bgcolor=white></td>";
        }
        else{
            echo "<td width=30px height=30px bgcolor=black></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

?>
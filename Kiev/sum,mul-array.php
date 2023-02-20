<?php
$mat= array(array(5,2,3),
            array(4,5,6),
            array(7,8,9));
$kd=0;
$mult=0;
$for=1;
for($i=0;$i<count($mat);$i++){

    for($k=0;$k<count($mat);$k++){
        echo $mat[$i][$k] ;echo "   " ;
        $sum= $mat[$i][$k];
        $kd=$kd+$sum;
    }echo "<br><br>";
}echo "<br><br>";

for($i=0;$i<count($mat);$i++){
    $for=$for * $mat[$i][$i];
}
echo "suma $kd";
echo"<br>";
echo "multi $for";
?>
<?php
$a="conservadora";
echo "<dr><br>$a";
$b="conversadora";
echo "<dr><br>$b";
echo "<dr><br>";
$ar1=str_split($a);
$ar2=str_split($b);
sort($ar1);
sort($ar2);

if($ar1 == $ar2){
    echo"es anagrama";
}else{
    echo"no es anagrama";
}
echo "<dr><br>";
//echo $k;

?>
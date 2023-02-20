<?php
$a=random_int(0,15);
echo " $a<br>";
$num=random_int(0,10);
if($a==$num){
    echo"los numeros son iguales<br><br>";
}
/*echo " VARIABLE A-----------------------VARIABLE B<br>";
while($a!=$num){
    $a=random_int(0,10);
    
    echo "--------$a    ------------------------------------";
    $num=random_int(0,10);
    echo " $num <br><br>";
}
/*for($i=0;$i<=10;$i++){
    $num=random_int(0,10);
    echo "$num";
    if($)
}*/
echo "<br><br><br>";
$intentos=array(4,7,9,12,13);
for($i=0;$i<count($intentos);$i++){
    echo "$intentos[$i]";
    if($intentos[$i]==$a){
        echo"--atinaste<br><br>";
    }else{
        echo "--Fallaste <br><br>";
    }
}
echo "<br><br>";
?>
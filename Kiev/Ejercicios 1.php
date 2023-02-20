<?php
/*$a=1;
$b=2;
$c=$a * $b;
echo "resul $c <br>";
echo"\n";
?>
<?php
$va=100;
$iva=25;
$c=$va * ($iva/100);
$to=$va + $c;
echo "valor es $va";
echo "iva es es $iva";
echo "total es es $to <br>";
?>
<?php
$oxo= array(array('x',' ','o'),
            array('o',' o','x'),
            array('x',' o',''));

        echo $oxo[1][2];
?>
<?php
$array=array(1,2,3,4,5);
for($i=0; $i<count($array);$i++){
    echo $array[$i] . "<br>";
}*/

echo "EJercicio 1 <br> Hola Mundo";
?>
<br>
<?php
echo "Ejercicio 3 <br>";
$a=1;
$b=2;
$c=$a + $b;
echo "resultado  $c <br>";
?>
<?php
echo "Ejercicio 4<br>";
$a=4;
for($i=1;$i<=10;$i++){
    $d=$a * $i;
    echo "$d <br>";
}
?>
<?php
echo "Ejercicio 5 <br>";
$a=19;
echo"Radio es  $a";
$area=($a*$a)*(3.14);
echo"area es =$area";
?>
<?php
echo "<br>Ejercicio 6 <br>";
$a=5;
echo"el factorial de $a es : <br> ";
$b=1;
for($i=1;$i<=$a;$i++){
    $b=$b*$i;
    
}
echo"$b";
echo"<br>"
?>
<?php
echo "Ejercicio 7 <br>";
$array=array('And','Kevin','Kenner','Zac');
for($i=0; $i<count($array);$i++){
    echo $array[$i] . "<br>";
}
?>








<?php
echo "<br><br>Ejercicio 8 <br><br>";
$mat= array(array(5,2,3),
            array(4,5,6),
            array(7,8,9));
$kd=0;
$mult=0;
$for=1;
for($i=0;$i<count($mat);$i++){
    //echo $mat[$i] ;
    for($k=0;$k<count($mat);$k++){
        $sum= $mat[$i][$k];
        $kd=$kd+$sum;
    }
}

for($i=0;$i<count($mat);$i++){
    $for=$for * $mat[$i][$i];
}
echo $kd;
echo"<br>";
echo $for;
?>

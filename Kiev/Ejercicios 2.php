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
<?php
$sph = 5000;
echo "salario x hora :   $sph<br>";
$dia = $sph*8;
echo"salario x dia :   $dia<br>";
$semanal = $dia*7;
echo"salario x semana :  $semanal<br>";
$mensual= $semanal*4;
echo"salario mensual :  $mensual<br>";
$anual = $mensual*12;
echo"salario anual : $anual<br><br><br><br>";
?>

<?php
$c=20;
echo"grado celcius $c";
$f=$c*1.8+32;
echo"---grado celcius a farenheits :   $f<br><br><br>";
$fh=20;
echo"grados fare $fh<br><br>";
$ce=($fh-32)/1.8;

echo" grados farengeit : $fh - convertidos a celcius = $ce<br><br><br>";
?>

<?php 
echo"<br><br><br>IMC: ";
$al=1.82;
$peso=78;
$imc=$peso/($al**2);
echo "$imc";

?>

<?php
echo"<br><br><br><br>Hipoteca<br><br><br>";
$a=2000000;
$b=8/12;
$c=-(20*12);
$k=($a*$b)/(100*(1-(1+$b/100)**$c));
$l=round($k);
echo "$l"
?>
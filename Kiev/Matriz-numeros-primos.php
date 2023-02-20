<?php
function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
$matr=array(array(0,0,0),
            array(0,0,0),
            array(0,0,0));
for($i=0;$i<count($matr);$i++){
    for($k=0;$k<count($matr);$k++){
        $matr[$i][$k]=random_int(0,9);   
        echo "-";
        echo $matr[$i][$k];
    }
    echo "<br><br>";

}
$sum=0;
$arr=array();
for($i=0;$i<count($matr);$i++){
    for($k=0;$k<count($matr);$k++){
        if(is_prime($matr[$i][$k])){
            $sum=$sum+$matr[$i][$k];
            $cont=var_dump($matr[$i][$k]);
            
            $arr[]=($i."-".$k);
            
        }
        
    }
    echo "<br><br>";

}

echo $sum;
echo "<br><br>";
echo "<br><br>";
for($i=0;$i<count($arr);$i++){
    echo $arr[$i];
    echo",";
}
//var_dump($arr);
/*
$suma=0;
$matr[$mitad][$mitad1]="Ó";
for($i=0;$i<32;$i++){
    for($k=0;$k<170;$k++){
        echo "-";
        echo $matr[$i][$k];
        if($matr[$i][$k]==9){
            $suma++;
        }
    }
    echo"<br><br>";
}


echo"<br>";
var_dump($suma);
echo"<br>";
echo"<br>";

//echo "$ran";*/
?>

<?php
/*
echo"<br>";
$a=array(1,2,array("a","b","c"));
var_dump($a);

//echo "$ran";
*/
?>
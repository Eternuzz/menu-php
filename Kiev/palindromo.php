<?php
$a="reconocer";
echo $a;
echo "<dr><br>";
$b=strrev($a);
if($a==$b){
    echo "es palindromo";
}else{
    echo"no es palindromo";
}
echo "<dr><br>";
$x="reconocerte";
echo $x;
echo "<dr><br>";
$c=strrev($x);
if($x==$c){
    echo "es palindromo";
}else{
    echo"no es palindromo";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            height: 100vh;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: black;
            opacity: 0.8;
            cursor: pointer;
            transition: all 2s ease;
        }

        #menu li:hover {
            background-color: blue;
        }

        #menu {
            display: flex;
            flex-direction: column;
            flex: 0.25;
            background-color: gray;
        }

        #menu h2 {
            text-align: center;
            font-size: 24px;
        }

        #menu>.par1 {
            height: 22rem;
            padding: 0rem 1rem;
        }

        #menu>.par2 {
            height: 11rem;
            padding: 1rem 1rem;
        }

        #menu li {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            height: 1.7rem;
            margin-bottom: 0.8rem;
            list-style: none;

        }

        li:hover:hover {
            background-color: green;
            opacity: 0.8;
            cursor: pointer;
            transition: all 2s ease;
        }

        #mostrar {
            border: 1px solid white;
            flex: 0.75;
            overflow: hidden;
            flex-direction: column;
        }

        .deco {
            display: flex;
            padding: 1rem 1rem;
            background-color: rgba(128, 128, 128, 0.425);
            width: 40rem;
            height: 35rem;
        }

        #mostrar>div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;

        }
    </style>
    <section id="menu">
        <h2>Primer menu</h2>
        <ol class="par1">
            <li><a href="#1">Menor y mayor</a></li>
            <li><a href="#2">Ecuaciones</a></li>
            <li><a href="#3">Calculadora</a></li>
            <li><a href="#4">menor-intermedio-mayor</a></li>
            <li><a href="#5">Digitos naturales</a></li>
            <li><a href="#6">Mayor/Menor de 4 digitos</a></li>
            <li><a href="#7">Conversion de Km,Dc,D,Cm</a></li>
            <li><a href="#8">Tabla de multiplicar</a></li>
            <li><a href="#9">De binarios a Enteros</a></li>
        </ol>
        <h2>Segundo menu</h2>
        <ol class="par2">
            <li><a href="#2.1">Grados celcius y Kilometros</a></li>
            <li><a href="#2.2">Encontrar variable</a></li>
            <li><a href="#2.3">Suma de 6 numeros</a></li>
            <li><a href="#2.4">Calcular factoriales</a></li>
            <li><a href="#2.5">indice de Barach</a></li>
        </ol>
    </section>
    <section id="mostrar">

        <div id="1">
            <article class="deco">
                <?php
                $num1 = 55;
                $num2 = 25;

                if ($num1 > $num2) {
                    echo "El primero es el numero mayor con: $num1<br> 
            El segundo es el numero mayor con: $num2";
                } else {
                    echo "El segundo es el numero mayor con: $num2<br>
            El primero es el numero mayor con: $num1";
                }
                if ($num1 == $num2) {
                    echo "Ambos numeros son iguales";
                }
                ?>
            </article>
        </div>
        <div id="2">
            <article class="deco">
                <?php
                echo "BIENVENIDO<br>";
                $num1 = 15;
                $num2 = 12;
                $num3 = 78;

                echo "Ecuacion Numero 1: y=m(x)+b";
                //Ejercicio 1
                $resultado = $num1 * $num2 + $num3;

                echo "<br>El resultado de la ecuacion y=m(x)+b es: $resultado";
                //Ejercicio 2
                echo "<br><br>Ecuacion Numero 2: v=e*t <br>";
                //Forma 1
                $var1 = $num1 * $num2;
                echo "Variable E=V * T= $var1<br>";
                //Forma 2
                $var2 = $num1 / $num2;
                echo "Variable T=E / V= $var2<br>";
                //Forma 3
                $var3 = $num1 / $num2;
                echo "Variable V=E / T= $var3<br>";

                //EJERCICIO 3
                echo "<br><br>Ecuacion Numero 3: v=i*r <br>";
                $vor1 = $num1 / $num2;
                echo "Variable J=V/R: $vor1<br>";
                echo "Variable R=V*J: $vor1<br>";

                $vor2 = $num1 * $num2;
                echo "Variable V=J*R: $vor2";

                ?>
            </article>
        </div>

        <!-- Ejercicio numero 3 -->
        <div id="3">
            <article class="deco">
                <?php
                $i = 32;
                $k = 28;

                //Suma 
                $suma = $i + $k;
                echo "La suma de sus variables es: $suma<br>";
                //Resta
                $resta = $i - $k;
                echo "La resta de sus variables es: $resta<br>";
                //Multiplicación
                $multi = $i * $k;
                echo "La multiplicación de sus variables es: $multi<br>";
                //Division 
                $divi = $i / $k;
                echo "La división de sus variables es: $divi<br>";
                //Modulo
                $modulo = $i % $k;
                echo "El modulo de sus variables es: $modulo<br>";
                ?>
            </article>
        </div>
        <!-- Ejercicio numero 4 -->
        <div id="4">
            <article class="deco">
                <?php
                $a = 24;
                $b = 0;
                $c = 24;

                if ($a == $b and $b == $c) {
                    echo "Todos son exactamente iguales";
                }
                //Iguales
                if ($a == $b and $c > $a) {
                    echo "Los dos primeros valores estan repetidos<br>";
                } else if ($a == $b and $c < $a) {
                    echo "Los dos primeros valores estan repetidos<br>";
                }
                if ($b == $c and $c < $a) {
                    echo "El segundo y tercer valor estan repetidos<br>";
                } else if ($b == $c and $c > $a) {
                    echo "El segundo y tercer valor estan repetidos<br>";
                }
                if ($a == $c and $c < $b) {
                    echo "El primer y tercer valor estan repetidos<br>";
                } else if ($a == $c and $c > $b) {
                    echo "El primer y tercer valor estan repetidos<br>";
                }


                //Variables mayores
                if ($a > $b && $a > $c) {
                    echo "El mayor es: $a<br>";
                } else if ($b > $a and $b > $c) {
                    echo "El mayor es: $b<br>";
                } else if ($c > $a and $c > $b) {
                    echo "El mayor es: $c<br>";
                }

                //Variables intermedias
                if ($a < $b and $b < $c) {
                    echo "La variable intermedia es: $b<br>";
                } else if ($a > $b and $b > $c) {
                    echo "La variable intermedia es: $b<br>";
                } else if ($a < $b and $b > $c) {
                    echo "La variable intermedia es: $c<br>";
                } else if ($a > $b && $b < $c && $c > $a) {
                    echo "La variable intermedia es: $a<br>";
                } else if ($a > $b and $b < $c) {
                    echo "La variable intermedia es: $c<br>";
                }

                //Variables menores
                if ($a < $b && $a < $c) {
                    echo "El menor es: $a<br>";
                } else if ($b < $a and $b < $c) {
                    echo "El menor es: $b<br>";
                } else if ($c < $a and $c < $b) {
                    echo "El menor es: $c<br>";
                }
                ?>
            </article>
        </div>

        <!-- Ejercicio numero 5 -->
        <div id="5">
            <article class="deco">
                <?php

                $v = 2000;

                if ($v >= 0 and $v <= 9) {
                    echo "Este numero solo tiene 1 digito ingresados<br>";
                } else if ($v >= 10 and $v <= 99) {
                    echo "Este numero tiene 2 digitos ingresados<br>";
                } else if ($v >= 100 and $v <= 999) {
                    echo "Este numero tiene 3 digitos ingresados<br>";
                } else if ($v >= 1000 and $v <= 9999) {
                    echo "Este numero tiene 4 digitos ingresados<br>";
                } else if ($v >= 10000 and $v <= 99999) {
                    echo "Este numero tiene 5 digitos ingresados<br>";
                } else if ($v >= 100000 and $v <= 999999) {
                    echo "Este numero tiene 6 digitos ingresados<br>";
                } else if ($v >= 1000000) {
                    echo "Supero el limite<br>";
                }
                ?>
            </article>
        </div>

        <!-- Ejercicio numero 6 -->
        <div id="6">
            <article class="deco">
                <?php
                $a = 9;
                $b = 9;
                $c = 9;
                $d = 5;


                //Comparcion menores
                if ($a <= $b and $a <= $c and $a <= $d) {
                    echo "El numero menor es: $a<br>";
                } else if ($b <= $a and $b <= $c and $b <= $d) {
                    echo "El numero menor es: $b<br>";
                } else if ($c <= $a and $c <= $b and $c <= $d) {
                    echo "El numero menor es: $c<br>";
                } else if ($d <= $a and $d <= $b and $d <= $c) {
                    echo "El numero menor es: $d<br>";
                }


                //Numeros mayores
                if ($a >= $b and $a >= $c and $a >= $d) {
                    echo "El numero mayor es: $a<br>";
                } else if ($b >= $a and $b >= $c and $b >= $d) {
                    echo "El numero mayor es: $b<br>";
                } else if ($c >= $a and $c >= $b and $c >= $d) {
                    echo "El numero mayor es: $c<br>";
                } else if ($d >= $a and $d >= $b and $d >= $c) {
                    echo "El numero mayor es: $d<br>";
                }




                if ($a == $b and $c == $d) {
                    echo "En esta forma el primero y el segundo son iguales junto \n";
                    echo "Con el tercero y el cuarto que tambien son iguales  \n";

                }

                if ($a == $d and $b == $c) {
                    echo "En esta forma el primero y el cuarto son iguales junto";
                    echo "con el segundo y el tercero que tambien son iguales";

                }
                //PRUEBAS MAYORES
                if ($a == $b and $b == $c and $d > $a) {
                    echo "El unico diferente es: ";
                    echo "Las posiciones primera, segunda y tercera son iguales";

                }
                if ($a == $c and $b > $a and $c == $d) {
                    echo "El unico diferente es: ";
                    echo "Las posiciones primera, tercera y cuarta son iguales";

                }
                if ($a == $b and $c > $a and $d == $b) {
                    echo "El unico diferente es:    ";
                    echo "Las posiciones primera, segunda y cuarta son iguales";

                }
                if ($a > $b and $c == $b and $d == $c) {
                    echo "El unico diferente es:    ";
                    echo "Las posiciones segunda, tercera y cuarta son iguales";

                }

                //PRUEBAS MENORES
                if ($a == $b and $b == $c and $d < $a) {
                    echo "El unico diferente es:    ";
                    echo "Las posiciones primera, segunda y tercera son iguales";
                }

                if ($a == $c and $b < $a and $c == $d) {
                    echo "El unico diferente es:    ";
                    echo "Las posiciones primera, tercera y cuarta son iguales";

                }
                if ($a == $b and $c < $a and $d == $b) {
                    echo "El unico diferente es:    ";
                    echo "Las posiciones primera, segunda y cuarta son iguales";
                }
                if ($a < $b and $c == $b and $d == $c) {
                    echo "El unico diferente es:    ";
                    echo "Las posiciones segunda, tercera y cuarta son iguales";

                }

                //IGUALES
                if ($a == $b && $b == $c && $c == $d) {
                    echo "Todos son exactamente iguales :)";
                }

                ?>
            </article>
        </div>

        <!-- Ejercicio numero 7 -->
        <div id="7">
            <article class="deco">
                <?php

                $var = 27000;

                $kilo = $var / 1000;
                $deca = $var / 10;
                $deci = $var * 10;
                $centi = $var * 100;
                echo "Convertir de metros a Kilometros<br>" . "El resultado es Kilometros es: $kilo<br><br>";
                //Decametros
                echo "Convertir de metros a Decametros<br>" . "El resultado es Decametros es: $deca<br><br>";
                //Decimetros
                echo "Convertir de metros a Decimetros<br>" . "El resultado es Decimetros es: $deci<br><br>";
                //Centimetros
                echo "Convertir de metros a Centimetros<br>" . "El resultado es Centimetros es: $centi<br><br>";
                ?>
            </article>
        </div>

        <!-- Ejercicio numero 8 -->
        <div id="8">
            <article class="deco">
                <?php

                for ($d = 3; $d <= 30; $d += 3) {
                    echo $d . "<br>";
                }
                ?>
            </article>
        </div>

        <!-- Ejercicio numero 9 -->
        <div id="9">
            <article class="deco">
                <?php
                $deci = 214896;
                $bin = decbin($deci);
                $binario = 1010010000000;
                $decimal = bindec($binario);
                echo "El decimal $deci a binario es: $bin<br>";
                echo "El binario $binario a decimal es: $decimal<br><br>";
                ?>
            </article>
        </div>

        <!-- PARTE MENU 2 -->
        <div id="2.1">
            <article class="deco">
                <?php
                //Ejercicio 2
                $cel = 6;
                $multi = 1.8;
                $suma = 32;
                $total = $cel * $multi + $suma;
                echo "celsius a Fahrenheit es $total <br>  ";
                $fare = 6;
                $resta = 32;
                $multi2 = 0.555;
                $cel2 = ($fare - $resta) * 0.5556;
                echo "Fahrenheit a Celsius es $cel2<br>";

                //Kilometos a millas
                echo "Km a millas" . "<br>";
                $k = 20;
                $M = $k * 0.62137;
                echo "$M son en Millas";
                ?>
            </article>
        </div>

        <!-- Ejercicio numero 2 -->
        <div id="2.2">
            <article class="deco">
                <?php
                echo "y=(5x-7)^2/(2x-4)" . "<br><br>";

                $x = 5;
                if ($x > 2) {
                    $y = ((((5 * $x) - 7) ** 2) / ((2 * $x) - 4));
                    echo "El resultado de y es: $y";
                } else {
                    echo "Este resultado es infinitivo o no se haya el valor";
                }
                ?>
            </article>
        </div>

        <!-- Ejercicio numero 3 -->
        <div id="2.3">
            <article class="deco">
                <?php

                $n1 = 3;
                $n2 = 2;
                $n3 = 5;
                $n4 = 4;
                $n5 = 6;
                $n6 = 6;

                $s1 = $n1 + $n2;
                $s2 = $n3 + $n4;
                $s3 = $n5 + $n6;

                echo "La primera suma es: $s1<br>" .
                    "La segunda suma es: $s2<br>" .
                    "La tercera suma es: $s3<br>";



                //MENORES 
                if ($s1 < $s2 and $s1 < $s3) {
                    echo "EL menor es: $s1<br>"; //Posible opcion en pantalla para menores
                } else if ($s2 < $s1 and $s2 < $s3) {
                    echo "EL menor es:  $s2<br>"; //Posible opcion en pantalla para menores
                } else if ($s3 < $s1 and $s3 < $s2) {
                    echo "EL menor es: << $s3<br>"; //Posible opcion en pantalla para menores
                }

                //VARIABLES INTERMEDIAS 
                if ($s1 > $s2 and $s2 < $s3 and $s3 > $s1) {
                    echo "El intermedio es:   $s1<br>"; //Posible opcion en pantalla para digitos intermedios
                }
                if ($s1 > $s2 and $s2 < $s3 and $s3 < $s1) {
                    echo "El intermedio es: $s3<br>"; //Posible opcion en pantalla para digitos intermedios
                }
                if ($s1 < $s2 and $s2 > $s3 and $s3 < $s1) {
                    echo "El intermedio es: $s1<br>"; //Posible opcion en pantalla para digitos intermedios
                }
                if ($s1 < $s2 and $s2 < $s3 and $s3 > $s1) {
                    echo "El intermedio es:  $s2<br>"; //Posible opcion en pantalla para digitos intermedios
                }
                if ($s1 > $s2 and $s2 > $s3 and $s3 < $s1) {
                    echo "El intermedio es: $s2<br>"; //Posible opcion en pantalla para digitos intermedios
                }
                if ($s1 > $s2 and $s2 < $s3 and $s3 > $s1) {
                    echo "El intermedio es: $s1<br>"; //Posible opcion en pantalla para digitos intermedios
                }
                if ($s1 < $s2 and $s2 > $s3 and $s3 > $s1) {
                    echo "El intermedio es:  $s3<br>"; //Posible opcion en pantalla para digitos intermedios
                }

                //OPCIONES MAYORES
                if ($s1 > $s2 and $s1 > $s3) {
                    echo "EL mayor es: $s1<br>"; //Posible opcion en pantalla para mayores
                } else if ($s2 > $s1 and $s2 > $s3) {
                    echo "EL mayor es: $s2<br>"; //Posible opcion en pantalla para mayores
                } else if ($s3 > $s1 and $s3 > $s2) {
                    echo "EL mayor es: $s3<br>"; //Posible opcion en pantalla para mayores
                }

                if ($s1 == $s2 and $$s2 == $s3) {
                    echo "TODOS SON EXACTAMENTE IGUALES :VV"; //Posible opcion en pantalla
                }
                //IGUALES MENORES
                if ($s1 == $s2 and $s3 < $s1) {
                    echo "El primer y el segundo  RESULTADOson iguales y tambien son mayores<br>"; //Posible opcion en pantalla
                    echo "No hay intermedios<br>";
                }
                if ($s1 == $s3 and $s2 < $s1) {
                    echo "El primer y el tercer RESULTADO son iguales y tambien son mayores<br>"; //Posible opcion en pantalla
                    echo "No hay intermedios<br>";
                }
                if ($s1 < $s2 and $s2 == $s3) {
                    echo "El Segundo y el tercer RESULTADO son iguales y tambien son mayores<br>"; //Posible opcion en pantalla
                    echo "No hay intermedios<br>";
                }

                //IGUALES MAYORES
                if ($s1 == $s2 and $s3 > $s1) {
                    echo "El primer y el segundo RESULTADO son iguales y son menores<br>"; //Posible opcion en pantalla
                    echo "No hay intermedios<br>";
                }
                if ($s1 == $s3 and $s2 > $s1) {
                    echo "El primer y el tercer RESULTADO  son iguales y son menores<br>"; //Posible opcion en pantalla
                    echo "No hay intermedios<br>";

                }
                if ($s1 > $s2 and $s2 == $s3) {
                    echo "El Segundo y el tercer RESULTADO son iguales y son menores<br>"; //Posible opcion en pantalla
                    echo "No hay intermedios<br>";

                }

                ?>
            </article>
        </div>

        <!-- Ejercicio numero 4 -->
        <div id="2.4">
            <article class="deco">
                <?php
                //Ejercicio 5
                $fact = 2;
                for ($i = 1; $i <= 5; $i++) {
                    $fact = $fact * $i;
                }
                echo "los factoriales: $fact <br>";
                ?>
            </article>
        </div>

        <!-- Ejercicio numero 5 -->
        <div id="2.5">
            <article class="deco">
                <?php
                $fc = 13;
                $ts = 54;
                $td = 160;

                $ib = $fc * ($ts + $td) / 100;


                if ($ib < 110) {
                    echo "Su frecuencia cardiaca es de: $fc <br>" .
                        "Su tension sistolica es de: $ts <br>" .
                        "Su tension diastolica es de: $td <br>" .
                        "Usted presenta HIPERTENSION<br>";
                } else if ($ib > 110 and $ib < 170) {
                    echo "Su frecuencia cardiaca es de: $fc <br>" .
                        "Su tension sistolica es de: $ts <br>" .
                        "Su tension diastolica es de: $td <br>" .
                        "Su hipertension es normal<br>";
                } else if ($ib >= 171 and $ib <= 200) {
                    echo "Su frecuencia cardiaca es de: $fc <br>" .
                        "Su tension sistolica es de: $ts <br>" .
                        "Su tension diastolica es de: $td <br>" .
                        "Usted presenta TENDECIA A HIPERTENSION<br>";
                } else if ($ib > 200) {
                    echo "Su frecuencia cardiaca es de: $fc <br>" .
                        "Su tension sistolica es de: $ts <br>" .
                        "Su tension diastolica es de: $td <br>" .
                        "Usted presenta HIPERTENSO<br>";
                }

                ?>
            </article>
        </div>
    </section>
</body>

</html>
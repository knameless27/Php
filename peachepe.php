<?php
$numberOne = $_POST['numberOne'];
$numberTwo = $_POST['numberTwo'];
echo '<h1>Numeros primos</h1>';
if ($numberOne==NULL||$numberTwo==NULL) {
    echo '<p>¡Error!<br/>¡Ha dejado uno o los dos campos vacios!<br/>Intentelo de nuevo';
}else if ($numberOne==$numberTwo) {
    echo '<p>¡Error!<br/>¡Los numeros ingresados son iguales!<br/>Intentelo de nuevo';
}else if ($numberOne<0||$numberTwo<0) {
    echo '<p>¡Error!<br/>¡Uno o los dos numeros ingresados son negativos!<br/>Intentelo de nuevo';
}else if ($numberOne < $numberTwo) {
    echo '<p>Los numeros primos desde ' . $numberOne . ' hasta ' . $numberTwo . ' son: </p>';
    $tempoUno = $numberOne;
    $tempoDos = $numberTwo;
    for ($i = $tempoUno; $i <= $tempoDos; $i++) {
        $conta = 0;
        for ($n = 1; $n <= $i; $n++) {
            if ($i % $n == 0) {
                $conta = $conta + 1;
            }
        }
        if ($conta == 2 or $i == 1) {
            print '<br>';
            print $i;
        }
    }
} else if($numberOne>$numberTwo){
    echo '<p>Los numeros primos desde ' . $numberTwo . ' hasta ' . $numberOne . ' son: </p>';
    $tempoUno = $numberTwo;
    $tempoDos = $numberOne;
    for ($i = $tempoUno; $i <= $tempoDos; $i++) {
        $conta = 0;
        for ($n = 1; $n <= $i; $n++) {
            if ($i % $n == 0) {
                $conta = $conta + 1;
            }
        }
        if ($conta == 2 or $i == 1) {
            print '<br>';
            print $i;
        }
    }
}
echo '<br/><br/><a href="nPrimos.html"><button>Volver atras</button></a>';
?>
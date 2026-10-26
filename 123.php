
<?php

$suma_wszystkich = 0;
$suma_parzystych = 0;
$suma_nieparzystych = 0;
$licznik_podzielnych_przez_3 = 0;


for ($i = 1; $i <= 100; $i++) {

    $suma_wszystkich += $i;
    

    if ($i % 2 == 0) {
        $parzystosc = "parzysta";
        $suma_parzystych += $i;
    } else {
        $parzystosc = "nieparzysta";
        $suma_nieparzystych += $i;
    }
    

    $linia = "$i - $parzystosc";
    

    if ($i % 3 == 0) {
        $linia .= ", podzielna przez 3";
        $licznik_podzielnych_przez_3++;
    }
    

    echo $linia . "<br>\n";
}


echo "<hr>";
echo "<h2>Podsumowanie</h2>";
echo "Suma wszystkich liczb: $suma_wszystkich<br>\n";
echo "Suma liczb parzystych: $suma_parzystych<br>\n";
echo "Suma liczb nieparzystych: $suma_nieparzystych<br>\n";
echo "Liczb podzielnych przez 3: $licznik_podzielnych_przez_3<br>\n";
?>

<?php

$zahl = 5;
$text = 'Hallo schöne Welt';
$bool = true;

echo 'Meine Zahl ist  ' . $zahl . '.' .'<br>Mein Text ist ' . $text . '.' .'<br>Meine Boolean ist ' . $bool . '.<br>';

$zahl_Zwei = 2;
$ergebnis = $zahl * $zahl_Zwei;
$ergebnis_Zwei = $zahl / $zahl_Zwei;
$summe = $zahl + $zahl_Zwei;
$wert = $zahl - $zahl_Zwei;
$rest = $zahl % $zahl_Zwei;

echo '<br>Das Ergebniss von ' . $zahl . ' mal ' . $zahl_Zwei . ' ist ' . $ergebnis .'.' . '<br>Das Ergebniss von ' . $zahl . ' durch ' . $zahl_Zwei . ' ist ' . $ergebnis_Zwei . '.' . 
'<br>Die Summe von ' . $zahl . ' plus ' . $zahl_Zwei . ' ist ' . $summe . '.' . '<br>Das Ergebniss von ' . $zahl . ' minus ' . $zahl_Zwei . ' ist ' . $wert . '.' . 
'<br>Der Rest von ' . $zahl . ' durch ' . $zahl_Zwei . ' ist ' . $rest . '.';

function addieren() {
    $zahl = 15;
    $zahl_Zwei = 415;
    $summe = $zahl + $zahl_Zwei;
    echo 'Die Summe von ' . $zahl . ' plus ' . $zahl_Zwei . ' ist ' . $summe . '.' . '<br>';
}

function subtract() {
    $zahl = 550;
    $zahl_Zwei = 485.50;
    $ergebnis = $zahl - $zahl_Zwei;
    echo 'Das Ergebniss von ' . $zahl . ' minus ' . $zahl_Zwei . ' ist ' . $ergebnis . '.' . '<br>';
}

function multiple() {
    $zahl = 5289;
    $zahl_Zwei = 20;
    $ergebnis = $zahl * $zahl_Zwei;
    echo 'Das Ergebniss von ' . $zahl . ' mal ' . $zahl_Zwei . ' ist ' . $ergebnis .'.' . '<br>';
}

function divider() {
    $zahl = 630;
    $zahl_Zwei = 10;
    $ergebnis = $zahl / $zahl_Zwei;
    echo 'Das Ergebniss von ' . $zahl . ' durch ' . $zahl_Zwei . ' ist ' . $ergebnis .'.' . '<br>';
}

function modulus() {
    $zahl = 64;
    $zahl_Zwei = 2;
    $rest = $zahl % $zahl_Zwei;
    echo 'Der Rest der ' . $zahl . ' durch ' . $zahl_Zwei . ' ist ' . $rest . '.' . '<br>';
}

addieren();
subtract();
multiple();
divider();
modulus();
echo '<br>';
/**
 * Abfrage ob True oder False von der eingabe kommt
 */
if (isset($_POST['schicken'])) {
    echo 'Guten Tag, ' . $_POST['vor'] . ' ' . $_POST['nach'] . '<br>';
    if($_POST['bname'] == 'test' && $_POST['pw'] == 'test' || $_POST['pw'] == 'password') {
        echo 'Zugang gestattet' . '<br>';
    }
    else
        echo 'Zugang verweigert' . '<br>';
    } 
echo '<br>';
$text_zwei = '5';

if($zahl == $text_zwei) echo '==<br>';
if($zahl != $text_zwei) echo '!=<br>';
if($zahl === $text_zwei) echo '===<br>';
if($zahl !== $text_zwei) echo '!==<br>';

echo 'Erster Wert: ' . (12 <=> 5) . '<br>';
echo 'Zweiter Wert: ' . (5 <=> 12) . '<br>';
echo 'Werte sind  gleich: ' . (5 <=> 5) . '<br>';

echo '<br>';
function schleife(){ 
    for ($i = 1; $i <= 10; $i++) {
        echo 'Zeile: ' . $i .'<br>';
    }
}
schleife();
echo '<br>';

function table_test(){ 
    for ($i = 8; $i <= 13; $i = $i+1) {
    echo '<tr>';
        for ($x = 1; $x <= 5; $x = $x+1) {
            echo '<td align = "right" >'. $i/$x .'</td>';
        }
    echo '</tr>';
    echo '<br>';
    }
}
table_test();
echo '<br>';

srand((double)microtime()*1000000);
$summe_2 = 0 ;

while ($summe_2 < 25) {
    $zufallszahl = rand (1,6);
    $summe_2 = $summe_2 + $zufallszahl;
    echo 'Zahl ' . $zufallszahl . ', Summe ' . $summe_2 . '<br>';
}

echo '<br>';

srand((double)microtime()*1000000);
$summe_3 = 0;
do {
    $zufallsz = rand (1,6);
    $summe_3 = $summe_3 + $zufallsz;
    echo 'Zahl ' . $zufallsz . ', Summe ' . $summe_3 . '<br>';
} while ($summe_3 < 25);

echo '<br>';

function start_break () {
    srand((double)microtime()*10000000);
    $summe = 0;
    $zaehler = 0;

    while ($summe < 25) {
        $zufallsz = rand (1,6);
        $summe = $summe + $zufallsz;
        $zaehler = $zaehler + 1;
        echo 'Nr. ' . $zaehler . ' , Zahl ' . $zufallsz . ', Summme' . $summe . '<br>';
        if ($zaehler >= 6) 
            break;    
    }
}

start_break ();
echo '<br>';

function for_contiune () {
    for ($i = 1; $i <= 15; $i++) {
        if ($i >= 5 && $i <= 12)
            continue;
    
    echo 'Zeile ' . $i . '<br>';    
    }
}

for_contiune();
echo '<br>';

function table_start () {
    for ($i = 8; $i <= 13; $i++) {
        echo '<tr>';
        echo '<td> Zeile </td>';
        echo '<td align = "right> ' . $i . ' </td>';
        echo '</tr>';
    }
}
table_start();
echo '<br>';

function flexloop($von, $bis, $schritt){
    echo 'Eine Schleife von ' . $von . ' bis ' . $bis . ' mit ' . ' der Schrittweite ' . $schritt . '<br>';
    for ($i = $von; $i <= $bis; $i++) {
        echo $i;
    }
}

echo '<p>Nummer 1:<br>';
flexloop(5, 27, 3) . '<p>';
echo '<p>Nummer 2:<br>';
flexloop(10, 10, 4);
echo '</p>Nummer 3:<br>';
$a = 100;
$b = 200;
$c = 10;
flexloop($a, $b, ($b - $c) / 8 + $c);
echo '<p>';

function add($z1, $z2) {
    $summe = $z1 + $z2;
    return $summe;
}
$h = add(3,20);
echo 'Summe: ' . $h . '<br>';
$j = 5;
$h = add($j, 12);
echo 'Summe: ' . $h . '<br>';
echo 'Summe: ' . add(13, 87) . '<br>';

function vtauschen($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

function rtauschen(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

function preisvergleich() {
    $preis = 42;
    echo($preis < 1? 'Das ist billig' : 'Langsam wird es teuer') . '<br>';
}

echo '<br>'; 
preisvergleich();
echo '<br>';
prüfen();

function prüfen() {
    echo ($preis ?? 'Nicht vorhanden') . '<br>';
    $preis = 1.26;
    echo ($preis ?? 'Nicht vorhanden') . '<br>';
}

function trennstrich($anzahl) {
    echo '<br>';
    for ($i = 1; $i <= $anzahl; $i++){
        echo '-';
    }
}

trennstrich(4 ** 2);
trennstrich(add($zahl, 3) ** 2);
$tauschwert_1 = 15;
$tauschwert_2 = 12;
echo '<p>Per Kopie, vorher: ' . $tauschwert_1 . ' ' . $tauschwert_2 . '<br>';
vtauschen($tauschwert_1, $tauschwert_2);
echo 'Per kopie, nachher: ' . $tauschwert_1 . ' ' . $tauschwert_2 .'</p>';

function summieren() {
    echo 'Variable z: ' . $z . '<br>';
    global $x;
    $y = 35;
    $z = 0;
}
?>
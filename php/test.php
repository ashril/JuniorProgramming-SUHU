<?php
// declare (strict_types = 1) ;
$nama = "Ahmad Ashril Rizal";
echo "Nama saya $nama <br>";

function myFg() {
    echo "Nama saya $nama dari fungsi myF<br>";
}

// myFg();

function myFl() {
    global $nama;
    $email= "ashril@mail.com";
    echo "Nama saya $nama dengan email $email dari fungsi myFl<br>";

    echo "<br>";
    static $i = 0; 
    // static akan membuat nilai tersimpan di memori
    echo $i =0;
    $i++;
    echo $i;
}

// myFl();


function dataType(){
    $integer = 123;
    $kalimat = "ijk";
    $binary = true;
    $desimal = 35.61;

    $integerText = "456";

    $total1 = $integer + $integerText;
    $total2 = $integerText +$integer;

    echo "<br>";
    echo $total1;
    echo "<br>";
    echo $total2;
}

// dataType();
function sekumpulanData(){
    $hewan = array("sapi", "kerbau", "kebo", 4, 1);
    var_dump($hewan);
}

// sekumpulanData();

function percabangan(){
    $suhu=30;
    if ($suhu >=0 && $suhu <100){
        echo "CAIR";
    }
}
// percabangan();

function percabanganswitch () {
    $lampuLintas = "hijau";
    switch ($lampuLintas) {
        case "merah":
            echo "Benhenti!";
            break;
        case "kuning":
            echo "gas pooool";
            break;
        case "hijau":
            echo "Jalan dah";
            break;
        default:
            echo "Lampunya Rusak!";
            break;

    }
}

// percabanganswitch();

function perulanganWhile() {
    $i = 0;
    while ($i<=5) {
        $i++;
        echo "<br>nilai ke $i";
    }

}
// perulanganwhile();


function perulanganDoWhile() {
    $i=0;
    do {
        echo "<br>nilai ke $i";
        $i++;
    }
    while ($i<=5);
}
// perulanganDoWhile();

function perulanganFor() {
    for ($i=0; $i<=5; $i++) {
        echo "<br>nilai ke $i";
    }
}
// perulanganFor();

function perulanganBreakContinue() {
    for ($i=0; $i<=10; $i++) {
        if ($i==5) {
            echo "<br>continue";
            continue;
        }
        else if ($i==7) {
            echo "<br>break";
            break;
        }
        echo "<br>nilai ke $i";
    }
}
// perulanganBreakContinue();

function perulanganForEach() {
    $hewan = array ("sapi", "kerbau", "kebo");
    foreach ($hewan as $value) {
        echo "<br>$value";
    }
}

// perulanganForEach();

function fungsiParameter($jenis) {
    $hewan = array ("sapi", "kerbau", "kebo");
    foreach ($hewan as $value) {
        echo "<br>$value";
    }
}

// fungsiParameter("Hewan"):


function fungsiDenganNilaiBalik($num1, $num2) {
    return $num1+$num2;
}
// echo "<br>". fungsiDenganNilaiBalik(1,2);

function fungsiArray () {
    $hewan = array ("sapi", "kerbau", "kebo");
    echo "<br> ".$hewan[1];
    echo "<br> index-1: ".count($hewan);

    $buah = array ("buah1"=>"rambutan","buah2"=>"koledang","buah3"=>"kelengkeng");
    echo "<br> buah pada key buah 1: ".$buah["buah1"];

    foreach ($buah as $key => $value) {
        echo "<br> key ".$key. " value ".$value;
    }

    $multiDimensi = array (
        array("kerbau", "sapi", "kebo"),
        array("rambutan". "koledang", "kelengkeng"),
        array("string", 123, true)  
    );
    echo "<br> ".$multidimensi[1][1];

    $baris=count($multiDimensi);
    for ($i=0; $i<$baris; $i++) {
        for ($j=0; $j<count($multiDimensi[$i]); $j++ ) {
            echo "<br> ".$multiDimensi[$i][$j];
        }
    }

    echo "<br> array terurut:<br>";
    for ($i=0; $i<$baris; $i++) {
        sort($multiDimensi[$i]);
        for ($j=0; $j<count($multiDimensi[$i]); $j++ ) {
            echo "<br> ".$multiDimensi[$i][$j];
        }
    }

}
// fungsiArray();



?>
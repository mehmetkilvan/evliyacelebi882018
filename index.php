<?php 

echo "Mehmet Kilvan";

echo "<br>";

$ad = "Kod";
$ad2 = "Adı";
$ad3 = "2023";

#Matematik Operatörleri

$sayi1 = 5;
$sayi2 = 7;

/*

- Çıkarma
+ Toplama
/ Bölme
* Çarpma

*/

echo $sayi1+$sayi2;
echo "<br>";
echo $sayi1/$sayi2;
echo "<br>";
echo $sayi1*$sayi2;
echo "<br>";
$cikarma=$sayi1-$sayi2;
echo $cikarma;
echo "<br><br>";

#Atama Operatörleri

$atama = 40;
echo $atama=$atama-10;
echo "<br>";
echo $atama=$atama+10;
echo "<br>";
echo $atama=$atama*10;
echo "<br><br>";

#Arttırma Eksiltme Operatörleri

$i=6;
echo "<br>";
echo ++$i;
echo "<br>";
echo --$i;
echo "<br>";

#####################

echo sqrt(16); #Karekök Alma
echo "<br>";
echo pow(4, 2); #Üs Alma
echo "<br>";
$yazi = "benim adım MEHMET";
echo mb_strtolower($yazi, 'UTF-8');
echo "<br>";
echo mb_strtoupper($yazi, 'UTF-8');
echo "<br>";
echo ucwords($yazi);
echo "<br>";
echo ucfirst($yazi);
echo "<br>";
echo strstr($yazi, "adım");
echo "<br>";
echo str_replace("MEHMET", "KADİR", $yazi);
echo "<br>";
echo substr($yazi, 0,10);
echo " <a href='http://google.com.tr'>Devamını Oku...</a>";




?>






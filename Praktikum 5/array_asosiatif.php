<?php

// Method 1: Direct with values
$arrAlamat = [
    "Roni" => "Banjarmasin",
    "Dhiva" => "Bandung",
    "Ilham" => "Medan",
    "Oku" => "Hongkong",
];

// Method 2: Empty array then initialization
$arrNim = [];
$arrNim["Roni"] = "1101112";
$arrNim["Dhiva"] = "1101101";
$arrNim["Ilham"] = "1101109";
$arrNim["Oku"] = "1101476";
$arrNim["Fadhlan"] = "1101113";

echo "<h2>Array Asosiatif</h2>";
echo "Alamat Dhiva: " . $arrAlamat['Dhiva'] . "<br>"; 
echo "Alamat Oku: " . $arrAlamat['Oku'] . "<br>"; 
echo "<br>";
echo "NIM Ilham: " . $arrNim['Ilham'] . "<br>"; 
echo "NIM Fadhlan: " . $arrNim['Fadhlan'] . "<br>";
echo "<br>";
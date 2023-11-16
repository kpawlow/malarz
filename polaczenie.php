<?php
//Dane do połączenia z bazą danych 
$serwer = "localhost";
$konto = "root";    
$haslo = "";
$baza = "malarz";
//Połączenie z bazą danych
$kutno = mysqli_connect($serwer, $konto, $haslo, $baza);
if (!$kutno){
    die("Połączenie nieudane" . mysqli_connect_error());
}
mysqli_connect
?>
<?php
$uczniowie = array (" 4"=>"Kacper", " 1"=>"Max" , " 2"=>"Filip", " 3"=>"Lukasz", " 5"=>"Kuba", " 6"=>"Tomasz", " 7"=>"Aleks", " 8"=>"Emil", " 9"=>"Bartosz", " 10"=>"Szymon");
ksort ($uczniowie);
reset ($uczniowie);
while (list ($klucz, $wartosc) = each ($uczniowie)) {
    echo "$klucz = $wartosc";
}


//asort sortuje 
//arsort  sortowanie w odwrotnej kolejnosci
//ksort  
//krsort
?>
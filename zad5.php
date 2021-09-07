<?php
$uczniowie = array (" 4"=>"Kacper<br>", " 1"=>"Max<br>" , " 2"=>"Filip<br>", " 3"=>"Lukasz<br>", " 9"=>"Kuba<br>", " 6"=>"Tomasz<br>", " 7"=>"Aleks<br>", " 8"=>"Emil<br>", " 10"=>"Bartosz<br>", " 5"=>"Szymon<br>");
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
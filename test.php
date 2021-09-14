<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'school';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $numer = $_GET['num'];
             $nazwisko = $_GET['nazw'];
             $waga = $_GET['waga'];
$query = "Insert into uczniowie(numer, nazwisko, waga) values('$numer', '$nazwisko', '$waga')";
$run =mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }
?>

<form action="" method="get">
Numer:<input type="text" name="num"><br>
Nazwisko:<input type="text" name="nazw"><br>
Waga:<input type="text" name="waga"><br>
<input name="sub" type="submit" value="ok">
</form>

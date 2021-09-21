<?php

$user= 'root';
$pass= '';
$host = 'localhost';
$base = 'logowanie_raczkowski';
$log= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($log,$base);

$sql = "SELECT * FROM 'tabela_raczkowski' ORDER BY 'tabela_raczkowski'.'id' ASC";
$result = $log->query($sql);

if (isset($_POST['dodaj']))
    {
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$query = "select * from tabela_raczkowski WHERE Login='$login' AND Haslo='$haslo'";
$run =mysqli_query($log,$query) or die(mysqli_error($log));
$a=$log->query($query);
if($a->num_rows>0){
    header('Location: panel.html');
    echo "Zalogowany";

}
else{
    echo"Nieprawidłowy login lub hasło";
}
}

?>

<form action="" method="POST" >
<b>Podaj login:</b> <input type="text" name="login"><br>
<b>Podaj hasło:</b> <input type="password" name="haslo"><br>
<input type="submit" value="Zaloguj" name="dodaj">
</form>
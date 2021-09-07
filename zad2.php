<?php
if(isset($POST['oblicz']))
{
$log = $_POST['log'];
$pass = $_POST['pass'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$miasto = $_POST['miasto'];

if($log =='jacek' && $pass == 'owca')
{
    echo ("zalogowany");  
}

else
{
    echo("sprobuj ponownie");
}
}
?>
<form action="" method= "POST">
   login  <input type="text" name='log'>
    haslo <input type="password" name='pass'>
    <input type="submit" name ="oblicz" value='Show'>
<br><br>

imie<input type="text" name='imie'><br>
nazwisko<input type="text" name='nazwisko'><br>
miasto<input type="text" name='miasto'>
<input type="submit" name="oblicz" value='Show'>


</form>














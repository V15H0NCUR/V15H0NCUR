<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'logowanie_raczkowski';
   $log= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($log,$base);
 
   $sql = "SELECT * FROM `tabela_raczkowski` ORDER BY `tabela_raczkowski`.`id` ASC";
   $result = $log->query($sql);

  

if(isset($_POST['dodaj'])) {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $szkola = $_POST['szkola'];
        $adres = $_POST['adres'];
        $telefon = $_POST['telefon'];
        $query = "INSERT INTO tabela_raczkowski(Login,Haslo ,Imię, Nazwisko, Szkoła, Adres, Telefon) values('$login', '$haslo', '$imie', '$nazwisko', '$szkola', '$adres', '$telefon')";
        $run =mysqli_query($log,$query) or die(mysqli_error());
 if($run){
    header('Location: logowanie.php'); 
     echo "Uzytkownik dodany";
 }
    }


?>



<form action="" method="POST">
    Dodaj nowa osobe: <br>
    Login: <input type="text" name="login"><br>
    Haslo: <input type="password" name="haslo"><br>
    Imie:  <input type="text" name="imie"><br>
    Nazwisko:  <input type="text" name="nazwisko"><br>
    Szkola:  <input type="text" name="szkola"><br>
    Adres:  <input type="text" name="adres"><br>
    Telefon:  <input type="number" name="telefon"><br>
    <input name="dodaj" type="submit" value="ok">
</form>
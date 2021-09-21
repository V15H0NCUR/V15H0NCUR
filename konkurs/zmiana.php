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
  $nowehaslo = $_POST['nowehaslo'];
  $query = "select * FROM tabela_raczkowski WHERE Login='$login' AND Haslo='$haslo'";
  $a = $log->query($query);
  if($a->num_rows>0){
    $subject = "$nowehaslo";
    $pattern2 = '/[A-Z]/';
    $pattern = '/[!@#$%&^]/';
    $pattern3 = '/[1-9]/';
    if(preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE) && preg_match($pattern2, $subject, $matches, PREG_OFFSET_CAPTURE)&& preg_match($pattern3, $subject, $matches, PREG_OFFSET_CAPTURE)){
        {
    
    $query = "UPDATE tabela_raczkowski SET haslo = '$nowehaslo' WHERE Login='$login' AND Haslo='$haslo'";
  $run =mysqli_query($log,$query) or die(mysqli_error());

  if($run){
      echo "Hasło zmienione";
      header('Location: logowanie.php'); 
  }
  else{
    echo "Błąd";
  }
        }
  else{
    echo "Zły login lub hasło";
  }
           }
?>
 
<form action="" method="POST">
   
    Podaj Login: <input type="text" name="login"><br>
    Podaj stare haslo: <input type="password" name="haslo"><br>
    Podaj nowe haslo: <input type="password" name="nowehaslo"><br>
    <input name="dodaj" type="submit" value="ok">
</form>


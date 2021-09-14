<style>
    td {
        border: 2px solid #000;
        background: blue;
        color: #fff;
    }
</style>
 
<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'uczniowie';
   $conn= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($conn,$base);
 
   $sql = "SELECT * FROM 4g";
    $result = $conn->query($sql);
 
    echo "<table>";
    echo "<tr>";
        echo "<td>";
            echo "Imie:";
        echo "</td>";
        echo "<td>";
            echo "Nazwisko:";
        echo "</td>";
    echo "</tr>";
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
 
            echo "<td>";
                echo $row["imie"];
            echo "</td>";
 
            echo "<td>";
                echo $row["nazwisko"];
            echo "</td>";
 
        echo "</tr>";
    }
    } else {
        echo "0 results";
    }
    echo "</table>";
 
 

?>
<?php
$n = $_GET["war"];


for ($a=0; $a<$n; $a++)
{
    $los = rand(1, 1000);
    echo ($los . "<br>");
}
?>
<form action="" sethod= "GET">
    <input type="text" name="war">
    <input type="submit" name="show">
</form>














<?php
mysqli_query(mysqli_connect('localhost','root','','baza1'));
echo $_SESSION['ilenatak']." voted yes.";
$tab = $_SESSION['osoby'];
echo "<br>Last 3 of them are:<ul>";
foreach ($tab as $x)
{
    echo "<li><b>$x</b></li>";
}
echo "</ul>";
?>
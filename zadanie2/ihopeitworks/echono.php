<?php
mysqli_query(mysqli_connect('localhost','root','','baza1'));
    echo $_SESSION['ilenanie']." voted no.";
    $tabn = $_SESSION['osobyn'];
    echo "<br>Last 3 of them are:<ul>";
                foreach ($tabn as $y) {
                    echo "<li><b>$y</b></li>";
                }
                echo "</ul>";
?>
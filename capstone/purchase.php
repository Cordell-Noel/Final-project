<?php 

$con = mysqli_connect('localhost','root','' );

mysqli_select_db($con,'football');

$sql = "INSERT INTO football (email, name, seat, quantity, total, game) VALUES ('$_POST[name]','$_POST[email]'$_POST[seat]',$_POST[quantity]',$_POST[total]',$_POST[game]',";

if ($con->query($sql) == TRUE) {
    echo "Purchase completed";
    echo "<br>";
    header("refresh:3,footballinfo.html");

    }
    else{
        echo $con->error;
        header("refresh:3,footballinfo.html");
    }

    $con->close();
    ?>
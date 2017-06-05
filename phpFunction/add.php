<?php

if(isset($_POST['send']) && !empty ($_POST['name']) && !empty($_POST['type'])&& !empty($_POST['categori'])&& !empty($_POST['prise']))
{
    $name = $_POST['name'];
    $type = $_POST['type'];
    $categori = $_POST['categori'];
    $prise = $_POST['prise'];
    $today = date("Y-m-d H:i:s");
    $dbc = mysqli_connect("localhost", "root", "", "Kursova") OR die("Sere");
    if ($dbc == false)
    {
        die("Server eror");
    }


    $query= "insert into Products( name, type,Date_time,category,prise) VALUES (
     '$name','$type','$today','$categori', '$prise ')";

    $result = mysqli_query($dbc,$query);
    if ($result==false) {
        die("query error");
    }
    mysqli_close($dbc);
}
<?php
$dbc = mysqli_connect("localhost", "root", "", "Kursova") OR die("Sere");

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    $query="insert into Orders_cake(name,email,id_prod,phone) value ('$name','$email','$id','$phone') ";
    $result = mysqli_query($dbc, $query) OR die("err bin");

    mysqli_close($dbc);

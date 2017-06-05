
<?php
if(!empty($_GET['id']) )
{
    $idp=$_GET['id'];
    $dbc = mysqli_connect("localhost", "root", "", "Kursova") OR die("Sere");
    $query="delete from Products where id='$idp' ";
    $result=mysqli_query($dbc,$query) OR die("err bin");
}
?>
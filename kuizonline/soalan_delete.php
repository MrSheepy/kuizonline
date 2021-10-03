<?php
include("sambungan.php");

$idkelas=$_POST["idsoalan"];
$sql="delete from soalan where idsoalan='$idsoalan'";
$result=mysqli_query($sambungan, $sql);
if ($result==true)
    echo " Berjaya Padam";
else
    echo " Tidak Berjaya Padam";
?>
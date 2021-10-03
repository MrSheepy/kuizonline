<?php
include("sambungan.php");

$idkelas=$_POST["idpelajar"];
$sql="delete from pelajar where idpelajar='$idpelajar'";
$result=mysqli_query($sambungan, $sql);
if ($result==true)
    echo " Berjaya Padam";
else
    echo " Tidak Berjaya Padam";
?>
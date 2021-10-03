<?php
include ('sambungan.php');
session_start();

if (isset($_POST['userid'])) {
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM pelajar";
    $result = mysqli_query($sambungan,$sql);
    $jumpa = FALSE;
    while ($pelajar = mysqli_fetch_array($result)){
        if ($pelajar['idpelajar'] == $userid && $pelajar["password"]==$password){
            $jumpa =TRUE ;
            $_SESSION['username'] = $pelajar['idpelajar'];
            $_SESSION['nama'] = $pelajar['namapelajar'];
            $_SESSION['status'] = 'pelajar';
            break ;
        }
    }
}

if($jumpa == FALSE){
    $sql = "select * from guru";
    $result = mysqli_query($sambungan,$sql);
    while ($guru = mysqli_fetch_array($result)) {
        if($guru['idguru']== $userid && $guru["password"]==$password) {
            $jumpa = TRUE;
            $_SESSION['username'] = $guru['idguru'];
            $_SESSION['nama'] = $guru['namaguru'];
            $_SESSION['status'] = 'guru';
        }
    }
}

if ($jumpa == TRUE){
    header("Location:utama.html");
}
else
    echo  "<script>alert('Kesalahan pada User ID atau Password');
    window.location='login.html' </script> ";
?>
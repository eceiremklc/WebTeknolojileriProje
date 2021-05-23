<?php
    session_start();
    if(!isset($_SESSION["login"])){
        echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
    }else{
        echo "Hoşgeldiniz b201210016. <br>";
        header("Refresh: 3; url=index.html");
    }
?>
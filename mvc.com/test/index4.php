<?php
    if (session_status() == 1 ) session_start();
    
    setcookie("user", "jperez", time()+10);
    echo "el valor de la cookie es de ".$_COOKIE["user"];





?>
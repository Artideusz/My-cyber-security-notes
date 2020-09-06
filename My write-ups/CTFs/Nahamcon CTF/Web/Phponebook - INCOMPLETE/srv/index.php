<?php
    include($_GET['file']);
    if(!$_GET['file']) {
        echo "Sorry, you are in /index.php?file=";
    }
?>
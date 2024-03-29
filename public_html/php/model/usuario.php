<?php
    function checkUser($conn) {
       $var = pg_query_params($conn, "SELECT * FROM usuario WHERE email=$1");
    } 
?>
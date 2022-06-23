<?php
    $host = 'localhost:3306';
    $user = 'root';
    $password = '';
    $database = 'uploadfile';
 
    $con = mysqli_connect($host, $user, $password, $database);
 
    if (!$con){
        ?>
            <script>alert("Connection Unsuccessful!!!");</script>
        <?php
    }
?>
<?php
    define('DB_SERVER', 'localhost');
    define('DB_NAME', 'leapx');
    define('DB_USERNAME', 'leapx');
    define('DB_PASSWORD', '6vjXgVa2PNXy');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $baseurl  =  "https://devlr.websiteserverhost.biz/devlm/leapx/";

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
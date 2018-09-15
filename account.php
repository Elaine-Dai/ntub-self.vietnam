    <!-- connect-------------------------------------- -->

    <?php
    $servername = "ms.ntub.edu.tw";
    $username = "Vietnam";
    $password = "imd10446";
    $dbname = "Vietnam";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    
    mysqli_query($conn,"SET NAMES UTF8");
    ?>
    <!-- -------------------------------------- -->
<?php 
    echo "welcome";
?>
    <?php
    $host = "localhost";
    $userName = "fbsepqxj_admin	";
    $password = "1mpermonth	";
    $dbName = "fbsepqxj_admin	";
    // Create database connection
    $conn = new mysqli($host, $userName, $password, $dbName);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    ?>
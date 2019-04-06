<?php
/**
 * Connect to a MySQL database. Uses the MySQLi functions.
 */

//Mysql connection
// Create connection
if(empty($config['mysqlpassword'])) $config['mysqlpassword'] = "";

$conn = mysqli_connect($config['mysqlserver'], $config["mysqluser"], $config['mysqlpassword'], $config['mysqldb']);

// Check connection
if (!$conn) {
    EC_Header_Add("<p>Connection Error<p>", "MySQL Connection Failed");
}

// True false queries
function mysqli_ifexists($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){
        return true;
    }
    else {
        return false;
    }
}
?>
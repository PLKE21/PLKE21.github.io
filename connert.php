<?php
$serverName = "serverName//PLKEE";
$connectionInfo = array( "Database" = "dbName", "UID"=>"sa", "PWD"=>"12345678");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn ) {
    echo "Connection established.<br/>";
}else {
    echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
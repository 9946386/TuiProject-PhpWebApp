<?php
$writeOutResult = "Result:  ";

$serverName = "tuiphpwebappserver.database.windows.net";
$connInfo = array(
    "Database" => "tui-WebApp-DB",
    "Uid" => "tuiprojectadmin",
    "PWD" => "TuiProjectPassword123"
);
$conn = sqlsrv_connect($serverName, $connInfo);

if ($conn === false) {
    //FatalError("Server unavailable.");
    echo '<script>console.log("Nah Bro!")</script>';
}
else {
    echo '<script>console.log("Yes Bro!")</script>';
    $get = sqlsrv_query($conn, $query);

    while ($row = sqlsrv_fetch_array($get, SQLSRV_FETCH_ASSOC)) {
        $writeOutResult += $row["Column"];
    }
}
?>
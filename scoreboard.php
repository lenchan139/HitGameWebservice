
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$mysql_db_hostname = "localhost";
$mysql_db_user = "ive_fyp";
$mysql_db_password = "1335fyp1335";
$mysql_db_database = "iOS";


$con = @mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password,
 $mysql_db_database);

if (!$con) {
 trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
}
$var = array();
 $sql = "SELECT `name`, `score`, `date` FROM `scoreboard` ORDER BY `score` DESC";
$result = mysqli_query($con, $sql);

while($obj = mysqli_fetch_object($result)) {
$var[] = $obj;
}
echo json_encode($var);
?>
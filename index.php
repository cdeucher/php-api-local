<?php
$dbhost = $OPENSHIFT_MYSQL_DB_HOST;

$dbport = $OPENSHIFT_MYSQL_DB_PORT;

$dbuser = "adminmtGQWWG";

$dbpwd = "AAWHI28BByHP";

$dbname = "php";
$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);
if (!$connection) {
  echo "Could not connect to database";
} else {
  echo "Connected to database.<br>";
}
$dbconnection = mysql_select_db($dbname);
$query = "SELECT * from cad";
$rs = mysql_query($query);
while ($row = mysql_fetch_assoc($rs)) {
  echo $row['id'] . "\n";
}
mysql_close();
?>

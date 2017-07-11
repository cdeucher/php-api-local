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

$where = (isset( $GET['where'])) ? $GET['where'] : '';

$query = "SELECT * from cad $where";
$rs = mysql_query($query);

$return = array();
while ($row = mysql_fetch_assoc($rs)) {
   $return[] = $row;
}
mysql_close();

json_encode($return);
die;
?>

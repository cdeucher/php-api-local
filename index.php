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
  //echo "Connected to database.<br>";
}
$dbconnection = mysql_select_db($dbname);

$where =  '';

if(!empty($_GET['param1']))
  $where = " ".$_GET['param1']." like '%".$_GET['valor1']."%'";
if(!empty($_GET['param2']))
  $where = " ".$_GET['param2']." like '%".$_GET['valor2']."%'";

$query = "SELECT * from cad ".$where;
$rs = mysql_query($query);

$return = array();
while ($row = mysql_fetch_assoc($rs)) {
   $return[] = $row;
}
mysql_close();

echo  json_encode($return);
die;
?>

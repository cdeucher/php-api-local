﻿<?php
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);

$dbhost = '172.17.0.5';
$dbport = 3306;
$dbuser = "root";
$dbpwd  = "123";
*/

$dbhost = $OPENSHIFT_MYSQL_DB_HOST;
$dbport = $OPENSHIFT_MYSQL_DB_PORT;
$dbuser = "adminmtGQWWG";
$dbpwd  = "AAWHI28BByHP";


$dbname = "php";
$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);
if (!$connection) {
  echo "Could not connect to database";
} else {
  //echo "Connected to database.<br>";
}
$dbconnection = mysql_select_db($dbname);

$where =  ' where 1=1 ';

if(!empty($_GET['param1']))
  $where .= " and ".$_GET['param1']." like '%".$_GET['valor1']."%'";
if(!empty($_GET['param2']) && !empty($_GET['valor2']))
  $where .= " and ".$_GET['param2']." > '".$_GET['valor2']."'";
if(!empty($_GET['param3']) && !empty($_GET['valor3']))
  $where .= " and ".$_GET['param3']." < '".$_GET['valor3']."'";
//echo $where;die;
$query = "select c.doenca,count(1)as casos,YEAR(c.`data`) as ano
 from cad c   $where
group by c.doenca,YEAR(c.`data`) ";
//echo $query;die;
//$query =  "select * from cad c where c.bairro = 'Paraiso'";
$rs = mysql_query($query);

$return = array();
while ($row = mysql_fetch_assoc($rs)) {
  $return[] = array(
      'doenca'=> utf8_encode($row['doenca'])
     ,'casos'=>  utf8_encode($row['casos'])
     ,'ano'=>  utf8_encode($row['ano'])
    );
  }
  mysql_close();

  //echo "<pre>";
  //print_r($return);die;

  //header('Access-Control-Allow-Origin: *');
  echo  json_encode($return, JSON_UNESCAPED_UNICODE);

die;
?>
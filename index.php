<?php
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
if(!empty($_GET['param2']))
  $where .= " and ".$_GET['param2']." like '%".$_GET['valor2']."%'";

//echo $where;die;
$query = "select c.doenca,count(1)as casos,YEAR(c.`data`) as ano
,COUNT(c.mes = 1 OR NULL) AS 'jan'
,COUNT(c.mes = 2 OR NULL) AS 'fev'
,COUNT(c.mes = 3 OR NULL) AS 'mar'
,COUNT(c.mes = 4 OR NULL) AS 'abr'
,COUNT(c.mes = 5 OR NULL) AS 'mai'
,COUNT(c.mes = 6 OR NULL) AS 'jun'
,COUNT(c.mes = 7 OR NULL) AS 'jul'
,COUNT(c.mes = 8 OR NULL) AS 'ago'
,COUNT(c.mes = 9 OR NULL) AS 'set'
,COUNT(c.mes = 10 OR NULL) AS 'out'
,COUNT(c.mes = 11 OR NULL) AS 'nov'
,COUNT(c.mes = 12 OR NULL) AS 'dez'
 from cad c   $where
group by c.doenca,YEAR(c.`data`) ";
//echo $query;die;
$rs = mysql_query($query);

$return = array();
while ($row = mysql_fetch_assoc($rs)) {
$return[] = array(
    'doenca'=> utf8_decode($row['doenca'])
   ,'casos'=>  utf8_decode($row['casos'])
   ,'ano'=>    utf8_decode($row['ano'])
   ,'jan'=>    utf8_decode($row['jan'])
   ,'fev'=>    utf8_decode($row['fev'])
   ,'mar'=>    utf8_decode($row['mar'])
   ,'abr'=>    utf8_decode($row['abr'])
   ,'mai'=>    utf8_decode($row['mai'])
   ,'jun'=>    utf8_decode($row['jun'])
   ,'jul'=>    utf8_decode($row['jul'])
   ,'ago'=>    utf8_decode($row['ago'])
   ,'set'=>    utf8_decode($row['set'])
   ,'out'=>    utf8_decode($row['out'])
   ,'nov'=>    utf8_decode($row['nov'])
   ,'dez'=>    utf8_decode($row['dez'])
  );
}
mysql_close();

//header('Access-Control-Allow-Origin: *');
echo  json_encode($return);
die;
?>

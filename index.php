<?php
header('Access-Control-Allow-Origin: *');

require('bd.php');

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
      'doenca'=> utf8_encode($row['doenca'])
     ,'casos'=>  utf8_encode($row['casos'])
     ,'ano'=>    utf8_encode($row['ano'])
     ,'jan'=>    utf8_encode($row['jan'])
     ,'fev'=>    utf8_encode($row['fev'])
     ,'mar'=>    utf8_encode($row['mar'])
     ,'abr'=>    utf8_encode($row['abr'])
     ,'mai'=>    utf8_encode($row['mai'])
     ,'jun'=>    utf8_encode($row['jun'])
     ,'jul'=>    utf8_encode($row['jul'])
     ,'ago'=>    utf8_encode($row['ago'])
     ,'set'=>    utf8_encode($row['set'])
     ,'out'=>    utf8_encode($row['out'])
     ,'nov'=>    utf8_encode($row['nov'])
     ,'dez'=>    utf8_encode($row['dez'])
    );
  }
  mysql_close();

  //echo "<pre>";
  //print_r($return);die;

  //header('Access-Control-Allow-Origin: *');
  echo  json_encode($return, JSON_UNESCAPED_UNICODE);

die;
?>

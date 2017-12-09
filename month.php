<?php
header('Access-Control-Allow-Origin: *');
require('bd.php');
$dbname = $database;
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
$field = (!empty($_GET['param4'])) ? $_GET['param4'] : 'doenca';
$limit = (!empty($_GET['limit'])) ? $_GET['limit'] : '3';
//echo $where;die;
$query = "select a.mes,a.ano , group_concat(a.doenca separator ',') as doenca,group_concat(a.casos separator ',') as casos from 
(select c.doenca,count(1)as casos,c.mes ,YEAR(c.`data`) as ano
 from cad c  
 group by c.doenca,c.mes  order by c.mes,c.doenca desc limit 100) a
group by a.mes  order by a.mes,a.doenca desc";
//echo $query;die;
//$query =  "select * from cad c where c.bairro = 'Paraiso'";
$rs = mysql_query($query);
$return = array();
while ($row = mysql_fetch_assoc($rs)) {
  $return[] = array(
      'doenca'=> utf8_encode($row['doenca'])
     ,'casos'=>  utf8_encode($row['casos'])
     , 'mes' => utf8_encode($row['mes'])
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

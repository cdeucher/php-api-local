<?php
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
//'Alvorada|Araras|Autódromo|Bela Vista|Belvedere|Boa Vista|Bom Pastor|Bom Retiro|Campestre|Centro|Cristo Rei|Desbravador|Dom Gerônimo|Dom Pascoal|Efapi|Eldorado|Engenho Braun|Esplanada|Fronteira Sul|Industrial|Jardim América|Jardim Europa|Jardim Itália|Jardins|Lajeado|Líder|Maria Goretti|Monte Belo|Palmital|Paraíso|Parque das Palmeiras|Passo dos Fortes|Pinheirinho|Presidente Médici|Progresso|Quedas do Palmital|SAIC|Santa Maria|Santa Paulina|Santo Antônio|Santos Dummond|São Cristóvão|São Lucas|São Pedro|Seminário|Trevo|Universitário|Vila Real|Vila Rica'.split('|').forEach(function(a,b){ console.log(",COUNT(c.bairro = '"+a+"' OR NULL) AS '"+a+"'"); })
$query = "select c.doenca,count(1)as casos,YEAR(c.`data`) as ano
,COUNT(c.bairro = 'Alvorada' OR NULL) AS 'Alvorada'
,COUNT(c.bairro = 'Araras' OR NULL) AS 'Araras'
,COUNT(c.bairro = 'Autodromo' OR NULL) AS 'Autódromo'
,COUNT(c.bairro = 'Bela Vista' OR NULL) AS 'Bela Vista'
,COUNT(c.bairro = 'Belvedere' OR NULL) AS 'Belvedere'
,COUNT(c.bairro = 'Boa Vista' OR NULL) AS 'Boa Vista'
,COUNT(c.bairro = 'Bom Pastor' OR NULL) AS 'Bom Pastor'
,COUNT(c.bairro = 'Bom Retiro' OR NULL) AS 'Bom Retiro'
,COUNT(c.bairro = 'Campestre' OR NULL) AS 'Campestre'
,COUNT(c.bairro = 'Centro' OR NULL) AS 'Centro'
,COUNT(c.bairro = 'Cristo Rei' OR NULL) AS 'Cristo Rei'
,COUNT(c.bairro = 'Desbravador' OR NULL) AS 'Desbravador'
,COUNT(c.bairro = 'Dom Geronimo' OR NULL) AS 'Dom Gerônimo'
,COUNT(c.bairro = 'Dom Pascoal' OR NULL) AS 'Dom Pascoal'
,COUNT(c.bairro = 'Efapi' OR NULL) AS 'Efapi'
,COUNT(c.bairro = 'Eldorado' OR NULL) AS 'Eldorado'
,COUNT(c.bairro = 'Engenho Braun' OR NULL) AS 'Engenho Braun'
,COUNT(c.bairro = 'Esplanada' OR NULL) AS 'Esplanada'
,COUNT(c.bairro = 'Fronteira Sul' OR NULL) AS 'Fronteira Sul'
,COUNT(c.bairro = 'Industrial' OR NULL) AS 'Industrial'
,COUNT(c.bairro = 'Jardim America' OR NULL) AS 'Jardim América'
,COUNT(c.bairro = 'Jardim Europa' OR NULL) AS 'Jardim Europa'
,COUNT(c.bairro = 'Jardim Italia' OR NULL) AS 'Jardim Itália'
,COUNT(c.bairro = 'Jardins' OR NULL) AS 'Jardins'
,COUNT(c.bairro = 'Lajeado' OR NULL) AS 'Lajeado'
,COUNT(c.bairro = 'Lider' OR NULL) AS 'Líder'
,COUNT(c.bairro = 'Maria Goretti' OR NULL) AS 'Maria Goretti'
,COUNT(c.bairro = 'Monte Belo' OR NULL) AS 'Monte Belo'
,COUNT(c.bairro = 'Palmital' OR NULL) AS 'Palmital'
,COUNT(c.bairro = 'Paraiso' OR NULL) AS 'Paraiso'
,COUNT(c.bairro = 'Parque das Palmeiras' OR NULL) AS 'Parque das Palmeiras'
,COUNT(c.bairro = 'Passo dos Fortes' OR NULL) AS 'Passo dos Fortes'
,COUNT(c.bairro = 'Pinheirinho' OR NULL) AS 'Pinheirinho'
,COUNT(c.bairro = 'Presidente Medici' OR NULL) AS 'Presidente Médici'
,COUNT(c.bairro = 'Progresso' OR NULL) AS 'Progresso'
,COUNT(c.bairro = 'Quedas do Palmital' OR NULL) AS 'Quedas do Palmital'
,COUNT(c.bairro = 'SAIC' OR NULL) AS 'SAIC'
,COUNT(c.bairro = 'Santa Maria' OR NULL) AS 'Santa Maria'
,COUNT(c.bairro = 'Santa Paulina' OR NULL) AS 'Santa Paulina'
,COUNT(c.bairro = 'Santo Antonio' OR NULL) AS 'Santo Antônio'
,COUNT(c.bairro = 'Santos Dummond' OR NULL) AS 'Santos Dummond'
,COUNT(c.bairro = 'Sao Cristovao' OR NULL) AS 'São Cristóvão'
,COUNT(c.bairro = 'Sao Lucas' OR NULL) AS 'São Lucas'
,COUNT(c.bairro = 'Sao Pedro' OR NULL) AS 'São Pedro'
,COUNT(c.bairro = 'Seminario' OR NULL) AS 'Seminário'
,COUNT(c.bairro = 'Trevo' OR NULL) AS 'Trevo'
,COUNT(c.bairro = 'Universitario' OR NULL) AS 'Universitário'
,COUNT(c.bairro = 'Vila Real' OR NULL) AS 'Vila Real'
,COUNT(c.bairro = 'Vila Rica' OR NULL) AS 'Vila Rica'
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
     ,'Alvorada'=>    utf8_encode($row['Alvorada'])
      ,'Araras'=>    utf8_encode($row['Araras'])
      ,'Autodromo'=>    utf8_encode($row['Autódromo'])
      ,'BelaVista'=>    utf8_encode($row['Bela Vista'])
      ,'Belvedere'=>    utf8_encode($row['Belvedere'])
      ,'BoaVista'=>    utf8_encode($row['Boa Vista'])
      ,'BomPastor'=>    utf8_encode($row['Bom Pastor'])
      ,'BomRetiro'=>    utf8_encode($row['Bom Retiro'])
      ,'Campestre'=>    utf8_encode($row['Campestre'])
      ,'Centro'=>    utf8_encode($row['Centro'])
      ,'CristoRei'=>    utf8_encode($row['Cristo Rei'])
      ,'Desbravador'=>    utf8_encode($row['Desbravador'])
      ,'DomGeronimo'=>    utf8_encode($row['Dom Gerônimo'])
      ,'DomPascoal'=>    utf8_encode($row['Dom Pascoal'])
      ,'Efapi'=>    utf8_encode($row['Efapi'])
      ,'Eldorado'=>    utf8_encode($row['Eldorado'])
      ,'EngenhoBraun'=>    utf8_encode($row['Engenho Braun'])
      ,'Esplanada'=>    utf8_encode($row['Esplanada'])
      ,'FronteiraSul'=>    utf8_encode($row['Fronteira Sul'])
      ,'Industrial'=>    utf8_encode($row['Industrial'])
      ,'JardimAmerica'=>    utf8_encode($row['Jardim América'])
      ,'JardimEuropa'=>    utf8_encode($row['Jardim Europa'])
      ,'JardimItalia'=>    utf8_encode($row['Jardim Itália'])
      ,'Jardins'=>    utf8_encode($row['Jardins'])
      ,'Lajeado'=>    utf8_encode($row['Lajeado'])
      ,'Lider'=>    utf8_encode($row['Líder'])
      ,'MariaGoretti'=>    utf8_encode($row['Maria Goretti'])
      ,'MonteBelo'=>    utf8_encode($row['Monte Belo'])
      ,'Palmital'=>    utf8_encode($row['Palmital'])
      ,'Paraiso'=>    utf8_encode($row['Paraiso'])
      ,'ParquedasPalmeiras'=>    utf8_encode($row['Parque das Palmeiras'])
      ,'PassodosFortes'=>    utf8_encode($row['Passo dos Fortes'])
      ,'Pinheirinho'=>    utf8_encode($row['Pinheirinho'])
      ,'PresidenteMedici'=>    utf8_encode($row['Presidente Médici'])
      ,'Progresso'=>    utf8_encode($row['Progresso'])
      ,'QuedasdoPalmital'=>    utf8_encode($row['Quedas do Palmital'])
      ,'SAIC'=>    utf8_encode($row['SAIC'])
      ,'SantaMaria'=>    utf8_encode($row['Santa Maria'])
      ,'SantaPaulina'=>    utf8_encode($row['Santa Paulina'])
      ,'SantoAntonio'=>    utf8_encode($row['Santo Antônio'])
      ,'SantosDummond'=>    utf8_encode($row['Santos Dummond'])
      ,'SaoCristovao'=>    utf8_encode($row['São Cristóvão'])
      ,'SaoLucas'=>    utf8_encode($row['São Lucas'])
      ,'SaoPedro'=>    utf8_encode($row['São Pedro'])
      ,'Seminario'=>    utf8_encode($row['Seminário'])
      ,'Trevo'=>    utf8_encode($row['Trevo'])
      ,'Universitario'=>    utf8_encode($row['Universitário'])
      ,'VilaReal'=>    utf8_encode($row['Vila Real'])
      ,'VilaRica'=>    utf8_encode($row['Vila Rica'])
    );
  }
  mysql_close();

  //echo "<pre>";
  //print_r($return);die;

  //header('Access-Control-Allow-Origin: *');
  echo  json_encode($return, JSON_UNESCAPED_UNICODE);

die;
?>

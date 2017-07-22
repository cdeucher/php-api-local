<?php
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);

$dbhost = '172.17.0.4';
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
,COUNT(c.bairro = 'Autódromo' OR NULL) AS 'Autodromo'
,COUNT(c.bairro = 'Bela Vista' OR NULL) AS 'BelaVista'
,COUNT(c.bairro = 'Belvedere' OR NULL) AS 'Belvedere'
,COUNT(c.bairro = 'Boa Vista' OR NULL) AS 'BoaVista'
,COUNT(c.bairro = 'Bom Pastor' OR NULL) AS 'BomPastor'
,COUNT(c.bairro = 'Bom Retiro' OR NULL) AS 'BomRetiro'
,COUNT(c.bairro = 'Campestre' OR NULL) AS 'Campestre'
,COUNT(c.bairro = 'Centro' OR NULL) AS 'Centro'
,COUNT(c.bairro = 'Cristo Rei' OR NULL) AS 'CristoRei'
,COUNT(c.bairro = 'Desbravador' OR NULL) AS 'Desbravador'
,COUNT(c.bairro = 'Dom Gerônimo' OR NULL) AS 'DomGeronimo'
,COUNT(c.bairro = 'Dom Pascoal' OR NULL) AS 'DomPascoal'
,COUNT(c.bairro = 'Efapi' OR NULL) AS 'Efapi'
,COUNT(c.bairro = 'Eldorado' OR NULL) AS 'Eldorado'
,COUNT(c.bairro = 'Engenho Braun' OR NULL) AS 'EngenhoBraun'
,COUNT(c.bairro = 'Esplanada' OR NULL) AS 'Esplanada'
,COUNT(c.bairro = 'Fronteira Sul' OR NULL) AS 'FronteiraSul'
,COUNT(c.bairro = 'Industrial' OR NULL) AS 'Industrial'
,COUNT(c.bairro = 'Jardim América' OR NULL) AS 'JardimAmerica'
,COUNT(c.bairro = 'Jardim Europa' OR NULL) AS 'JardimEuropa'
,COUNT(c.bairro = 'Jardim Itália' OR NULL) AS 'JardimItalia'
,COUNT(c.bairro = 'Jardins' OR NULL) AS 'Jardins'
,COUNT(c.bairro = 'Lajeado' OR NULL) AS 'Lajeado'
,COUNT(c.bairro = 'Líder' OR NULL) AS 'Lider'
,COUNT(c.bairro = 'Maria Goretti' OR NULL) AS 'MariaGoretti'
,COUNT(c.bairro = 'Monte Belo' OR NULL) AS 'MonteBelo'
,COUNT(c.bairro = 'Palmital' OR NULL) AS 'Palmital'
,COUNT(c.bairro = 'Paraíso' OR NULL) AS 'Paraiso'
,COUNT(c.bairro = 'Parque das Palmeiras' OR NULL) AS 'ParquedasPalmeiras'
,COUNT(c.bairro = 'Passo dos Fortes' OR NULL) AS 'PassodosFortes'
,COUNT(c.bairro = 'Pinheirinho' OR NULL) AS 'Pinheirinho'
,COUNT(c.bairro = 'Presidente Médici' OR NULL) AS 'PresidenteMedici'
,COUNT(c.bairro = 'Progresso' OR NULL) AS 'Progresso'
,COUNT(c.bairro = 'Quedas do Palmital' OR NULL) AS 'QuedasdoPalmital'
,COUNT(c.bairro = 'SAIC' OR NULL) AS 'SAIC'
,COUNT(c.bairro = 'Santa Maria' OR NULL) AS 'SantaMaria'
,COUNT(c.bairro = 'Santa Paulina' OR NULL) AS 'SantaPaulina'
,COUNT(c.bairro = 'Santo Antônio' OR NULL) AS 'SantoAntonio'
,COUNT(c.bairro = 'Santos Dummond' OR NULL) AS 'SantosDummond'
,COUNT(c.bairro = 'São Cristóvão' OR NULL) AS 'SaoCristovao'
,COUNT(c.bairro = 'São Lucas' OR NULL) AS 'SaoLucas'
,COUNT(c.bairro = 'São Pedro' OR NULL) AS 'SaoPedro'
,COUNT(c.bairro = 'Seminário' OR NULL) AS 'Seminario'
,COUNT(c.bairro = 'Trevo' OR NULL) AS 'Trevo'
,COUNT(c.bairro = 'Universitário' OR NULL) AS 'Universitario'
,COUNT(c.bairro = 'Vila Real' OR NULL) AS 'VilaReal'
,COUNT(c.bairro = 'Vila Rica' OR NULL) AS 'VilaRica'
 from cad c   $where
group by c.doenca,YEAR(c.`data`) ";
//echo $query;die;
$rs = mysql_query($query);

$return = array();
while ($row = mysql_fetch_assoc($rs)) {
  $return[] = array(
      'doenca'=> utf8_encode($row['doenca'])
     ,'casos'=>  utf8_encode($row['casos'])
     ,'ano'=>  utf8_encode($row['ano'])
     ,'Alvorada'=>    utf8_encode($row['Alvorada'])
      ,'Araras'=>    utf8_encode($row['Araras'])
      ,'Autódromo'=>    utf8_encode($row['Autódromo'])
      ,'Bela Vista'=>    utf8_encode($row['Bela Vista'])
      ,'Belvedere'=>    utf8_encode($row['Belvedere'])
      ,'Boa Vista'=>    utf8_encode($row['Boa Vista'])
      ,'Bom Pastor'=>    utf8_encode($row['Bom Pastor'])
      ,'Bom Retiro'=>    utf8_encode($row['Bom Retiro'])
      ,'Campestre'=>    utf8_encode($row['Campestre'])
      ,'Centro'=>    utf8_encode($row['Centro'])
      ,'Cristo Rei'=>    utf8_encode($row['Cristo Rei'])
      ,'Desbravador'=>    utf8_encode($row['Desbravador'])
      ,'Dom Gerônimo'=>    utf8_encode($row['Dom Gerônimo'])
      ,'Dom Pascoal'=>    utf8_encode($row['Dom Pascoal'])
      ,'Efapi'=>    utf8_encode($row['Efapi'])
      ,'Eldorado'=>    utf8_encode($row['Eldorado'])
      ,'Engenho Braun'=>    utf8_encode($row['Engenho Braun'])
      ,'Esplanada'=>    utf8_encode($row['Esplanada'])
      ,'Fronteira Sul'=>    utf8_encode($row['Fronteira Sul'])
      ,'Industrial'=>    utf8_encode($row['Industrial'])
      ,'Jardim América'=>    utf8_encode($row['Jardim América'])
      ,'Jardim Europa'=>    utf8_encode($row['Jardim Europa'])
      ,'Jardim Itália'=>    utf8_encode($row['Jardim Itália'])
      ,'Jardins'=>    utf8_encode($row['Jardins'])
      ,'Lajeado'=>    utf8_encode($row['Lajeado'])
      ,'Líder'=>    utf8_encode($row['Líder'])
      ,'Maria Goretti'=>    utf8_encode($row['Maria Goretti'])
      ,'Monte Belo'=>    utf8_encode($row['Monte Belo'])
      ,'Palmital'=>    utf8_encode($row['Palmital'])
      ,'Paraíso'=>    utf8_encode($row['Paraíso'])
      ,'Parque das Palmeiras'=>    utf8_encode($row['Parque das Palmeiras'])
      ,'Passo dos Fortes'=>    utf8_encode($row['Passo dos Fortes'])
      ,'Pinheirinho'=>    utf8_encode($row['Pinheirinho'])
      ,'Presidente Médici'=>    utf8_encode($row['Presidente Médici'])
      ,'Progresso'=>    utf8_encode($row['Progresso'])
      ,'Quedas do Palmital'=>    utf8_encode($row['Quedas do Palmital'])
      ,'SAIC'=>    utf8_encode($row['SAIC'])
      ,'Santa Maria'=>    utf8_encode($row['Santa Maria'])
      ,'Santa Paulina'=>    utf8_encode($row['Santa Paulina'])
      ,'Santo Antônio'=>    utf8_encode($row['Santo Antônio'])
      ,'Santos Dummond'=>    utf8_encode($row['Santos Dummond'])
      ,'São Cristóvão'=>    utf8_encode($row['São Cristóvão'])
      ,'São Lucas'=>    utf8_encode($row['São Lucas'])
      ,'São Pedro'=>    utf8_encode($row['São Pedro'])
      ,'Seminário'=>    utf8_encode($row['Seminário'])
      ,'Trevo'=>    utf8_encode($row['Trevo'])
      ,'Universitário'=>    utf8_encode($row['Universitário'])
      ,'Vila Real'=>    utf8_encode($row['Vila Real'])
      ,'Vila Rica'=>    utf8_encode($row['Vila Rica'])
    );
  }
  mysql_close();

  //echo "<pre>";
  //print_r($return);die;

  //header('Access-Control-Allow-Origin: *');
  echo  json_encode($return, JSON_UNESCAPED_UNICODE);

die;
?>

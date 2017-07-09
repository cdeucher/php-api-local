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

$query = "CREATE TABLE `cad` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`idade` INT(11) NULL DEFAULT '0',
	`sexo` VARCHAR(50) NULL DEFAULT '0',
	`nome` VARCHAR(50) NULL DEFAULT '0',
	`bairro` VARCHAR(50) NULL DEFAULT '0',
	`doenca` VARCHAR(50) NULL DEFAULT '0',
	`mes` VARCHAR(50) NULL DEFAULT '0',
	PRIMARY KEY (`id`)
)ENGINE=InnoDB;";
$rs = mysql_query($query);
if (!$rs) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
$query = "INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (2, 62, 'M', 'Cintia', 'Centro', 'Doença 6', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (3, 22, 'M', 'Maria', 'Bairro 2', 'Doença 6', 'Jun');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (4, 27, 'M', 'Cintia', 'Bairro 2', 'Doença 3', 'Jun');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (5, 50, 'M', 'Luzia', 'Bairro 1', 'Doença 5', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (6, 5, 'H', 'João', 'Centro', 'Doença 3', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (7, 75, 'H', 'Marcos', 'Centro', 'Doença 4', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (8, 24, 'H', 'João', 'Bairro 2', 'Doença 6', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (9, 10, 'H', 'Luiz', 'Bairro 1', 'Doença 4', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (10, 50, 'M', 'Maria', 'Centro', 'Doença 2', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (11, 45, 'M', 'Luzia', 'Centro', 'Doença 5', 'Jun');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (12, 45, 'H', 'Marcos', 'Bairro 2', 'Doença 6', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (13, 44, 'H', 'Luiz', 'Bairro 2', 'Doença 6', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (14, 67, 'H', 'João', 'Bairro 2', 'Doença 7', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (15, 50, 'H', 'Luiz', 'Bairro 2', 'Doença 5', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (16, 53, 'H', 'Marcos', 'Bairro 2', 'Doença 3', 'Jun');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (17, 20, 'H', 'Luiz', 'Bairro 1', 'Doença 7', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (18, 18, 'M', 'Maria', 'Centro', 'Doença 1', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (19, 63, 'H', 'Luiz', 'Centro', 'Doença 4', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (20, 40, 'H', 'Luiz', 'Centro', 'Doença 5', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (21, 25, 'H', 'Marcos', 'Bairro 1', 'Doença 3', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (22, 7, 'H', 'Marcos', 'Centro', 'Doença 2', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (23, 55, 'H', 'Marcos', 'Bairro 2', 'Doença 1', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (24, 13, 'H', 'Luiz', 'Bairro 2', 'Doença 6', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (25, 12, 'H', 'Luiz', 'Centro', 'Doença 6', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (26, 30, 'M', 'Maria', 'Bairro 2', 'Doença 3', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (27, 52, 'M', 'Luzia', 'Bairro 2', 'Doença 5', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (28, 14, 'M', 'Maria', 'Bairro 1', 'Doença 5', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (29, 66, 'M', 'Cintia', 'Bairro 2', 'Doença 6', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (30, 24, 'H', 'João', 'Bairro 1', 'Doença 1', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (31, 12, 'H', 'Luiz', 'Centro', 'Doença 4', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (32, 17, 'M', 'Maria', 'Centro', 'Doença 1', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (33, 67, 'M', 'Luzia', 'Bairro 2', 'Doença 5', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (34, 69, 'H', 'Luiz', 'Centro', 'Doença 4', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (35, 13, 'H', 'Marcos', 'Bairro 1', 'Doença 1', 'Jun');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (36, 39, 'M', 'Cintia', 'Centro', 'Doença 4', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (37, 65, 'H', 'João', 'Centro', 'Doença 2', 'Jun');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (38, 1, 'M', 'Maria', 'Bairro 1', 'Doença 5', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (39, 56, 'H', 'Luiz', 'Centro', 'Doença 4', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (40, 20, 'H', 'Luiz', 'Centro', 'Doença 4', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (41, 9, 'M', 'Luzia', 'Bairro 2', 'Doença 1', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (42, 31, 'M', 'Luzia', 'Bairro 1', 'Doença 2', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (43, 0, 'H', 'Luiz', 'Bairro 1', 'Doença 5', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (44, 16, 'H', 'Marcos', 'Bairro 1', 'Doença 2', 'Jun');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (45, 53, 'H', 'João', 'Bairro 2', 'Doença 6', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (46, 18, 'H', 'João', 'Bairro 2', 'Doença 2', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (47, 69, 'H', 'João', 'Bairro 2', 'Doença 6', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (48, 28, 'H', 'Luiz', 'Centro', 'Doença 6', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (49, 12, 'H', 'João', 'Bairro 1', 'Doença 7', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (50, 62, 'H', 'Luiz', 'Bairro 2', 'Doença 7', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (51, 1, 'H', 'Marcos', 'Centro', 'Doença 6', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (52, 76, 'M', 'Cintia', 'Centro', 'Doença 3', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (53, 51, 'M', 'Cintia', 'Bairro 2', 'Doença 1', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (54, 7, 'M', 'Maria', 'Bairro 1', 'Doença 3', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (55, 31, 'H', 'Luiz', 'Bairro 2', 'Doença 2', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (56, 33, 'M', 'Maria', 'Centro', 'Doença 5', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (57, 35, 'M', 'Luzia', 'Centro', 'Doença 7', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (58, 70, 'H', 'Luiz', 'Centro', 'Doença 6', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (59, 56, 'H', 'João', 'Centro', 'Doença 7', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (60, 19, 'M', 'Luzia', 'Centro', 'Doença 2', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (61, 25, 'H', 'Marcos', 'Centro', 'Doença 7', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (62, 76, 'M', 'Maria', 'Bairro 1', 'Doença 7', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (63, 42, 'M', 'Luzia', 'Bairro 2', 'Doença 5', 'Jun');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (64, 44, 'H', 'João', 'Bairro 2', 'Doença 5', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (65, 41, 'M', 'Cintia', 'Bairro 2', 'Doença 6', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (66, 19, 'M', 'Luzia', 'Centro', 'Doença 2', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (67, 53, 'H', 'Luiz', 'Centro', 'Doença 6', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (68, 68, 'H', 'João', 'Bairro 2', 'Doença 4', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (69, 70, 'M', 'Luzia', 'Centro', 'Doença 3', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (70, 22, 'H', 'Luiz', 'Bairro 2', 'Doença 3', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (71, 36, 'H', 'João', 'Centro', 'Doença 3', 'Jun');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (72, 4, 'H', 'Luiz', 'Bairro 1', 'Doença 2', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (73, 44, 'M', 'Cintia', 'Bairro 2', 'Doença 1', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (74, 25, 'H', 'Luiz', 'Centro', 'Doença 2', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (75, 28, 'M', 'Cintia', 'Bairro 1', 'Doença 4', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (76, 69, 'H', 'Marcos', 'Centro', 'Doença 2', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (77, 50, 'M', 'Maria', 'Centro', 'Doença 7', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (78, 76, 'M', 'Cintia', 'Bairro 1', 'Doença 3', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (79, 34, 'M', 'Cintia', 'Bairro 2', 'Doença 3', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (80, 43, 'M', 'Cintia', 'Bairro 1', 'Doença 7', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (81, 71, 'M', 'Cintia', 'Bairro 1', 'Doença 3', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (82, 74, 'M', 'Luzia', 'Bairro 2', 'Doença 3', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (83, 3, 'M', 'Maria', 'Centro', 'Doença 7', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (84, 38, 'H', 'Marcos', 'Centro', 'Doença 7', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (85, 16, 'H', 'Luiz', 'Bairro 2', 'Doença 2', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (86, 54, 'M', 'Maria', 'Bairro 1', 'Doença 3', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (87, 53, 'M', 'Cintia', 'Bairro 2', 'Doença 4', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (88, 76, 'M', 'Maria', 'Centro', 'Doença 3', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (89, 61, 'H', 'Luiz', 'Centro', 'Doença 3', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (90, 51, 'M', 'Cintia', 'Centro', 'Doença 4', 'Mar');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (91, 48, 'H', 'Luiz', 'Centro', 'Doença 2', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (92, 13, 'M', 'Maria', 'Centro', 'Doença 6', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (93, 40, 'M', 'Maria', 'Bairro 1', 'Doença 6', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (94, 10, 'M', 'Maria', 'Centro', 'Doença 2', 'Mai');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (95, 65, 'M', 'Maria', 'Bairro 2', 'Doença 2', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (96, 73, 'H', 'Marcos', 'Bairro 2', 'Doença 1', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (97, 60, 'H', 'Marcos', 'Centro', 'Doença 7', 'Jan');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (98, 4, 'M', 'Luzia', 'Bairro 1', 'Doença 6', 'Jul');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (99, 22, 'H', 'Luiz', 'Bairro 2', 'Doença 1', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (100, 37, 'M', 'Luzia', 'Centro', 'Doença 3', 'Fev');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (101, 44, 'M', 'Maria', 'Bairro 2', 'Doença 2', 'Abr');
INSERT INTO `cad` (`id`, `idade`, `sexo`, `nome`, `bairro`, `doenca`, `mes`) VALUES (102, 6, 'H', 'Marcos', 'Centro', 'Doença 5', 'Jul');";

$rs = mysql_query($query);
if (!$rs) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
mysql_close();
?>

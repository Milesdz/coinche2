<?php
require("config.inc.php"); 
require("Database.class.php");

$db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE); 

$db->connect();

//get last id
$sql = "SELECT max(pkid) as pkid FROM ".TABLE_DONNE; 

$record = $db->query_first($sql);

$lastId = $record['pkid'];

$sql = "DELETE FROM `".TABLE_DONNE."` WHERE pkid = ".$lastId;

$db->query($sql);	

$db->close();  
?>		
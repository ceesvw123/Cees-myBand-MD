<?php

$dbhost = "localhost";
$dbuser	= "root";
$dbpass	= "root";
$dbname	= "myband";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);


$sql = "SELECT * FROM newsarticles";
$q	 = mysql_query($sql) or die(mysql_error());
$xml = "<items>";
while($r = mysql_fetch_array($q)){
    $xml .= "<item>";
    $xml .= "<title>".$r['title']."</title>";
    $xml .= "<url>".$r['pagename']."</url>";
    $xml .= "</item>";
}
$xml .= "</items>";
$sxe = new SimpleXMLElement($xml);
$sxe->asXML("menuitems.xml");

?>
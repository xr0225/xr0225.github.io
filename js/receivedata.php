<?php
	$sorttype = $_POST["sorttype"];

	$mydb = mysql_connect("localhost","root","dlql4248") or die ("Connection Error");
	mysql_query("set names utf8");

	if(!mysql_select_db('hellow',$mydb)) die ("Wrong Database");

	$sql = "select * from project_detail where title = '".$sorttype."'";
	$result = mysql_query($sql,$mydb);


	$row_array = mysql_fetch_array($result);

	
	$jsonyo='{"title":"'.$row_array["title"].'"
	,"role":"'.$row_array["role"].'"
	,"work":"'.$row_array["work"].'"
	,"FrameWork":"'.$row_array["FrameWork"].'"
	,"Languages":"'.$row_array["Languages"].'"
	,"comment":"'.$row_array["comment"].'"}';
	
	mysql_close($mydb);
	
	echo $jsonyo;

?>
<?php
	$name = $_POST["name"];
	
	  $mydb = mysql_connect("localhost","root","dlql4248") or die ("Connection Error");
	  mysql_query("set names utf8");

	  if(!mysql_select_db('hellow',$mydb)) die ("DataBase not found");
	
	$sql_tmp = "select url, name from images where name='".$name."'";
	$result = mysql_query($sql_tmp, $mydb);
	$tmp=mysql_fetch_array($result);
	
	echo '{"url":"'.$tmp['url'].'", "name":"'.$tmp['name'].'"}';
//'{"html":"amuguna","sorttype":"Hello"}'
//'{"html":"'.$html_text.'","sorttype":"'.$originalsorttype.'","thispage":"'.$thispage.'","maxpage":"'.$maxpage.'"}'
?>

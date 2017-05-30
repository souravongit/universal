<?php
if(!$link = mysql_connect(DB_HOST,DB_USER,DB_PASS))
{
	die(mysql_error());
}	
else
{
	mysql_select_db(DB_NAME,$link) or die("Could not select database ".DB_NAME);
}

function tb($tablename)
{
	if(TBL_PREFIX=="")	return $tablename;
	else return TBL_PREFIX."_".$tablename;
}
?>
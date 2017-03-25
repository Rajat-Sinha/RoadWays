<?php
require '_inc_/Head.inc.php';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='roadwayms';
if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) && !@mysql_select_db($mysql_db)){
	die('<script type="text/javascript">bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">Could not Connect to database or server</p> ");	</script>');
}

?>
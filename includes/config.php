<!--#############################################################-->
<!--######################## DB INFO ############################-->
<!--#############################################################-->
<?php 
//DB CONSTANTS
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

//Select DB
mysql_select_db('dbNameHere');

$sql = 'SELECT * FROM tableNameHere'; //sql query
$ret = mysql_query( $sql, $conn );

//Loop through array and spit out data
while($row = mysql_fetch_array($ret, MYSQL_ASSOC))
{
	//Echo db pulls here
}

//Close conn
mysql_close($conn);
	 
?>
<!--#############################################################-->
<!--######################## DB INFO ############################-->
<!--#############################################################-->


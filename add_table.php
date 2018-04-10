<html>
<title> Add Hall</title>
<?php
	function add_table($table_number)
	{
		$dbc = mysqli_connect("localhost","root1","1234","bokdb");
		if(!$dbc)
			die('NOT CONNECTED:' . mysql_error());
		
	
		$items = "\"".$table_number."\"";
		$query = "insert into `Halls`(`table_number`)values (".$items.");";
		$result = mysqli_query($query);
		echo "<script type=\"text/javascript\">"."\n";
			echo "alert(\"New Table Added!!!\");"."\n";
		echo "</script>"."\n";
	}
	add_table(
			//$_POST["hall_id_code"],
			$_POST["table_number"]);
?>
</script>
<body background = "1.png">
<meta HTTP-EQUIV="REFRESH" content="0; url=admin.html">
</body>
</html>

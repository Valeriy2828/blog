<?php
include "db.php";

function select(){
		$sql = "SELECT * FROM categories";
		$result = mysqli_query($db, $sql) or die(mysql_error());
		return db2array($result);	
	}
	
	<a href="#?id=<?php echo $new_1['id'] ?>">
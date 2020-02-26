<?php
require ("includes/config.php");

	$cat = mysqli_query($db, "SELECT * FROM `categories`");
		$category = array();
			while($cat_1 = mysqli_fetch_assoc($cat)){
		$category[] = $cat_1;
	}	
?>	
<nav class="change">
	<ul>
	<?php
		foreach($category as $cat_2){
	?>
		<li><a href="categories.php?id=<?php echo $cat_2['id']?>"><?php echo $cat_2['title']?></a></li>
	<?php
		}
	?>
	</ul>
</nav>


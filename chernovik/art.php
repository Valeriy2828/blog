<?php

require ("includes/config.php");

$art = mysqli_query($db, "SELECT * FROM `cinema`");
		while( $art_1 = mysqli_fetch_assoc($art)){
	?>	
	<div class="image" style="background-image: url(images/<?php echo $art_1['image'] ?>);"></div>
	<div class="description">
		<div class="title1">		
			<a href=#><b><font color = #00008B><?php echo $art_1['title'] ?></font></b></a>
		</div>
		<div class="category">
			<p><b>Категория:   &nbsp</b><a href=#>Кино</a></p>
		</div>
		<div class="years">
			<p><b>Год:  </b><font color = #00008B><?php echo $art_1['pubyear'] ?></font></p>
		</div>
		<div class="director">
			<p><b>Режиссер:  </b><font color = #00008B><?php echo $art_1['director'] ?></font></p>
		</div>
		<div class="actor">
			<p><b>В ролях:  </b><font color = #00008B><?php echo $art_1['customers'] ?></font></p>
		</div>
		<div class="text1">
			<p><?php echo mb_substr($art_1['text'], 0 ,500, 'utf-8') ?></p>
		</div>
	</div>
	<?php
		}
	?>	

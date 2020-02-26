
<div id="comment-add-form" class="block1">
	<h3>Добавить комментарий</h3>
		<div class="block_block">
			<form class="form" method="POST" action="article.php?id=<?php echo $art_1['id']; ?> #comment-add-form">
				<div class="form_group">
					<textarea class="form_control" name="text" placeholder="Текст комментария..."></textarea>																	
				</div>
				<div class="form_group2">
					<input type="submit" name="do_post" value="Добавить комментарий"class="form_control">																	
				</div>
			</form>
		</div>
</div>
<?php


?>


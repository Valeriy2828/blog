<?php
error_reporting( E_ERROR ); 
require ("includes/header.php");

?>
<div class="thirt_line">
	<div class="container">
		<div class="col-md-12">
			<div class="row2">
				<div class="rectangle_art">
					<div class="top">			
						<h2><?php echo $config['title2']?></h2>
					</div>																	
					<?php
					$full = (int)$_GET['id'];
					$art = mysqli_query($db, "SELECT * FROM `cinema` WHERE id= " . $full);

					if(mysqli_num_rows($art) <= 0){
					?>	
						<div class="stop">
							<h2>Статья не найдена</h2>
						</div>
					<?php		
					}

						$art_1 = mysqli_fetch_assoc($art);
						mysqli_query($db, "UPDATE `cinema` SET views = views + 1  WHERE id= " . $full);
					?>	
					<div class="image_art" style="background-image: url(images/<?php echo $art_1['image2'] ?>);"></div>
					<div class="description_art">							
					<div class="title_art">		
						<b><font color = #00008B><?php echo $art_1['title'] ?></font></b>
					</div>
					<div class="views">
						<?php
							$art_2 = $art_1['views'];
						?>
						<a><kbd><font color =  #191970><?php echo getTermination($art_2)?></font></kbd></a>
					</div>
					<div class="category_art">
					<?php
						$art_cat = false;
						foreach($cat as $kategor){
							if($kategor['id'] == $art_1['id_categories']){
								$art_cat = $kategor;
								break;
							}
						}
					?>
							<p><b>Категория:   &nbsp</b><a href="My_index.php?id=<?php echo $art_cat['id'] ?>"><?php echo $art_cat['title']?></a></p>
						</div>
						<div class="years_art">
							<p><b>Год:  </b><font color = #00008B><?php echo $art_1['pubyear'] ?></font></p>
						</div>
						<div class="director_art">
							<p><b>Режиссер:  </b><font color = #00008B><?php echo $art_1['director'] ?></font></p>
						</div>
						<div class="actor_art">
							<p><b>В ролях:  </b><font color = #00008B><?php echo $art_1['customers'] ?></font></p>
						</div>
						<div class="text_art">
							<p><?php echo mb_substr($art_1['text'], 0 ,5500, 'utf-8')?></p>
						</div>
					</div>
			</div>
		</div>									
					<?php
						$rectangle = mysqli_query($db, "SELECT * FROM `rectangle_image` WHERE id=1");
						while($row = mysqli_fetch_assoc($rectangle)){
					?>							
									<div class="rectangle5" style="background-image: url(images/<?php echo $row['image'] ?>);"></div>
					<?php				
						}				
					?>	
					<div class="rectangle6">
						<div class="top_title">
							<div class="top_new">
								<?php echo $config['title3']?>
							</div>
							<div class="new">
								<?php echo $config['title4']?>
							</div>
						</div>
						<?php
						$new = mysqli_query($db, "SELECT * FROM `new_cinema`");
							while( $new_1 = mysqli_fetch_assoc($new)){
						?>
								<div  class="new_image_1"> 
									 <a href="new_article.php?id=<?php echo $new_1['id'] ?>" title=<?php echo $new_1['title'] ?> ><div  class="new_image" style="background-image: url(images/<?php echo $new_1['image'] ?>);"></div></a>
								</div>											
						<?php 
							}
						?>
					</div>
				</div>	
			</div>		
										
<div class="block">
	<a href="#comment-add-form">Добавить свой</a>
	<h3>Комментарии</h3>
	
		<?php	
			$idn = (int)$art_1['id'];
			$comments = mysqli_query($db, "SELECT * FROM `comment` WHERE `articles_id` = '$idn' ORDER BY `id` DESC LIMIT 10");
			
			if(mysqli_num_rows($comments) <= 0){
		?>	
			<div class="no_info">
				<?php echo "Нет комментариев"; ?>
			</div>		
		<?php			
				}			
			while($comment = mysqli_fetch_assoc($comments)){
		?>	
			<div class="articles_info">
				<i class="fa fa-user" aria-hidden="true"></i>
				<?php echo $comment['user']; ?>
			</div>
			<div class="articles_preview">
				<p><?php echo $comment['text']; ?></p>
			</div>			
		
		<?php		
			}
		?>		
</div>
<?php							
if($_SESSION && $_SESSION['login']){									
?>	
<div id="comment-add-form" class="block1">	
	<h3>Добавить комментарий</h3>
		<div class="block_content">
			<form class="form" method="POST" action="article.php?id=<?php echo $art_1['id']; ?>#comment-add-form">
				<?php
					if(isset($_POST['do_post'])){
						$errors = array();						
							if($_POST['text'] == ""){
								$errors[] = "Введите текст комментария!";
							}
							if(empty($errors)){
								//Добавить комментарий
								$c = $_SESSION['login'];
								$textarea = $_POST['text'];
								$art_id = $art_1['id'];
									mysqli_query($db, "INSERT INTO `comment`(
																			`user`,`text`,`pubdate`,`articles_id`)
																			VALUES('$c','$textarea', NOW() ,'$art_id')");
									
									echo '<span style="color :green;font-weight: bold; margin-bottom: 10px; margin-left: 130px; display: block;">Комментарий успешно добавлен!!!</span>';
									 header("Location: article.php");
							}else{
								//Вывести ошибку
								echo '<span style="color :red;font-weight: bold; margin-bottom: 10px; margin-left: 130px; display: block;">'.$errors['0'].'</span>';
							}
					}
				?>								
				<div class="form_group">
					<textarea class="form_control" name="text" placeholder="Текст комментария..." ><?php echo $_POST['text']; ?></textarea>
				</div>
				<div class="form_group2">
					<input type="submit" name="do_post" value="Добавить комментарий" class="form_control">																	
				</div>																	
			</form>
		</div>
</div>
<?php
}else{
?>
			<div class="error_registr">	
				<p id="comment-add-form"><?php echo "<p>Незарегистрированные пользователи не могут оставлять комментарии!!!!"; ?></p>
			</div>
<?php			
			}
?>				
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

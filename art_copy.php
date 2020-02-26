<?php

require ("includes/header.php");
?>
			
									<h2><?php echo $config['title2']?></h2>
								</div>																	
							<?php
								$full = $_GET['id'];
								$art = mysqli_query($db, "SELECT * FROM `cinema` WHERE id= " . $full);
								
								if(mysqli_num_rows($art) <= 0){
							?>	
									<div class="stop">
										<h2>Статья не найдена</h2>
									</div>
							<?php		
								}
								
									while($art_1 = mysqli_fetch_assoc($art)){
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
										if($art_2 <= 4 and $art_2 > 0){
									?>
									<a><kbd><font color =  #191970><?php echo $art_2 ?> просмотрa</font></kbd></a>
									<?php
									}else{
									?>
									<a><kbd><font color =  #191970><?php echo $art_2 ?> просмотров</font></kbd></a>
									<?php
									}
									?>
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
							<?php
								}
							?>									
							</div>
						</div>
					</div>
							<?php
								$rectangle = mysqli_query($db, "SELECT * FROM `rectangle_image` WHERE id=1");
								while($row = mysqli_fetch_assoc($rectangle)){
							?>							
											<div class="rectangle24" style="background-image: url(images/<?php echo $row['image'] ?>);"></div>
							<?php				
								}				
							?>	
							<div class="rectangle3">
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
							
							<div class="comment">
								<div class="new_comments">
									<a href="#comment-add-form">Добавить комментарий</a>
								</div>
								<div class="block_content">
									<h3>Комментарии</h3>
								</div>
								<div class="articles_vertical">
								<?php
									$idn = (int)$art_cat['id'];									
										$comments = mysqli_query($db, "SELECT * FROM `comment` WHERE `articles_id` = " . $idn . "ORDER BY `id` DESC LIMIT 3");
										if(mysqli_num_rows($comments) <= 0){
											echo "Нет комментариев";
										}
										while($comm = mysqli_fetch_assoc($comments)){
								?>	
									<div class="articles_info">
										<a href="article.php?id=<?php echo $comm['articles_id']; ?>"><?php echo $_SESSION['login']; ?>"></a>
									</div>
									<div class="articles_preview">
										<?php echo mb_substr($comm['text'], 0 ,300, 'utf-8')?>
									</div>
								<?php
									}
								?>
								</div>
							</div>
							
							<div id="comment-add-form" class="block1">
								<h3>Добавить комментарий</h3>
									<div class="block_block">
										<form class="form" method="POST" action="/article.php?id=<?php $art_cat['id']; ?> #comment-add-form">
											<div class="form_group">
												<textarea class="form_control" name="text" placeholder="Текст комментария..."></textarea>																	
											</div>
											<div class="form_group2">
												<input type="submit" name="do_post" value="Добавить комментарий"class="form_control">																	
											</div>
										</form>
									</div>
							</div>
						</div>	
					</div>				
				</div>
			</div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

<?php
	
	require ("includes/header.php");
?>
			<div class="thirt_line">
					<div class="container">
						<div class="col-md-12">
							<div class="row2">
								<div class="rectangle1">
									<div class="top">
										<h2><?php echo $config['title2']?></h2>
									</div>																	
								<?php
									$art = mysqli_query($db, "SELECT * FROM `cinema`");
										while($art_1 = mysqli_fetch_assoc($art)){
								?>	
								<div class="image" style="background-image: url(images/<?php echo $art_1['image'] ?>);"></div>
								<div class="description">
									<div class="title1">		
										<a href="article.php?id=<?php echo $art_1['id'] ?>"><b><font color = #00008B><?php echo $art_1['title'] ?></font></b></a>
									</div>
									<div class="category">
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
									<div class="years">
										<p><b>Год:  </b><font color = #00008B><?php echo $art_1['pubyear'] ?></font></p>
									</div>
									<div class="director">
										<p><b>Режиссер:  </b><font color = #00008B><?php echo $art_1['director'] ?></font></p>
									</div>
									<div class="actor">
										<p><b>В ролях:  </b><font color = #00008B><?php echo mb_substr($art_1['customers'], 0 ,100, 'utf-8') ?></font></p>
									</div>
									<div class="text1">
										<p><?php echo mb_substr($art_1['text'], 0 ,550, 'utf-8') ?></p>
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
												<div class="rectangle4" style="background-image: url(images/<?php echo $row['image'] ?>);"></div>
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
							</div>	
						</div>				
					</div>
				</div>
    </header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
	
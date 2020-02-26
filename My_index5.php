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
									$book = mysqli_query($db, "SELECT * FROM `books`");
										while($book_1 = mysqli_fetch_assoc($book)){
								?>	
								<div class="image" style="background-image: url(images/<?php echo $book_1['image'] ?>);"></div>
								<div class="description">
									<div class="title1">		
										<a href="#?id=<?php echo $book_1['id'] ?>"><b><font color = #00008B><?php echo $book_1['title'] ?></font></b></a>
									</div>
									<div class="category">
									<?php
										$art_cat = false;
										foreach($cat as $kategor){
											if($kategor['id'] == $book_1['id_categories']){
												$art_cat = $kategor;
												break;
											}
										}
									?>
										<p><b>Категория:   &nbsp</b><a href="#?id=<?php echo $art_cat['id'] ?>"><?php echo $art_cat['title']?></a></p>
									</div>
									<div class="years">
										<p><b>Год:  </b><font color = #00008B><?php echo $book_1['pubyear'] ?></font></p>
									</div>
									<div class="director">
										<p><b>Автор:  </b><font color = #00008B><?php echo $book_1['author'] ?></font></p>
									</div>
									<div class="actor">
										<p><b>Жанр:  </b><font color = #00008B><?php echo $book_1['genre']?></font></p>
									</div>
									<div class="text1">
										<p><?php echo mb_substr($book_1['text'], 0 ,600, 'utf-8') ?></p>
									</div>
								</div>
								<?php
									}
								?>									
								</div>
							</div>
						</div>
								<?php
									$rectangle = mysqli_query($db, "SELECT * FROM `rectangle_image` WHERE id=4");
									while($row = mysqli_fetch_assoc($rectangle)){
								?>							
												<div class="rectangle24" style="background-image: url(images/<?php echo $row['image'] ?>);"></div>
								<?php				
									}				
								?>	
								</div>
								<div class="rectangle3">
									<div class="top_title">
										<div class="top_new">
											ТОП
										</div>
										<div class="new">
											НОВИНКИ
										</div>
									</div>
									<?php
									$books = mysqli_query($db, "SELECT * FROM `new_books`");
										while( $book_new_1 = mysqli_fetch_assoc($books)){
									?>
											<div  class="new_image_1"> 
												 <a href="#?id=<?php echo $book_new_1['id'] ?>" title=<?php echo $book_new_1['title'] ?> ><div  class="new_image" style="background-image: url(images/<?php echo $book_new_1['image'] ?>);"></div></a>
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
	/<?php //echo $row2['title']?>	<?php
										//$rectangle = mysqli_query($db, "SELECT * FROM `rectangle_image``");
											//$row = array();
											//while($row1 = mysqli_fetch_assoc($rectangle)){
												//$row[2] = $row1;
												//foreach($row as $row2) background-image: url("images/book.jpg");
									?>			
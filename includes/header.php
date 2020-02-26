<?php
//error_reporting( E_ERROR );
	require ("includes/config.php");
	include ("forma_reg/save_user.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">    
        <title><?php echo $config['title']?></title>
        <link rel="stylesheet" href="my-styles.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
        <link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
        <link rel="stylesheet" href="css/fonts.css" />
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/media.css" />	
    </head>
    <body>
	<header  class="top_header">
        <div class="header_topline">
                <div class="container">
                    <div class="col-md-12">
						<div class="row">
								<h1 align="center"><?php echo $config['title']?></h1>
						</div>	
                    </div>				
                </div>
        </div>
				<div class="second_line">
					<div class="container">
						<div class="col-md-12">
							<div class="row">
									<div class="four_link">
										<?php
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
												<li><a href="<?php echo $cat_2['file_name']?>?id=<?php echo $cat_2['id']?>"><?php echo $cat_2['title']?></a></li>
											<?php
												}
											?>
											</ul>
										</nav>										
									</div>
									<div class="top_links">
										<?php
										if(session_id() == '') {
											session_start();
										} 
											if($_SESSION && $_SESSION['login']){
										?>
												<i class="fa fa-user" aria-hidden="true"></i>																						
										<?php		
												echo $_SESSION['login']."<br>";
										?>																													
												<a href="out.php">Выход</a>																					
										<?php	
											}else { 
					
										?>											
												<a href="forma_reg/new_form.php">Вход</a> /
												<a href="forma_reg/exit.html">Регистрация</a>
												
										<?php 
											} 
										?>
									</div>
							</div>
						</div>
					</div>
				</div>
	</header>			
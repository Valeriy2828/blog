<?php
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
							<div class="hat_name">
								<h1><?php echo $config['title']?></h1>
							</div>
						</div>	
                    </div>				
                </div>
        </div>
				<div class="second_line">
					<div class="container">
						<div class="col-md-12">
							<div class="row1">
								<div class="letters">
									<?php
										$cat = mysqli_query($db, "SELECT * FROM `categories`");
									?>
								<nav class="change">
									<ul>
									<?php
										while( $cat_1 = mysqli_fetch_assoc($cat)){
									?>
										<li><a href="#"><?php echo $cat_1['title']?></a></li>
									<?php
										}
									?>
									</ul>
								</nav>									
									<div class="top_links">
										<?php
										session_start();
											if($_SESSION['login']){
										?>		
											<div class="s_user">
												<i class="fa fa-user" aria-hidden="true"></i>																						
										<?php		
												echo $_SESSION['login']."<br>";
										?>		
											</div>
											<div class="s_off">
										<?php		
												echo "Выход";
										?>
											</div>
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
				</div>
				<div class="thirt_line">
					<div class="container">
						<div class="col-md-12">
							<div class="row2">
								<div class="rectangle1">
									<div class="top">
										<h2>TOP-5</h2>
									</div>
									<div class="image">
									
									</div>
									<div class="description">
										<div class="title1">
											<a href=#><b><font color = #00008B>Очень страшное кино</font></b></a>
										</div>
										<div class="category">
											<p><b>Категория:   &nbsp</b><a href=#>Кино</a></p>
										</div>
										<div class="years">
											<p><b>Год:  </b><font color = #00008B>1999</font></p>
										</div>
										<div class="director">
											<p><b>Режиссер:  </b><font color = #00008B>Иннокентий Смоктуновский</font></p>
										</div>
										<div class="actor">
											<p><b>В ролях:  </b><font color = #00008B>Гоша Куценко, Вася Табуреткин, Паша Иуда</font></p>
										</div>
										<div class="text1">
											<p>Сколько трупов сможет оставить неизвестный маньяк, орудующий на территории средней школы,
											пока недалекие, а порой и невообразимо глупые ее воспитанники и учителя заняты своими делами?
											Эти американцы думают только о сексе, еде и наркотиках, но сумасшедший убийца заставляет их 
											побеспокоиться и о своих жизнях. Группа подростков до самого последнего момента не знает, кто,
											надев маску привидения, вооружается ножом и крюком портового грузчика, чтобы кромсать их в 
											клочья одного за другим. Кому суждено выжить в схватке с кровожадным безумцем, чтобы сорвать
											с его имени завесу тайны?</p>
										</div>										
									</div>
									<div class="image2">
									
									</div>
									<div class="description2">
										<div class="title2">
											<a href=#><b><font color = #00008B>Очень страшное кино</font></b></a>
										</div>
										<div class="category2">
											<p><b>Категория:   &nbsp</b><a href=#>Кино</a></p>
										</div>
										<div class="years2">
											<p><b>Год:  </b><font color = #00008B>1999</font></p>
										</div>
										<div class="director2">
											<p><b>Режиссер:  </b><font color = #00008B>Иннокентий Смоктуновский</font></p>
										</div>
										<div class="actor2">
											<p><b>В ролях:  </b><font color = #00008B>Гоша Куценко, Вася Табуреткин, Паша Иуда</font></p>
										</div>
										<div class="text2">
											<p>Сколько трупов сможет оставить неизвестный маньяк, орудующий на территории средней школы,
											пока недалекие, а порой и невообразимо глупые ее воспитанники и учителя заняты своими делами?
											Эти американцы думают только о сексе, еде и наркотиках, но сумасшедший убийца заставляет их 
											побеспокоиться и о своих жизнях. Группа подростков до самого последнего момента не знает, кто,
											надев маску привидения, вооружается ножом и крюком портового грузчика, чтобы кромсать их в 
											клочья одного за другим. Кому суждено выжить в схватке с кровожадным безумцем, чтобы сорвать
											с его имени завесу тайны?</p>
										</div>	
									</div>
									<div class="image3">
									
									</div>
									<div class="description3">
										<div class="title3">
											<a href=#><b><font color = #00008B>Очень страшное кино</font></b></a>
										</div>
										<div class="category3">
											<p><b>Категория:   &nbsp</b><a href=#>Кино</a></p>
										</div>
										<div class="years3">
											<p><b>Год:  </b><font color = #00008B>1999</font></p>
										</div>
										<div class="director3">
											<p><b>Режиссер:  </b><font color = #00008B>Иннокентий Смоктуновский</font></p>
										</div>
										<div class="actor3">
											<p><b>В ролях:  </b><font color = #00008B>Гоша Куценко, Вася Табуреткин, Паша Иуда</font></p>
										</div>
										<div class="text3">
											<p>Сколько трупов сможет оставить неизвестный маньяк, орудующий на территории средней школы,
											пока недалекие, а порой и невообразимо глупые ее воспитанники и учителя заняты своими делами?
											Эти американцы думают только о сексе, еде и наркотиках, но сумасшедший убийца заставляет их 
											побеспокоиться и о своих жизнях. Группа подростков до самого последнего момента не знает, кто,
											надев маску привидения, вооружается ножом и крюком портового грузчика, чтобы кромсать их в 
											клочья одного за другим. Кому суждено выжить в схватке с кровожадным безумцем, чтобы сорвать
											с его имени завесу тайны?</p>
										</div>
									</div>
									<div class="image4">
									
									</div>
									<div class="description4">
										<div class="title4">
											<a href=#><b><font color = #00008B>Очень страшное кино</font></b></a>
										</div>
										<div class="category4">
											<p><b>Категория:   &nbsp</b><a href=#>Кино</a></p>
										</div>
										<div class="years4">
											<p><b>Год:  </b><font color = #00008B>1999</font></p>
										</div>
										<div class="director4">
											<p><b>Режиссер:  </b><font color = #00008B>Иннокентий Смоктуновский</font></p>
										</div>
										<div class="actor4">
											<p><b>В ролях:  </b><font color = #00008B>Гоша Куценко, Вася Табуреткин, Паша Иуда</font></p>
										</div>
										<div class="text4">
											<p>Сколько трупов сможет оставить неизвестный маньяк, орудующий на территории средней школы,
											пока недалекие, а порой и невообразимо глупые ее воспитанники и учителя заняты своими делами?
											Эти американцы думают только о сексе, еде и наркотиках, но сумасшедший убийца заставляет их 
											побеспокоиться и о своих жизнях. Группа подростков до самого последнего момента не знает, кто,
											надев маску привидения, вооружается ножом и крюком портового грузчика, чтобы кромсать их в 
											клочья одного за другим. Кому суждено выжить в схватке с кровожадным безумцем, чтобы сорвать
											с его имени завесу тайны?</p>
										</div>
									</div>	
									<div class="image5">
									
									</div>
									<div class="description5">
										<div class="title5">
											<a href=#><b><font color = #00008B>Очень страшное кино</font></b></a>
										</div>
										<div class="category5">
											<p><b>Категория:   &nbsp</b><a href=#>Кино</a></p>
										</div>
										<div class="years5">
											<p><b>Год:  </b><font color = #00008B>1999</font></p>
										</div>
										<div class="director5">
											<p><b>Режиссер:  </b><font color = #00008B>Иннокентий Смоктуновский</font></p>
										</div>
										<div class="actor5">
											<p><b>В ролях:  </b><font color = #00008B>Гоша Куценко, Вася Табуреткин, Паша Иуда</font></p>
										</div>
										<div class="text5">
											<p>Сколько трупов сможет оставить неизвестный маньяк, орудующий на территории средней школы,
											пока недалекие, а порой и невообразимо глупые ее воспитанники и учителя заняты своими делами?
											Эти американцы думают только о сексе, еде и наркотиках, но сумасшедший убийца заставляет их 
											побеспокоиться и о своих жизнях. Группа подростков до самого последнего момента не знает, кто,
											надев маску привидения, вооружается ножом и крюком портового грузчика, чтобы кромсать их в 
											клочья одного за другим. Кому суждено выжить в схватке с кровожадным безумцем, чтобы сорвать
											с его имени завесу тайны?</p>
										</div>
									</div>
								</div>
							</div>
								<div class="rectangle2">
									
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
									<div class="my_new">
										<div  class="new_image">
											<a href=#><img src="images/passengers.jpg" width="180" height="180" title="Пaccажиры"></a>
										</div>
										<div  class="new_image2">
											<a href=#><img src="images/passengers.jpg" width="180" height="180" title="Пaccажиры"></a>
										</div>
										<div  class="new_image3">
											<a href=#><img src="images/passengers.jpg" width="180" height="180" title="Пaccажиры"></a>
										</div>
										<div  class="new_image4">
											<a href=#><img src="images/passengers.jpg" width="180" height="180" title="Пaccажиры"></a>
										</div>
										<div  class="new_image5">
											<a href=#><img src="images/passengers.jpg" width="180" height="180" title="Пaccажиры"></a>
										</div>
										
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
	
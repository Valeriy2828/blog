<?php

    session_start();
	
if (isset($_POST['login'])){
		$login = $_POST['login']; 
	if ($login == ''){
		unset($login);}
		}
		
if (isset($_POST['password'])){
		$password = $_POST['password'];
	if ($password ==''){
		 unset($password);} 
	}
    
if (empty($login) or empty($password)){
		exit 
		("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    
    $login = trim(strip_tags($login));
	$password = trim(strip_tags($password));

    include ("../includes/config.php");
 
	$result = mysqli_query($db, "SELECT * FROM users1 WHERE login='$login'");
		$myrow = mysqli_fetch_array($result);
    if (empty($myrow['password'])){
		exit ("Извините, введённый вами login или пароль неверный.");
    }
    else{
		if ($myrow['password']==$password){
			$_SESSION['login']=$myrow['login']; 
				$_SESSION['id']=$myrow['id'];
			echo "Вы успешно вошли на сайт! <a href='../My_index.php'>Главная страница</a>";
		}
		else{
			exit ("Извините, введённый вами login или пароль неверный.");
		}
    }
    ?>
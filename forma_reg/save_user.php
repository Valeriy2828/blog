﻿<?php
if((isset($_POST['login'])) || (isset($_POST['password']))){
	

    if (isset($_POST['login'])){ 
		$login = $_POST['login']; 
			if ($login == ''){ 
				unset($login);
			}	
		}
		
    if (isset($_POST['password'])){ 
		$password = $_POST['password'];
			if ($password == ''){ 
				unset($password);
			} 
		}
    
	if (empty($login) or empty($password)){		
		exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    
    $login = trim(strip_tags($login));
	$password = trim(strip_tags($password));
	
    include "../includes/config.php";
		$result = mysqli_query($db, "SELECT id FROM users1 WHERE login='$login'");
			$myrow = mysqli_fetch_array($result);
		if (!empty($myrow['id'])){
			exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
		}
		
    $result2 = mysqli_query ($db, "INSERT INTO users1 (login,password) VALUES('$login','$password')");
    
    if ($result2=='TRUE'){
		echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='../My_index.php'>Главная страница</a>";
	}
	else{
		echo "Ошибка! Вы не зарегистрированы.";
       }
	   
}
	   
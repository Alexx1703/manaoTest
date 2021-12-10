<?php
include 'model.php';
include 'model.json';

if((!empty($_POST['login'])) && (!empty($_POST['pass']))) {

	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

		if (mb_strlen($login)<5) {  //дополнительная защита
			header ('Location: enter.php');
		} 
		if (mb_strlen($pass)<5) {
   			header ('Location: enter.php');
		} 

		$connectDb = new Model("model.json"); //подключение к бд

		$res = $connectDb->selectTable($login); // поиск в базе данных по полю Логин

			if ($res !==false) {
            	while ($row = $res) { 
                	$loginDb = $row['login'];
                	$passDb = $row['pass'];
                break;
            	}

     			$sdd2= md5($pass ."gbphj3654");   
     			
     			if ($login === $loginDb && $sdd2 === $passDb) { // проверка совпадения логина и пароля в бд											
                	header('location: welcome.php');
            		} else {
            		header('location: enter.php');
            		}
    		}else{ 
            	header('location: enter.php');
        	}
	}else {
        header('location: index.php');
}
 
?>

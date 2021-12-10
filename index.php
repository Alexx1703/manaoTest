<?php

include 'include/header.php';
include 'model.php';

?>

<div class="container mt-4 col-4">
		<div class="col">
			<div id="result_form"></div> 
			<form action="check.php" id="reg" name="reg" method="POST">
				<h1>Регистрация</h1></br>
				<input type="text" class="form-control" name="login" id="login"  placeholder="Введите ваш логин (мин.6 символов)" minlength="6" required>
				</br>		
				<input type="text" class="form-control" name="pass" id="pass" placeholder="Введите ваше пароль (мин.6 букв или цифр)" pattern="^[A-Za-zА-Яа-яЁё0-9]*$" minlength="6"></br>
				<input type="text" class="form-control" name="conf_pass" id="conf_pass" placeholder="Подтвердите ваш пароль (пароли должны совпадать)" pattern="^[A-Za-zА-Яа-яЁё0-9]*$" minlength="6" required></br>
				<input type="email" class="form-control" name="email" id="email" placeholder="Введите ваш email"></br>
				<input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя (только 2 буквы)" pattern="[A-Za-zА-Яа-яЁё]{2}" minlength="2" maxlength="2" required></br>
				<p><a href="enter.php">Уже зарегистрированы?</a></p>
				<button type="submit" class="btn btn-success mb-2" value='submit' id="regist" name="regist">Зарегистрироваться</button>				
			</form>
		</div>	
</div>
	
<?php
include 'include/footer.php';
?>	


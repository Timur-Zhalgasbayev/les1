
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Тимур - Будущий разработчик)</title>
		<style>
			body {
				font-family: sans-serif;
			}
			dl{
				display: table-row;
			}
			dt, dd {
		        display: table-cell;
		        padding: 5px 10px;
			}
	    </style>
</head>
<body>
 <h1>Страница пользователя Тимур</h1>	

	<?php
	 
	 $user_name = "Тимур";
	 $user_age = 30;
	 $user_mail = "zhalgasbayev.k@gmail.com";
	 $user_city = "Москва";
	 $user_about = "Будущий разработчик)";

	 
	 ?>
	<dl>
		<dt>Имя</dt>
		<dd><?php echo $user_name?></dd>
	</dl>
	<dl>
		<dt>Возраст</dt>
		<dd><?php echo $user_age?></dd>
	</dl>
	<dl>
		<dt>Адрес электронной почты</dt>
		<dd>
			<a href="mailto:zhalgasbayev.k@gmail.com"><?php echo $user_mail?></a>
		</dd>
	</dl>
	<dl>
		<dt>Город</dt>
	    <dd><?php echo $user_city?></dd>
	</dl>
	<dl>
		<dt>О себе</dt>
		<dd><?php echo $user_about?></dd>
	</dl>


</body>
</html>
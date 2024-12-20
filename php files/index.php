<?php 
	session_start();	
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../m-css/styles.css">
	</head>
	<body>
		<?php 
			include 'foo.php';
		?>
		<div id="wrapper">
			<h1>Гостевая книга</h1>
			
			<div id="form">
				<?php 
					foreach ($arr as $text) {
						echo $text;
					}
				?>
				<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
					<p><label class="form-control" placeholder="Ваше имя" name="name">
						<?php if (isset($_SESSION['log'])) {
									echo $_SESSION['log'];
							}?></label></p>
					<p><textarea class="form-control" placeholder="Ваш отзыв" name="txt"></textarea></p>
					<p><input type="submit" class="btn btn-info btn-block" value="Отправить"></p>
				</form>
				<form action="autorisation.php">
				<input type="submit" class="btn btn-info btn-block" value="Назад">
				</form>
			</div>
		</div>
		<?php 
			
		?>
		<script type="text/javascript">
			let name = document.querySelector('#name');
			name.value = localStorage.getItem('names');
			name.oninput =function(){
				localStorage.setItem('names',name.value);
			}

		</script>
	</body>
</html>


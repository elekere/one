<!DOCTYPE html>
<html lang = "en-us">

<head>

	<style>
	
	blockquote {display: table; margin-bottom: 1em; border-bottom: 1px solid #ccc; padding: 0.5em;}
	blockquote p {display: table-cell; width: 90%; vertical-align: top;}
	
	</style>

</head>

	
	<body>
	
	<p><?=$totaljokes?> jokes have been submitted to My Joke Database</p>
	
	<?php foreach ($jokes as $joke): ?>
	
	<blockquote>
		<p>
		<?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?>
		
		(by <a href = "mailto: <?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8');?>">
								<?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8');?></a>)
								
								<form action = "deletejoke.php" method = "post">
								<input type = "hidden" name= "id" value = "<?=$jok['id']?>">
								
								<button name = "delete">Delete</button>
								</form>
								
								
		</p>
		</blockquote>
		
		<?php endforeach;?>
	
	</body>

</html>
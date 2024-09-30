<!doctype html>
<html>

	<head>
		<meta charset = "UTF-8">
		<title><?=$title?></title>
		<style>
		 header {
			 background-color: red;
			 margin-top: -20px;
		 }
		 
		 footer {
			 background-color: green;
		 }
		</style>
	</head>

	<body>

		<header> <h1>My Joke Database</h1></header>
		
		<nav>
			<ul> 
			<li> <a href = "index.php">Home</a> </li>
			<li> <a href = "jokes.php">Joke Lists</a> </li>
			<li><a href = "addjoke.php">Add a new Joke</a> </li>
			</ul>
		</nav>
		
		<main>
			<?=$output?>
		</main>
		
		<footer>
		&copy; MJDB 2018
		</footer>
	
	</body>

</html>
	
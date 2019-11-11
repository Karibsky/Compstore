<?php 

$connect = new mysqli('localhost','root','','compstore');

$connect->set_charset("utf8");

if($connect->connect_error) {
	die('Ошибка подключения');
}

$query = $connect->query('SELECT * FROM developers');

?>

<html>
<head>
	<title>Производители</title>
	<link rel="stylesheet" href="../css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-custom" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Compstore</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="main.php">Главная</a></li>
					<li><a href="/">Каталог</a></li>
					<li><a href="developers.php">Производители</a></li>
					<li><a href="contacts.php">Контакты</a></li>
				</ul> 
			</div>
		</div>
	</nav>
	<div class="developers-content">
		<div class="col-md-12">
			<div class="row">
				<?php while($query_res = $query->fetch_assoc()) { ?>
					<div class="developer col-12 col-sm-4 block">
						<img src="<?php echo $query_res['image']; ?>">
						<h3><?php echo $query_res['name'];?></h3>
						<p><?php echo $query_res['country']; ?></p>
						<a href="<?php $query_res['contacts'];?>"><?php echo $query_res['contacts']; ?></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
</body>
</html>

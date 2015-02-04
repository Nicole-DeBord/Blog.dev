<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'codeup');

require('db_connect.php');


$offset = 0;
$limit = 4;


if(empty($_GET['page'])) {
	$page = 1;
}


// Assign our current page number.
if(isset($_GET['page'])) {
	$page = $_GET['page'];
	$limit = 4;
	$offset = $limit * ($page - 1);
}


$parks = $dbc->query('SELECT name, location, date_established, area_in_acres FROM parks LIMIT ' . $limit . ' OFFSET ' . $offset)->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>National Parks Database</title>
</head>
<style>

	.container {
		background-color: #F9F9F9;
		opacity: 0.9;
		font-size: 125%;
		margin-top: 100px;
		padding: 30px;
		border-radius: 10px;

	}

	body {
		background-image: url('./img/zion.jpg');
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	    background-position: center; 
	    -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
		opacity: 0.9;
		background-color: #F9F9F9;
		font-size: 125%;
	}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><span class="glyphicon glyphicon-tree-conifer"></span> National Parks</h1>
				<table class="table">
					<thead>
					<tr>
						<th>Name</th>
						<th>Location</th>
						<th>Date Established</th>
						<th>Area in Acres</th>
					</tr>
					</thead>
					<? foreach ($parks as $key => $park): ?>
						<? $key++; ?>
						<tr>
						<? foreach ($park as $value): ?>
							<td><?= $value;?></td>
						<? endforeach; ?>
						</tr>
					<? endforeach; ?>
				</table>
					<? if($page > 1): ?> 
						<a href="?page=<?=$page - 1?>" class="btn btn-default pull-left" id="previous"> Previous </a>
					<? endif; ?>

					<? if($key == 4): ?> 
						<a href="?page=<?=$page + 1?>" class="btn btn-default pull-right" id="next"> Next </a>
					<? endif; ?>
			</div>
		</div>
	</div>
<body>
	
</body>
</html>
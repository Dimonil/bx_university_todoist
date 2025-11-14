<?php
require_once __DIR__ . "/../boot.php";
$todos = getTodos();
$title = "Todoist :: report";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/style.css">
	<title><?= $title; ?></title>
</head>
<body>
<section class="content">
	<header>
		<h1><?= $title; ?></h1>
		<span class="icon">[x]</span>
	</header>
	<main>


	</main>
	<footer>
		(c) <?= date('Y')?> TOdoiest by BX univer
	</footer>
</section>
</body>
</html>
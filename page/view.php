<?php
include __DIR__.'/../includes/dbconxn.php';
include __DIR__.'/../includes/functions.php';
try {
	$coffee = getCof($pdo,$_GET['id']);
	/* $title = getCof($pdo,$_GET['name']); */

	ob_start();
	include __DIR__.'/../templates/view.html.php';
	$output = ob_get_clean();

} catch (PDOException $e) {
	$title = 'An error has occurred';
	$output = 'Database error: '.$e->getMessage().' in '.$e->getFile().':'.$e->getLine();
}

include __DIR__.'/../templates/layout.html.php';
?>


<?php
	try {
		include __DIR__.'/../includes/dbconxn.php';
		include __DIR__.'/../includes/functions.php';
		$covfefe = allCof($pdo);

		$title = 'Covfefe db';
		
		ob_start();
		include __DIR__.'/../templates/browse.html.php';
		$output = ob_get_clean();

		} catch (PDOException $e) {
			$title = 'An error has occurred';
			$output = 'Database error: '.$e->getMessage().' in '.$e->getFile().':'.$e->getLine();
	    }
include __DIR__.'/../templates/layout.html.php';
?>

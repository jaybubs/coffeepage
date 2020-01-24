<?php
if (isset($_POST['name'])) {
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=cofdb;charset=utf8','chicken','kokoko');
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql = 'INSERT INTO `beans` SET
			`name` = :name,
			`process` =:process,
			`rating` =:rating';
		$stmt = $pdo->prepare($sql);
		$stmt->bindvalue(':name', $_POST['name']);
		$stmt->bindvalue(':process', $_POST['process']);
		$stmt->bindvalue(':rating', $_POST['rating']);
		$stmt->execute();
		
		header('location: browse.php');
		} catch (PDOException $e) {
			$title = 'An error has occurred';
			$output = 'Database error: '.$e->getMessage().' in '.$e->getFile().':'.$e->getLine();
	    }
} else {
    $title = 'Add new cof';
    ob_start();
    include __DIR__.'/../templates/addcoffee.html.php';
    $output=ob_get_clean();
}
include __DIR__.'/../templates/layout.html.php';
?>

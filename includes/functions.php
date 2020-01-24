<?php
/* collection of built functions to be used across all pages */

/* database query function */
function query($pdo, $sql, $params=[]) {
	$query = $pdo->prepare($sql);
	$query->execute($params);
	return $query;
}

/* select name rating process from beans */
function allCof($pdo) {
	$coffees = query($pdo, 'select `id`,`name`, `process`, `rating` from `beans`');
	return $coffees->fetchAll();
}

/* get a specific coffee */
function getCof($pdo,$id)
{
	$params=[':id'=>$id];
	$query=query($pdo,'select * from `beans` where `id` =:id',$params);
	return $query->fetch();
}

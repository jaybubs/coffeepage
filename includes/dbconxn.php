<?php
$pdo = new PDO('mysql:host=mariadb;dbname=cofdb;charset=utf8','chicken','kokoko'); 
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

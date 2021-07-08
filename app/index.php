<h1>Hello, World!</h1>
<?php
echo 'PHP version: ' . phpversion() . '<br/>';
$pdo = new PDO('mysql:host=mysql;dbname=database', 'user', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $pdo->query('SHOW VARIABLES like "version"');
$row = $query->fetch();
echo 'MySQL version: ' . $row['Value'] . '<br/>';
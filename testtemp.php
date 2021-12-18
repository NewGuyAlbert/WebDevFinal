<?php

include('./models/PDOConnection.php');

$pdo = new PDOConnection();
$pdo->testQuery();

?>
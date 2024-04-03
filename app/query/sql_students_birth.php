<?php
$year = $_POST['year'];
$sql_students = "SELECT * FROM `students` WHERE `date_of_birth` LIKE '%{$year}%'";
$result = $connection->query($sql_students);

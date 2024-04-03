<?php

$sql_students = "SELECT * FROM `students` WHERE `date_of_birth` LIKE '1990%'";
$result = $connection->query($sql_students);

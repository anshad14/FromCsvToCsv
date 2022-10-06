<?php
$output = fopen('output.csv', 'w');

// fputcsv($output, ['Rollno', 'name', 'gender']);

$f = fopen('student.csv', 'r');
while (!feof($f)) {
    $rows[] = fgetcsv($f);
}
foreach ($rows as $row) {
    fputcsv($output,$row);
}

fclose($f);
?>
<?php
$mysqli = new mysqli('localhost','yagodka','yagodka000','yagodka');

if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$results = $mysqli->query("SELECT id, text FROM test");

print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print '<tr>';
    print '<td>'.$row["id"].'</td>';
    print '<td>'.$row["text"].'</td>';
    print '</tr>';
}
print '</table>';

$results->free();
$mysqli->close();
?>
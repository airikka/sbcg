<html>
<title>Simpel Burndown Graph Generator</title>
<body>
<?php

$days = $_POST['days'];
$date = $_POST['date'];
$hours = $_POST['hours'];
$we = $_POST['we'];
$title = $_POST['title'];

header("Content-type:application/pdf");
header("Content-Disposition: attachment; filename=burndown-".date('Y-m-d-h-i-s').".pdf");
passthru("./generate_graph --output stdout --start-date $date --work-days $days --hours $hours --with-hd-we $we --title $title");

?>
<body>
</html>

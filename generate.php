<?php

$days = $_POST['days'];
$date = $_POST['date'];
$hours = $_POST['hours'];
$we = $_POST['we'];
$title = $_POST['title'];
$graph_button = isset($_POST['graph_button']);
$configfile = $_FILES['file']['tmp_name'];

if($graph_button){
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename=burndown-".date('Y-m-d-h-i-s').".pdf");
passthru("./generate --output stdout-graph --start-date $date --work-days $days --hours $hours --with-hd-we $we --title $title --config $configfile");
} else {
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=burndown-config-".date('Y-m-d-h-i-s').".txt");
passthru("./generate --output stdout-config --start-date $date --work-days $days --hours $hours --with-hd-we $we --title $title --config $configfile");
}

?>

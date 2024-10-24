<?php
$project_number=strpos($_SERVER['SCRIPT_NAME'], '/test.php');
$project_path=substr($_SERVER['SCRIPT_NAME'], 0, $project_number);

echo $project_path;
?>
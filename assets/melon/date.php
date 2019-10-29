<?php
$d = 'a';
$ex = explode(",",$d);
$all = array();
foreach ($ex as $row) {
	$post = array('medrec'=>'123456789','nama'=>$row,'author'=>1,'created'=>date("Y-m-h"));
	print_r ($post);
	echo "<br>";
	array_push($all,$post);
}
echo "<br>";
print_r ($all);
?>
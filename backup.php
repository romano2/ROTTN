<?php
function get_contents() {
    $data = file_get_contents("php://input");
// RBSD
    $filename=date("Y-m-d");
	if(file_put_contents($filename,$data)){
	}
	}
	get_contents();
?>
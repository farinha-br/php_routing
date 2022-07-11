<?php

$routes = array(
	"posts" => "post/posts.php",
    	"send" => "post/send.php",
    	"get" => "get/get.php",
    	"sendget" => "get/sendget.php"
    	"pic" => "views/pic.php",
    	"about" => "views/about.php"
);

if (isset($_GET['do'])) {
	$do = $_GET['do'];
	
	if (array_key_exists($do, $routes)) { 
		$url = $routes[$do];
		include $url; 
	} else {
		include "menu.php";
	}	
} else {
	include "menu.php";
}

?>

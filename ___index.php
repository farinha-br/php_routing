<?php
session_start();

if (isset($_GET['do'])) {
	$do = $_GET['do'];
	
	switch ($do) {
		case 'posts':
			include "post/posts.php";
			break;
		
		case 'send':
			include "post/send.php";
			break;
		
		case 'get':
			include "get/get.php";
			break;
		
		case 'sendget':
			include "get/sendget.php";
			break;
		
		case 'pic':
			include "views/pic.php";
			break;
			
		case 'about':
			include "views/about.php";
			break;
		
		default:
			header ('Location: index.php');
	}
} else {
	include "menu.php";
}

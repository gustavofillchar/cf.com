<?php
	//Create 11/10/2016 - Jonathan Marques.
	if(isset($_POST['codeCity']))
	{
		//Starting session.
		session_start();
		//Session that will save city.
		$_SESSION['city'] = $_POST['codeCity'];
		echo 1;
	}else
		echo 0;
?>
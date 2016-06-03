<?php
session_start();
if ($_SESSION['entrar'] != true) {
	header("Location: index.html");
}else{
	//session_abort();
}
?>

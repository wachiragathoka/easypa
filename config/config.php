<?php
if(!isset($_SESSION['sessionID'])){
	session_start();
	$_SESSION['sessionID']=time();
}
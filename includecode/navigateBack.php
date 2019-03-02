<!--
  Copyright (c) 2016, Eric Zhao and Youth Competitive Programming Circle, All Rights Reserved. 
  THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY 
  KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
  IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
  PARTICULAR PURPOSE.
  -->
<?php


include "../database.php"; 
$link = databaseviewconnect();

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

if (!(isset($_SESSION['pageid'])))
{
	$error = 'Cookies are not enabled.'; 
	include 'error.html.php'; 
}
$id = mysqli_real_escape_string($link, $_SESSION['pageid']);
$pagesarray = sortedrowdatabaseretrieve("maincoursestorage", "mainid", $link);
if (($id%1000) != 301){

	$key = array_search($id, $pagesarray);
	$newid = $pagesarray[$key - 1];



	header("Location: ../courses/" . $newid);

}else{

	if (((int)($id/1000))==1){
		header("Location: ../beginnerspython");
	}
	if (((int)($id/1000))==3){
		header("Location: ../webFundamentals");

	}
if (((int)($id/1000))==5){
		header("Location: ../begJava");

	}
}

die();

?>





<?php

if (!isset ($_POST['name']) && !isset ($_POST['promotion']) && !isset ($_POST['tel']) && !isset ($_POST['email']) && !isset ($_POST['motivation'])) 
{
header("location:services.html");
}
else 
{


$Name = Trim(stripslashes($_POST['name'])); 
$Promotion = Trim(stripslashes($_POST['promotion']));
$Tel = Trim(stripslashes($_POST['tel']));
$Email = Trim(stripslashes($_POST['email'])); 
$Motivation = Trim(stripslashes($_POST['motivation'])); 

$con = new mysqli( "localhost","root","");
		if ($con->connect_error) {die ("erreur de connexion");}
		$con->select_db("study_tour_dubai") ;

$req="insert into inscrit (nom,specialite,tel,email,motivation) values ('$Name','$Promotion','$Tel','$Email','$Motivation');";
$res = $con->query($req);

header("location:thanks.html");
}
?>
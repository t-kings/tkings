<?php
$db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');
$p = $_POST['p'];
$q = $_POST['q'];
$r = $_POST['r'];
$s = $_POST['s'];
$t = $_POST['t'];
//Hire Me

	$transdate = date("Y-m-d h:i:sa");
	
  // Finally, Deposit

	  
$depquery = "INSERT INTO clients (fullname, email, services, phonenumber, jobinfo, cdate) 
  			  VALUES('$p', '$q', '$s', '$r', '$t', '$transdate')";
   if ($db->query($depquery) === TRUE) {
    echo "Thank You, We will get back to you <br /> <a href='javascript:void(0)' class='happ' style='margin:auto;' onclick='mycloser()'> Done </a>";
}else {
  echo "Failed <br /> <br /> <a href='javascript:void(0)' class='happ' style='margin:auto;' onclick='mycloser()'> Done </a>";
}

$depqueryyy = "INSERT INTO suscribers (email, cdate) 
  		 VALUES('$cp', '$transdate')";


?>
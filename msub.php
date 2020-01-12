<?php
$p = $_POST['p'];
$q = $_POST['q'];
$r = $_POST['r'];
$s = $_POST['s'];
$t = $_POST['t'];
$db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');
//Hire Me

	$transdate = date("Y-m-d h:i:sa");
	
  // Finally, Deposit

	  
$depquery = "INSERT INTO messages (firstname, lastname, email, topic, content, cdate) 
  			  VALUES('$p', '$q', '$s', '$r', '$t', '$transdate')";
   if ($db->query($depquery) === TRUE) {
    echo "Thank You, We will get back to you <br /> <br /> <a href='javascript:void(0)' class='happ' style='margin:auto;' onclick='cmycloser()'> Done </a>";
}else {
  echo "Failed <br /> <br /> <a href='javascript:void(0)' class='happ' style='margin:auto;' onclick='cmycloser()'> Done </a>";
}


$depqueryyy = "INSERT INTO suscribers (email, cdate) 
  		 VALUES('$cp', '$transdate')";
?>
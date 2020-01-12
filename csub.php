<?php
$db = mysqli_connect('localhost', 'id10661862_tkings', 'tkings', 'id10661862_tkings');
$cp = $_POST['cp'];
//Hire Me
	$transdate = date("Y-m-d h:i:sa");
	
  // Finally, Deposit

	  
$depquery = "INSERT INTO suscribers (email, cdate) 
  		 VALUES('$cp', '$transdate')";
   if ($db->query($depquery) === TRUE) {
    echo "Thank you for suscribing to our news channel <br /> <br /> <a href='javascript:void(0)' class='happ' style='margin:auto;' onclick='cmycloser()'> Done </a>";
}     else {
  echo "Failed <br /> <br /> <a href='javascript:void(0)' class='happ' style='margin:auto;' onclick='cmycloser()'> Done </a>";
}

?>
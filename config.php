<?php
$makeconnection = mysqli_connect( 'p:localhost', 'webdev3425dv', 'PopTiger278596', 'webdev3425dv' );
//the 4 parameters of mysqli_connect: host string, user, password, db name, replace the 'dbuser', 'dbpass', 'dbname' with the ones you created in mySQL tatabases in cpanel
if ( !$makeconnection ) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}


//OPTIONAL: open a connection, if you succeed, echo the word 'connected'
if ( $makeconnection ) {
	//echo"connected";	
}

?>
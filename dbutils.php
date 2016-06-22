function connect()
{
	$dbhost = 'euclid.lab.knet.edu';
	$dbuser = 'tango';
	$dbpass = 'tango';
	$dbname = 'cs320tango';
	$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die ('Error connecting to mysql'.mysqli_connect_error());
	return $conn;
}

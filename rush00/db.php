<?PHP
// Enter your Host, username, password, database below.
$connect = mysqli_connect("localhost","root","root","db");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
?>

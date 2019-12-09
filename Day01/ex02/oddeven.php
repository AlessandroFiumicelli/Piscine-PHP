#!/usr/bin/php
<?PHP
while (1) {
		echo "Enter a nummber: ";
		$input = trim(fgets(STDIN));
		if (feof(STDIN))
		{
			print("^D\n");
			exit (0);
		}
		if (!(is_numeric($input)))
			print ("'$input'"." is not a number\n");
		else if ($input % 2 == 0)
			print ("The number "."$input"." is even\n");
		else
			print ("The number "."$input"." is odd\n");
}
?>

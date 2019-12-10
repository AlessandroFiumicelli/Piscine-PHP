#!/usr/bin/php
<?PHP
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	exit (0);
}

$p1 = trim($argv[1]);
$p2 = trim($argv[3]);
$op = trim($argv[2]);

if (strpos($op, "+") !== false)
	echo ($p1 + $p2)."\n";
else if (strpos($op, "-") !== false)
	echo ($p1 - $p2)."\n";
else if (strpos($op, "*") !== false)
	echo ($p1 * $p2)."\n";
else if (strpos($op, "/") !== false)
	echo ($p1 / $p2)."\n";
else if (strpos($op, "%") !== false)
	echo ($p1 % $p2)."\n";
?>

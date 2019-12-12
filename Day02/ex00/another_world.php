#!/usr/bin/php
<?PHP
if ($argc < 2)
	exit (0);
if (!$argv[1])
	exit (0);
$str = trim($argv[1]);
$str = preg_replace("/\s+/", " ", $str);
echo ($str."\n");
?>

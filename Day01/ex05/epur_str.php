#!/usr/bin/php
<?PHP
if ($argc != 2)
	return ;
print(trim(preg_replace('/ +/', " ", $argv[1]))."\n");
?>

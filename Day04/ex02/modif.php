<?php
if (!$_POST ||  $_POST['submit'] != "OK")
    exit("ERROR\n");
if ($_POST['login'] == NULL || $_POST['oldpw'] == NULL || $_POST['newpw'] == NULL)
    exit("ERROR\n");
$tmp = @file_get_contents('../private/passwd');
if (!$tmp)
    exit("ERROR\n");
$users = unserialize($tmp);
$found = false;
for ($i = 0; $users[$i]; $i++){
	if ($users[$i]['login'] == $_POST['login'] && $users[$i]['passwd'] == hash('whirlpool', $_POST['oldpw'])){
		$users[$i]['passwd'] = hash('whirlpool', $_POST['newpw']);
		$found = true;
		break ;
	}
}
if (!$found)
	exit ("Error\n");
file_put_contents('../private/passwd', serialize($users));
echo "OK\n";
?>

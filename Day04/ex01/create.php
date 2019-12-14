<?PHP
if (!$_POST || $_POST['submit'] != "OK" || $_POST['login'] == NULL || $_POST['passwd'] == NULL)
		exit ("ERROR\n");
$users = @file_get_contents('../private/passwd');
if (!$users) {
    $users = [];
    mkdir('../private');
}
else
    $users = unserialize($users);
for ($i = 0; $users[$i]; $i++){
	if ($users[$i]['login'] == $_POST['login']){
		echo "Error\n";
		exit (0);
	}
}
$users[$i] = [ 
			'login' => $_POST['login'],
			'passwd' => hash('whirlpool', $_POST['passwd'])
			];
file_put_contents("../private/passwd", serialize($users));
echo "OK\n";
?>

#!/usr/bin/php
<?PHP
if ($argc != 3)
	exit(0);
if (!($data = fopen($argv[1], 'r')))
	exit(0);
else
	fclose($data);
$data = file_get_contents($argv[1]);
$arr = explode("\n", $data);
$i = 0;
foreach($arr as $line){
	$d_a[$i] = explode(";", $line);
	$i++;
}
for ($i = 0; $d_a[0][$i]; $i++){
	if ($argv[2] == $d_a[0][$i])
		break;
}
if ($i > 4)
	exit (0);
for ($j = 1 & $k = 0; $d_a[$j][0]; $j++ & $k++){
	$n_a[$k] = $d_a[$j];
}
for ($j = 0; $n_a[$j + 1]; $j++){
	$n_a[$j] = $n_a[$j + 1];
}
$n_a[$j + 1] = NULL;
for ($j = 0; $n_a[$j]; $j++){
	$nn_a[$j] = $n_a[$j];
}
for ($j = 0; $nn_a[$j]; $j++){
	$key[$j] = $nn_a[$j][$i];
}
$keys = array('nom', 'prenom', 'mail', 'IP', 'pseudo');
for ($j = 0; $nn_a[$j]; $j++){
	$nom[$j] = $nn_a[$j][0];
	$prenom[$j] = $nn_a[$j][1];
	$mail[$j] = $nn_a[$j][2];
	$IP[$j] = $nn_a[$j][3];
	$pseudo[$j] = $nn_a[$j][4];
}
$last = array_combine($key, $nom);
$names = array_combine($key, $prenom);
$mails = array_combine($key, $mail);
$IPs = array_combine($key, $IP);
$pseudos = array_combine($key, $pseudo);
$o_a = array_combine($keys, array($last, $names, $mails, $IPs, $pseudos));
extract($o_a);
while (1){
	echo "Enter your command: ";
	$fd = fopen("php://stdin", 'r');
	$cmd = fgets($fd);
	if (!$line)
		break;
	fclose($fd);
	eval($cmd);
}
?>

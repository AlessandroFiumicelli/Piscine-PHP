#!/usr/bin/php
<?PHP
function average($grd){
	$arr = explode("\n", $grd);
	for ($i = 0; $arr[$i]; $i++){
		if (preg_match("/moulinette/", $arr[$i]))
			$arr[$i] = "";
	}
	$cnt = count($arr);
	for ($i = 0 & $j = 0; $i < $cnt; $i++){
		if ($arr[$i]){
			$n_a[$j] = $arr[$i];
			$j++;
		}
	}
	for ($i = 0 & $avg = 0 & $v_g = 0; $n_a[$i]; $i++){
		$stats = explode(';', $n_a[$i]);
		if ($stats[1] !== ""){
			$avg = $avg + (int)$stats[1];
			$v_g++;
			}
	}
	$avg /= $v_g;
	print($avg);
}
function moul_var($grd){
	$arr = explode("\n", $grd);
	$cnt = count($arr);
	for ($i = 0 & $j = 0; $i < $cnt; $i++){
		if ($arr[$i]){
			$n_a[$j] = $arr[$i];
			$j++;
		}
	}
	sort($n_a, SORT_STRING | SORT_FLAG_CASE);
	for ($i = 0 & $avg = 0 & $v_g = 0; $n_a[$i]; $i++){
		$stats = explode(';', $n_a[$i]);
		if ($stats[0] == "User")
			return ;
		$chk = explode(';', $n_a[$i + 1]);
		if ($stats[1] !== "" && $stats[2] != "moulinette"){
			$avg += (int)$stats[1];
			$v_g++;
		}
		if ($stats[2] == "moulinette")
			$mou = $stats[1];
		if ($stats[0] != $chk[0]){
			if ($v_g != 0)
				$avg /= $v_g;
			$avg -= $mou;
			print($stats[0].":".$avg.PHP_EOL);
			$avg = 0;
			$v_g = 0;
		}
	}
}
function usr_avg($grd){
	$arr = explode("\n", $grd);
	$cnt = count($arr);
	for ($i = 0 & $j = 0; $i < $cnt; $i++){
		if ($arr[$i]){
			$n_a[$j] = $arr[$i];
			$j++;
		}
	}
	sort($n_a, SORT_STRING | SORT_FLAG_CASE);
	for ($i = 0 & $avg = 0 & $v_g = 0 & $mou = 0; $n_a[$i]; $i++){
		$stats = explode(';', $n_a[$i]);
		if ($stats[0] == "User")
			return ;
		$chk = explode(';', $n_a[$i + 1]);
		if ($stats[1] !== "" && $stats[2] != "moulinette"){
			$avg += (int)$stats[1];
			$v_g++;
		}
		if ($stats[0] != $chk[0]){
			if ($v_g != 0)
				$avg /= $v_g;
			print($stats[0].":".$avg.PHP_EOL);
			$avg = 0;
			$v_g = 0;
			$mou = 0;
		}
	}
}
if ($argc < 2)
	exit (0);
$grd = "";
while (!feof(STDIN))
	$grd .= fgets(STDIN);
if ($argv[1] == "average")
	average($grd);
else if ($argv[1] == "average_user")
	usr_avg($grd);
else if ($argv[1] == "moulinette_variance")
	moul_var($grd);
?>

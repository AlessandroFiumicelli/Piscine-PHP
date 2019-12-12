#!/usr/bin/php
<?PHP
function day($day){
		if (preg_match("/^[Ll]undi$/", $day))
				return (1);
		if (preg_match("/^[Mm]ardi$/", $day))
				return (1);
		if (preg_match("/^[Mm]ercredi$/", $day))
				return (1);
		if (preg_match("/^[Jj]eudi$/", $day))
				return (1);
		if (preg_match("/^[Vv]endredi$/", $day))
				return (1);
		if (preg_match("/^[Ss]amedi$/", $day))
				return (1);
		if (preg_match("/^[Dd]imanche$/", $day))
				return (1);
		return (0);
}
function dnum($dnum){
		if (!ctype_digit($dnum))
				return (0);
		if ((int)$dnum < 0 || ($dnum > 31))
				return (0);
		return (1);
}
function month($month){
		if (preg_match("/^[Jj]anvier$/", $month))
				return ("01");
		if (preg_match("/^[Ff]evrier$/", $month))
				return ("02");
		if (preg_match("/^[Mm]ars$/", $month))
				return ("03");
		if (preg_match("/^[Aa]vril$/", $month))
				return ("04");
		if (preg_match("/^[Mm]ai$/", $month))
				return ("05");
		if (preg_match("/^[Jj]uin$/", $month))
				return ("06");
		if (preg_match("/^[Jj]uillet$/", $month))
				return ("07");
		if (preg_match("/^[Aa]oût$/", $month))
				return ("08");
		if (preg_match("/^[Ss]eptembre$/", $month))
				return ("09");
		if (preg_match("/^[Oo]ctobre$/", $month))
				return ("10");
		if (preg_match("/^[Nn]ovembre$/", $month))
				return ("11");
		if (preg_match("/^[Dd]écembre$/", $month))
				return ("12");
		return (NULL);
}
function year($year){
		if (!ctype_digit($year))
				return (0);
		if ((int)$year < 1970)
				return (0);
		return (1);
}
function tim($tim){
		if (!preg_match("/^[0-9]{2}:[0-9]{2}:[0-9]{2}$/", $tim))
				return (0);
		return (1);
}
function check_format($frt){
		if (day($frt[0]) != 1){
				return (0);}
		if (dnum($frt[1]) != 1)
				return (0);
		if (($mth = month($frt[2])) == NULL)
				return (0);
		if (year($frt[3]) != 1)
				return (0);
		if (tim($frt[4]) != 1)
				return (0);
		return (1);
}
if ($argc != 2)
		exit (0);
if (!$argv)
		exit (0);
$frt = explode(" ", $argv[1]);
check_format($frt);
if (count($frt) != 5){
		echo "Wrong Format\n";
		exit (0);
}
if (check_format($frt) != 1){
		echo "Wrong Format\n";
		exit (0);
}
$mth = month($frt[2]);
$tim = explode(":", $frt[4]);
if ($tim[0] > 0)
		$tim[0] = $tim[0] - 1;
if ($tim[1] > 0)
		$tim[0] = $tim[0] - 1;
if ($tim[2] > 0)
		$tim[0] = $tim[0] - 1;
$tmstp = mktime((int)$tim[0], (int)$tim[1], (int)$tim[2], (int)$mth, (int)$frt[1], (int)$frt[3]);
print($tmstp."\n");
?>

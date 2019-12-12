#!/usr/bin/php
<?PHP
if ($argc < 2)
	exit (0);
$site = $argv[1];
$s_nm = basename($argv[1]);
if (!($dir = @opendir($s_nm)))
	mkdir($s_nm);
else
	closedir($dir);
$ch = curl_init($argv[1]);
$curl_opt = [
	CURLOPT_HEADER => false,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true
];
curl_setopt_array($ch, $curl_opt);
$html = curl_exec($ch)."\0";
file_put_contents("g.html", $html);
$page = file_get_contents("g.html");
unlink("g.html");
preg_match_all('/<img[^>]*src=[\"|\'](.*)[\"]/Ui', $page, $out);
foreach ($out[1] as $url){
	if (!preg_match('/^http/', $url))
		$url = $argv[1].$url;
	$f_nm = $s_nm."/".basename($url);
	$img = curl_init($url);
	curl_setopt_array($img, $curl_opt);
	$pic = curl_exec($img);
	file_put_contents($f_nm, $pic);
	curl_close($img);
}
curl_close($ch);
?>

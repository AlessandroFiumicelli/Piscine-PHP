#!/usr/bin/php
<?PHP
function ft_split($str){
		$tmp = trim($str);
		$tmp = preg_replace('/\s+/', " ", $tmp);
		if (!$tmp)
			return (NULL);
		$array = explode(' ', $tmp);
		sort($array);
		return ($array);
}
?>

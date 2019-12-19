<?PHP
abstract class Targaryen {
	public function resistsFire() {
		return (FALSE);
	}
	public function getBurned() {
		if ($this->resistsFire() == TRUE)
			$str= "emerges naked but unharmed";
		else
			$str = "burns alive";
		return ($str);
	}
}
?>

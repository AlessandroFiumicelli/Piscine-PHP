<?PHP
class NightsWatch implements IFighter{
	private $strs;
	
	public function recruit($new){
		if ($new instanceof IFighter)
			$this->strs[] = $new;
	}
	public function fight(){
		foreach ($this->strs as $fate)
			$fate->fight();
	}
}
?>

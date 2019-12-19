<?PHP
class tyrion extends Lannister{
	public function with($prt){
		if (get_parent_class($prt) !== 'Lannister')
			return ("Let's do this.");
		else
			return ("Not even if I'm drunk !");
	}
}
?>

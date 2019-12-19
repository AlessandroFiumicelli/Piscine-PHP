<?PHP
Class Jaime extends Lannister{
	public function with($prt) {
		if (get_parent_class($prt) !== 'Lannister')
			return ("Let's do this.");
		else if (get_class($prt) == 'Cersei')
			return ("With pleasure, but only in the tower in Winterfell, then.");
		else
			return ("Not even if I'm drunk !");
	}
}
?>

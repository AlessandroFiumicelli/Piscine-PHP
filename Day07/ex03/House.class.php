<?PHP
abstract class House{
				abstract function getHouseName();
				abstract function getHouseMotto();
				abstract function getHouseSeat();
				abstract function introduce(){
									$House = $this->getHouseName();
									$Motto = $this->getHouseMotto();
									$Seat = $this->getHouseSeat();
									print("House ".$House."of ".$Seat.' : "'.$Motto.'"'.PHP_EOL);
				}
}
?>

<?php

declare(strict_types=1);

namespace blugin\cropplus\block;

use pocketmine\item\Item;

class Wheat extends Crops{
	protected $id = self::WHEAT_BLOCK;

	public function getName(){
		return "Wheat Block";
	}

	public function getDrops(Item $item){
		$drops = [];
		if($this->meta >= 0x07){
			$drops[] = [Item::WHEAT, 0, 1];
			$drops[] = [Item::WHEAT_SEEDS, 0, mt_rand(0, 3)];
		}else{
			$drops[] = [Item::WHEAT_SEEDS, 0, 1];
		}
		return $drops;
	}
}
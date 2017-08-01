<?php

namespace AdvancedCutClean;

use pocketmine\block\Block;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

public function onEnable() {
  $this->getLogger()->info("AdvancedCutClean enabled! Made by inovamc");

  }

public function onDisable() {
  $this->getLogger()->info("AdvancedCutClean Disabled!");

 }

  $this->getServer()->getPluginManager()->registerEvents($this, $this);

}

public function onBreak(BlockBreakEvent $event) {

switch ($event->getBlock()->getId()) {

case Block::GOLD_ORE:
  $event->setDrops(array(Item::get(Item::GOLD_INGOT, 0, 1)));

   break;

case Block::IRON_ORE:

  $event->setDrops(array(Item::get(Item::IRON_INGOT, 0, 1)));

   break;

case Block::COAL_ORE:

  $event->setDrops(array(Item::get(Item::TORCH, 0, 4)));

  }
}

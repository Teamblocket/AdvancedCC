<?php

namespace AdvancedCutClean;

use pocketmine\block\Block;
use pocketmine\item\Item;

class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener {
  
  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("AdvancedCutClean enabled! Made by inovamc");
 }
  
  public function onDisable() {
    $this->getLogger()->info("AdvancedCutClean Disabled!");
  }
  
  public function onBreak(\pocketmine\event\block\BlockBreakEvent $event) {
    $player = $event->getPlayer();
    switch ($event->getBlock()) {
      
      case Block::GOLD_ORE: 
      $player->getInventory()->addItem(Item::get(Item::GOlD_INGOT, 0, 1)); 
      return true;
      break;
                                         
      case Block::IRON_ORE: 
      $player->getInventory()->addItem(Item::get(Item::IRON_INGOT, 0, 1));
      return true;
      break;
      
      case Block::COAL_ORE: 
      $player->getInventory()->addItem(Item::get(Item::TORCH, 0, 1)); 
      return true;
      break;
    }
  }
}

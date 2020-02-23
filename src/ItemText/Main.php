<?php
/*
   _____  .__                .___  __          ____  ________
  /  _  \ |  |   ____ ___  __|   |/  |________/_   |/  _____/
 /  /_\  \|  | _/ __ \\  \/  /   \   __\___   /|   /   __  \ 
/    |    \  |_\  ___/ >    <|   ||  |  /    / |   \  |__\  \
\____|__  /____/\___  >__/\_ \___||__| /_____ \|___|\_____  /
        \/          \/      \/               \/           \/ 
*/

namespace ItemText;

//Plugin
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;

//Utils
use pocketmine\utils\TextFormat;

//Event
use pocketmine\event\Listener;
use pocketmine\event\entity\ItemSpawnEvent;

//Server
use pocketmine\Server;

//Item
use pocketmine\item\Item;

//Entity
use pocketmine\entity\Entity;


class Main extends PluginBase implements Listener
{

    public function onEnable() {
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->notice(TextFormat::LIGHT_PURPLE."ItemDisplayText Enabled");
    }
    
    public function onDisable() {
        $this->getLogger()->notice(TextFormat::LIGHT_PURPLE."ItemDisplayText Disabled!");
    }

    public function onItemSpawn(ItemSpawnEvent $e){
        $item = $e->getEntity();
        $item = $entity->getItem();
        $name = $item->getName();
        $item->setNameTag(TextFormat::LIGHT_PURPLE.$name);
        $item->setNameTagVisible(true);
        $item->setNameTagAlwaysVisible(true);
    }
}

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

use pocketmine\plugin\Plugin;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\event\entity\ItemSpawnEvent;
use pocketmine\entity\Entity;


class Main extends PluginBase implements Listener
{

    public function onEnable() {
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onDisable() {
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

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
        //Config soon!!!!!
    }
    
    public function onDisable() {
        $this->getLogger()->notice(TextFormat::LIGHT_PURPLE."ItemDisplayText Disabled!");
    }

    public function onThrow(ItemSpawnEvent $event){
        //Soon perWorld config!!!
        $player = $event->getPlayer();
        $name = $player->getName();
       
        $entity = $e->getEntity();
        $item = $entity->getItem();
        $itemname = $item->getName();
        $entity->setNameTag(TextFormat::LIGHT_PURPLE.$itemname);
        $entity->setNameTagVisible(true);
        $entity->setNameTagAlwaysVisible(true);
        //Message onThrow
        #$player->sendMessage(TextFormat::GRAY."You threw "TextFormat::LIGHT_PURPLE. $itemname);
    }
}

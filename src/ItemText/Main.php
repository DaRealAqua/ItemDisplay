<?php
/*
  ____        ____            _    _                     
 |  _ \  __ _|  _ \ ___  __ _| |  / \   __ _ _   _  __ _ 
 | | | |/ _` | |_) / _ \/ _` | | / _ \ / _` | | | |/ _` |
 | |_| | (_| |  _ <  __/ (_| | |/ ___ \ (_| | |_| | (_| |
 |____/ \__,_|_| \_\___|\__,_|_/_/   \_\__, |\__,_|\__,_|
                                          |_|            
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
        $this->getLogger()->notice(TextFormat::GREEN."ItemDisplayText Enabled");
        //Config soon!!!!!
    }
    
    public function onDisable() {
        $this->getLogger()->notice(TextFormat::RED."ItemDisplayText Disabled!");
    }

    //Don't edit anything unless you know what you're doing!!

    public function onThrow(ItemSpawnEvent $event){
  
        $entity = $event->getEntity();

        $item = $entity->getItem();
        $itemname = $item->getName();

        $entity->setNameTag(TextFormat::LIGHT_PURPLE.$itemname);

        $entity->setNameTagVisible(true);
        $entity->setNameTagAlwaysVisible(true);
        
    }

    
}

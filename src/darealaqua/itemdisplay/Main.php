<?php

/*
  ____        ____            _    _                     
 |  _ \  __ _|  _ \ ___  __ _| |  / \   __ _ _   _  __ _ 
 | | | |/ _` | |_) / _ \/ _` | | / _ \ / _` | | | |/ _` |
 | |_| | (_| |  _ <  __/ (_| | |/ ___ \ (_| | |_| | (_| |
 |____/ \__,_|_| \_\___|\__,_|_/_/   \_\__, |\__,_|\__,_|
                                          |_|            
*/

namespace darealaqua\itemdisplay;

use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\entity\Entity;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\entity\ItemSpawnEvent;

class Main extends PluginBase implements Listener
{

    public function onEnable() 
    {
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(C::GREEN . " Enabled");
        // TODO: CONFIG
    }
    
    public function onDisable() 
    {
        $this->getLogger()->info(C::RED . " Disabled!");
    }


    public function onSpawn(ItemSpawnEvent $event)
    {
        $entity = $event->getEntity();
        $item = $entity->getItem();
        $iname = $item->getName();
	$icount = $item->getCount();
        $entity->setNameTag(C::GRAY . $icount . "x " . $iname);
        $entity->setNameTagVisible(true);
        $entity->setNameTagAlwaysVisible(true);
    }
}

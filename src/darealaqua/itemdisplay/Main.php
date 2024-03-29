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

    protected function onEnable() : void
    {
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
        // TODO: CONFIG
    }
	
    public function onSpawn(ItemSpawnEvent $event) : void
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

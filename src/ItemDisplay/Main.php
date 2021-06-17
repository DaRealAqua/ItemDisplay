<?php
/*
  ____        ____            _    _                     
 |  _ \  __ _|  _ \ ___  __ _| |  / \   __ _ _   _  __ _ 
 | | | |/ _` | |_) / _ \/ _` | | / _ \ / _` | | | |/ _` |
 | |_| | (_| |  _ <  __/ (_| | |/ ___ \ (_| | |_| | (_| |
 |____/ \__,_|_| \_\___|\__,_|_/_/   \_\__, |\__,_|\__,_|
                                          |_|            
*/

namespace ItemDisplay;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\utils\TextFormat as C;
use pocketmine\event\Listener;
use pocketmine\event\entity\ItemSpawnEvent;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\entity\Entity;

class Main extends PluginBase implements Listener
{

    public function onEnable() {
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->notice(TextFormat::GREEN." Enabled");
        // TODO: CONFIG
    }
    
    public function onDisable() {
        $this->getLogger()->notice(TextFormat::RED." Disabled!");
    }

    // TODO: CONFIG
    public function onSpawn(ItemSpawnEvent $event){
        $entity = $event->getEntity();
        $item = $entity->getItem();
        $iname = $item->getName();
	$icount = $item->getCount();
        $entity->setNameTag(C::GREEN . $icount . "x " . $iname);
        $entity->setNameTagVisible(true);
        $entity->setNameTagAlwaysVisible(true);
    }
}

<?php

namespace message;

use pocketmine\plugin\PluginBase;

class main extends PluginBase{
    public function onEnable(){
        $this->getLogger()->info("Plugin enabled");
        $this->getServer()->getPluginManager()->registerEvents(new MessageEvent(), $this);
    }
    public function onDisable(){
        $this->getLogger()->info("Plugin disabled");
    }
    public function onLoad(){
        $this->getLogger()->info("Plugin loading");
    }
}


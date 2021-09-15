<?php

namespace message;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\utils\TextFormat;

class MessageEvent implements Listener{

    public function Join(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $event->setJoinMessage(TextFormat::RED . $player->getName() . TextFormat::GRAY . " Has joined the game! WhoHoo!");
    }
    public function Quit(PlayerQuitEvent $event){
        $player = $event->getPlayer();
        $event->setQuitMessage(TextFormat::RED . $player->getName() . TextFormat::GRAY . " Has left the game! BooHoo!");
    }
}




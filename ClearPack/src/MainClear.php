<?php

namespace ClearPack;

use pocketmine/Server;
use pocketmine/Player;
use pocketmine/plugin/PLuginBase;
use pocketmine/EventListener;

use pocketmine/Command;
use pocketmie/command/CommandSender;

class Commands extends PluginBase implements Listener{
    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {

            switch($cmd->getName()){
                case "ClearInv":
                    if($sender instanceof Player){
                    if($sender->hasPermission)("clearinv.use")
                        $sender->getInventory()->clearAll();

            switch($cmd->getName()){
                case "ClearArmor:"
                    if($sender instanceof Player){
                    if($sender->hasPermission)("cleararmor.use")
                        $sender->getArmor()->clearAll();

            switch($cmd->getName()){
                case "ClearAll"
                    if($sender instanceof Player){
                    if($sender->hasPermission)("clearall.use")
                        $sender->getArmor()->clearAll();
                        $sender->getInventory()->clearAll();
                }
            }

                    }
            }
    }
}
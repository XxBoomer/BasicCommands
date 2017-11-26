<?php

namespace BasicCommands;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;

class Main extends PluginBase{
	
	public function onEnable(){
		$this->getServer()->getLogger()->info("BasicCommands enabled!");
	}
	
	public function onDisable(){
		$this->getServer()->getLogger()->info("BasicCommands disabled!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			
			case "clear":
				if($sender instanceof Player){
					$sender->getInventory()->clearAll();
				}
			break;

		}
		return true;
	}

}

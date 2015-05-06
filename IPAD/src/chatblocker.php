<?php
namespace IPAD;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
 
class Main extends PluginBase {
	public function onRun($player)
	{
		        $player = $this->player;
                $player->sendPopup("Welcome To Quantum Works MC");
	}
        public function onEnable (){
        $this->getLogger()->info("I've been loaded!");
               
        }
       
}

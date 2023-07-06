<?php

namespace skyss0fly\Jokes;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\world\Position;
class Main extends PluginBase implements Listener {
  public function onEnable(): void {
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }



public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        if(!$sender instanceof Player){
            $sender->sendMessage("Please Use this command in game!");
            return false;
       $adultrating = $this->getConfig("Adult");
      $adult = $this->getFile("Jokes" . yml)getConfig("AdultJokes");
    
        switch($command->getName()){
            case "joke":
          if $adultrating == true:
                $sender->sendMessage($adult);
          else
          $sender->sendMessage($joke);
                return true;
            default:
                throw new \AssertionError("This line will never be executed");
        }
    }
}

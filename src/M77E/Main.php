<?php

namespace M77E;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;

class Main extends PluginBase implements Listener {
    public function onEnable()
    {
        $this->getLogger()->info(TextFormat::GREEN."enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onDisable()
    {
         $this->getLogger()->info(TextFormat::GREEN."disable");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
        switch ($command->getName()){
            case "ops";
                foreach ($this->getServer()->getOps() as $ops);
                if ($sender->hasPermission(m77e.ops)){
                    $sender->sendMessage(TextFormat::GRAY."OPS = $ops");
                }
                
        }
    }
}
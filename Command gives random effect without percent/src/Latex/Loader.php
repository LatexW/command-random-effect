<?php

namespace Latex;

use Latex\Commands\TestCommand;
use pocketmine\plugin\PluginBase;

class Loader extends PluginBase {

    public function onEnable() : void {
        $this->initCommands();
    }

    public function initCommands() : void {
        $commandMap = $this->getServer()->getCommandMap();

        $commandMap->registerAll("Latex", [
            new TestCommand()
        ]);
    }
}
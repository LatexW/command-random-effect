<?php
//without %
namespace Latex\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;

class TestCommand extends Command
{

	public function __construct()
	{
		parent::__construct("test", "test command", "/test");
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args)
	{

		$effects = [
			new EffectInstance(VanillaEffects::POISON(), 30, 2, true, true),
			new EffectInstance(VanillaEffects::BLINDNESS(), 30, 2, true, true),
			new EffectInstance(VanillaEffects::SPEED(), 30, 2, true, true)

		];

		$sender->getEffects()->add($effects[array_rand($effects)]);

	}

}
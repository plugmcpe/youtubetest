<?php
namespace YoutubeTest;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase{

public function onEnable(){
 $this->getServer()->getLogger()->info("YoutubeTest enable");
 $this->getLogger()->info("everything good");
 }
 public function onDisable(){
 $this->getServer()->getLogger()->info("youtubetest disabel");
  }
 }
 


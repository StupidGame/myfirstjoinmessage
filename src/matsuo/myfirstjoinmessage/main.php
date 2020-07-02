<?php
namespace matsuo\myfirstjoinmessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener {
  
  public function onEnable() {
    // これが無いとプレイヤーが入ってきても反応しない！
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onJoin(PlayerJoinEvent $event) {
    $player = $event->getPlayer();// 入ってきたプレイヤーを取得
    $name = $player->getName();// プレイヤーから名前を取得
    $event->setJoinMessage($name . "さんが参加しました！");// PlayerJoinEventのsetJoinMessage関数を呼び出す
  }
}
<?php
namespace AppZap\PHPFrameworkEmptyPlugin;

use AppZap\PHPFramework\SignalSlot\Dispatcher as SignalSlotDispatcher;

class PluginLoader {
  public function __construct() {
    // Your code goes here.
    // The PluginLoader is called at a very early stage even before the PHPFramework is bootstrapped,
    // but you can use SignalSlotDispatcher::registerSlot() to register your functionality.
  }
}

new PluginLoader();
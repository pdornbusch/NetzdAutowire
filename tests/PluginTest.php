<?php

namespace NetzdAutowire\Tests;

use NetzdAutowire\NetzdAutowire as Plugin;
use Shopware\Components\Test\Plugin\TestCase;

class PluginTest extends TestCase
{
    protected static $ensureLoadedPlugins = [
        'NetzdAutowire' => []
    ];

    public function testCanCreateInstance()
    {
        /** @var Plugin $plugin */
        $plugin = Shopware()->Container()->get('kernel')->getPlugins()['NetzdAutowire'];

        $this->assertInstanceOf(Plugin::class, $plugin);
    }
}

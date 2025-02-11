<?php

use PHPUnit\Framework\TestCase;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

final class EmptyTest extends TestCase
{
    public function testAddingPlayers(): void
    {
        $game = new Game();
        $this->assertSame(0, $game->howManyPlayers());
    }
}

<?php

use PHPUnit\Framework\TestCase;
include __DIR__.'/../Game.php';

final class EmptyTest extends TestCase
{
    public function testAddingPlayers(): void
    {
        $game = new Game();
        $this->assertSame(0, $game->howManyPlayers());
    }
}

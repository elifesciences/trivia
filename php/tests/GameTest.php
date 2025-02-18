<?php

use PHPUnit\Framework\TestCase;

final class GameTest extends TestCase
{
    /**
     * @dataProvider addingPlayersProvider
     */
    public function testAddingPlayers(array $players, int $expectedPlayerCount): void
    {
        $game = new Game();
        foreach ($players as $player) {
            $game->add($player);
        }
        $this->assertSame($expectedPlayerCount, $game->howManyPlayers());
    }

    public function addingPlayersProvider(): array
    {
        return [
            [
                [], // no players
                0   // expected player count
            ],
            [
                ['Alice'], // 1 player
                1   // expected player count
            ],
        ];
    }
}

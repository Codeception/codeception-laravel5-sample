<?php

use App\User;

class DatabaseSeederCest
{
    public function firstTest(SeederTester $I)
    {
        $users = User::all()->toArray();
        $I->assertCount(1, $users);
    }

    public function secondTest(SeederTester $I)
    {
        $users = User::all()->toArray();
        $I->assertCount(1, $users);
    }
}

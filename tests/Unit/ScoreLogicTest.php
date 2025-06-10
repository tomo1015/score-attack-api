<?php

namespace Tests\Unit;

use App\Logic\ScoreLogic;
use App\Models\U\User;
use App\Service\ScoreService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ScoreLogicTest extends TestCase
{
    use RefreshDatabase;

    protected ScoreLogic $logic;
    protected ScoreService $service;

    protected function setUp(): void
    {
        parent::setUp();

        $this->service = new ScoreService();
        $this->logic = new ScoreLogic($this->service);
    }

    public function test_submit_new_score()
    {
        $user = User::createNoSave([
            'name' => 'test',
            'email' => 'test@aaaa.com',
        ]);

        //$user->save();
        $score = $this->service->submitScore($user, 100);
        $this->assertEquals(1000, $score['score']);
        $this->assertDatabaseHas('scores', [
            'user_id' => $user->id,
            'score'   => 500,
        ]);
    }
}

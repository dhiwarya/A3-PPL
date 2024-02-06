<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Counter;

class CounterTest extends TestCase
{
    use RefreshDatabase;

    public function testIncrement()
    {
        $response = $this->get('/increment');
        $counter = Counter::first();
        $this->assertEquals(1, $counter->value);
    }

    public function testDecrement()
    {
        // Assuming the counter starts at 1
        Counter::create(['value' => 1]);
        $response = $this->get('/decrement');
        $counter = Counter::first();
        $this->assertEquals(0, $counter->value);
    }
}

<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
    
    /** @test */
    public function it_can_add_two_numbers()
    {
        $a = 5;
        $b = 10;
        $result = $a + $b;

        $this->assertEquals(15, $result);
    }


}

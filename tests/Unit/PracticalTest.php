<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use practicals\practical; // Include the Practical class properly

require(__DIR__ . '/../../practicals/practical.php');

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(practical::add(1, 3), 4);
    }
    public function testAddNumeric(): void
    {
     $this->expectsException(\InvalidArguementException::class);

     practical::add('abc', 'xyz');
    }  
}


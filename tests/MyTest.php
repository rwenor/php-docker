<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
  public function testMyTestFails(): void
  {
    self::assertTrue(false);
  }
  public function testMyTestPases(): void
  {
    self::assertFalse(false);
  }
}
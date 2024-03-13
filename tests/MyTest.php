<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use ThePHPWebsite\App;

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

  public function testMyApp(): void
  {
    $app = new App();

    self::assertEquals("Hello World!", $app->sayHello());
  }
}
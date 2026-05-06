<?php
declare(strict_types=1);


namespace CVTrustTest\DockerFiles;

use PHPUnit\Framework\Attributes\Test;

class PhpTest extends TestCase
{
    /**
     * Can show the php version
     *
     */
    #[Test]
     public function it_can_show_the_php_version(): void
     {
        self::assertNotEmpty(phpversion());
     }
}

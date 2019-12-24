<?php
declare(strict_types=1);


namespace CVTrustTest\DockerFiles;

class PhpTest extends TestCase
{
    /**
     * Can show the php version
     *
     * @test
     */
     public function it_can_show_the_php_version(): void
     {
        self::assertNotEmpty(phpversion());
     }
}

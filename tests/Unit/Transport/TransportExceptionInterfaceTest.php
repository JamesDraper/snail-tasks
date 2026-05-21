<?php
declare(strict_types=1);

namespace Tests\Unit\Transport;

use SnailTasks\Transport\TransportExceptionInterface;
use SnailTasks\ExceptionInterface;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

use function is_subclass_of;

final class TransportExceptionInterfaceTest extends TestCase
{
    #[Test]
    public function it_implements_the_exception_interface(): void
    {
        $this->assertTrue(is_subclass_of(
            TransportExceptionInterface::class,
            ExceptionInterface::class,
        ));
    }
}

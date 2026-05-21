<?php
declare(strict_types=1);

namespace Tests\Unit;

use SnailTasks\SerializationExceptionInterface;
use SnailTasks\ExceptionInterface;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

use function is_subclass_of;

final class SerializationExceptionInterfaceTest extends TestCase
{
    #[Test]
    public function it_implements_the_exception_interface(): void
    {
        $this->assertTrue(is_subclass_of(
            SerializationExceptionInterface::class,
            ExceptionInterface::class,
        ));
    }
}

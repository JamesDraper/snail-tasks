<?php
declare(strict_types=1);

namespace SnailTasks;

interface TaskInterface
{
    /**
     * @throws SerializationExceptionInterface
     */
    public static function unserialize($serialized): static;

    /**
     * @throws SerializationExceptionInterface
     */
    public function serialize(): string;

    public function run(): void;
}

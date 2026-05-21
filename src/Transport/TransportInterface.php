<?php
declare(strict_types=1);

namespace SnailTasks\Transport;

interface TransportInterface
{
    public function push(string $channel, string $serialized): void;

    public function pull(string $channel): ?string;
}

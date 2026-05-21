<?php
declare(strict_types=1);

namespace SnailTasks;

final class Configuration
{
    public function __construct(
        public readonly TransportInterface $transport,
        public readonly string $endSignalPath,
    ) {
    }
}

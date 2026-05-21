<?php
declare(strict_types=1);

namespace SnailTasks\Internal\Commands;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Command\Command;

final class StopCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('stop')
            ->setDescription('Stops all task runner queues.')
            ->setHelp('This command stops all task runner queues.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        //

        return self::SUCCESS;
    }
}

<?php
declare(strict_types=1);

namespace SnailTasks\Internal\Commands;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Command\Command;

final class StartCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->setName('start')
            ->setDescription('Starts a task runner queue.')
            ->setHelp('This command starts a task runner queue.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        //

        return self::SUCCESS;
    }
}

<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SecondExample extends Command
{
    protected function configure(): void
    {
       $this
            ->setName('second')
            ->setDescription('show second command')
            ->addArgument('message', InputArgument::REQUIRED, 'some message')
            ->addOption('times', 'i',  InputOption::VALUE_REQUIRED, 'how much times will show message', 2)
       ;
    }
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        for ($i = 0; $i < $input->getOption('times'); $i++) {
            $output->writeln($input->getArgument('message'));
        }        
        return Command::SUCCESS;
    }
}


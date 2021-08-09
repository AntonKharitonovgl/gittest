<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FirstExample extends Command
{
    protected function configure(): void
    {
       $this
            ->setName('first')
            ->setDescription('show first command')
            ->addArgument('message', InputArgument::REQUIRED, 'some message') 
       ;
    } 
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
       $output->writeln('Привет, ваше сообщение: ' . $input->getArgument('message') . '!');
       return Command::SUCCESS;
    }
}

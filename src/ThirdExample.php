<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class ThirdExample extends Command
{
    protected function configure(): void
    { 
        $this
            ->setName('third')
            ->setDescription('show third command')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');
        $question = new Question('Please enter the name', 'AcmeDemoBundle');
        $name = $helper->ask($input, $output, $question);
        $question = new Question('Please enter the age', 'AcmeDemoBundle');
        $age = $helper->ask($input, $output, $question);
        $question = new ChoiceQuestion('Please select your sex (defaults to male)', ['male', 'female'], 0);
        $question->setErrorMessage('Sex %s is invalid.');
        $sex = $helper->ask($input, $output, $question);
        $output->writeln('Привет '. $name . ', ваш возраст: ' . $age . ', ваш пол: ' . $sex);
        return Command::SUCCESS;
    }
}

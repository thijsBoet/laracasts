<?php namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;

class RenderCommand extends Command{
  
  public function configure()
  {
    $this->setName('render')
         ->setDescription('Render some tabular data.');
  }

  public function execute(InputInterface $input, OutputInterface $output)
  {
    $table = new Table($output);

    $table->setHeaders(['Name', 'Age'])
          ->setRows([
            ['John Doe', 30],
            ['Jane Doe', 50],
            ['Matthijs Boet', 38],
            ['Marja Boet', 66]
          ])
          ->render();
  }
}
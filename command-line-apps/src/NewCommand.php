<?php namespace Acme;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use GuzzleHttp\ClientInterface;
use ZipArchive;

class NewCommand extends Command{

  private $client;

  public function __construct(ClientInterface $client) {
    $this->client = $client;

    parent::__construct();
  }
  
  public function configure()
  {
    $this->setName('new')
         ->setDescription('Create a new Laravel application.')
         ->addArgument('name', InputArgument::REQUIRED);
  }

  public function execute(InputInterface $input, OutputInterface $output)
  {
    $directory = getcwd() . '/' . $input->getArgument('name');

    $output->writeln('<info>Crafting application...</info>');

    $this->assertApplicationDoesNotExist($directory, $output);

    $this->download($zipfile = $this->makeFileName())
         ->extract($zipfile, $directory)
         ->cleanUp($zipfile);

         $output->writeln("<comment>Laravel Application ready!\nLet's build something awesome!</comment>");
  }

  private function assertApplicationDoesNotExist($directory, OutputInterface $output)
  {
    if(is_dir($directory))
    {
      $output->writeln('<error>Application already exists!</error>');

      exit(1);
    }
  }

  private function makeFileName()
  {
    return getcwd() . '/laravel_' . md5(time().uniqid()) . '.zip';
  }

  private function download($zipfile)
  {
    $response = $this->client->get('http://cabinet.laravel.com/latest.zip')->getBody();

    file_put_contents($zipfile, $response);

    return $this;
  }

  private function extract($zipfile, $directory)
  {
    $archive = new ZipArchive;

    $archive->open($zipfile);

    $archive->extractTo($directory);
    $archive->close();

    return $this;
  }

  private function cleanUp($zipfile)
  {
    @chmod($zipfile, 0777);
    @unlink($zipfile);

    return $this;
  }
}
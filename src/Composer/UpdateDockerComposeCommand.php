<?php

/**
 * @file
 * Contains geerlingguy\DrupalVmDocker\Composer\UpdateDockerComposeCommand.
 */

namespace geerlingguy\DrupalVmDocker\Composer;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Command\BaseCommand;
use geerlingguy\DrupalVmDocker\Composer\Plugin;

class UpdateDockerComposeCommand extends BaseCommand {
    protected function configure() {
        $this->setName('drupal-vm-docker-compose-update');
        $this->setDescription('Update the docker-compose.yml file for your Drupal project.');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        Plugin->addDockerCompose();
        $output->writeln('Updated the Drupal VM Docker Compose file.');
        $output->writeln('Please run `docker-compose up -d` to apply any changes.');
    }
}

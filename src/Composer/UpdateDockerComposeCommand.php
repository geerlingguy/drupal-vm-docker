<?php

/**
 * @file
 * Contains geerlingguy\DrupalVmDocker\Composer\UpdateDockerComposeCommand.
 */

namespace geerlingguy\DrupalVmDocker\Composer;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Command\BaseCommand;
use Composer\Factory;

class UpdateDockerComposeCommand extends BaseCommand {
    protected function configure() {
        $this->setName('drupal-vm-docker-update');
        $this->setDescription('Update the docker-compose.yml file for your Drupal project.');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->updateDockerCompose();
        $output->writeln('Updated the Drupal VM Docker Compose file.');
        $output->writeln('Please run `docker-compose up -d` to apply any changes.');
    }

    /**
     * Update project Docker Compose file.
     */
    public function updateDockerCompose() {
        $baseDir = dirname(Factory::getComposerFile());
        $source = __DIR__ . '/../../docker-compose.yml';
        $target =  $baseDir . '/docker-compose.yml';

        if (file_exists($source)) {
            if (!file_exists($target) || md5_file($source) != md5_file($target)) {
                copy($source, $target);
            }
        }
    }
}

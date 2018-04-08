<?php

/**
 * @file
 * Contains geerlingguy\Composer|DrupalVmDocker.
 */

namespace geerlingguy\Composer;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Factory;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;


class DrupalVmDocker implements PluginInterface, EventSubscriberInterface {
    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io) {
        $this->composer = $composer;
        $this->io = $io;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents() {
        return array(
            ScriptEvents::POST_INSTALL_CMD => 'addDockerCompose',
            ScriptEvents::POST_UPDATE_CMD => 'addDockerCompose',
        );
    }

    /**
     * Add/update project Docker Compose file.
     *
     * @param \Composer\Script\Event $event
     */
    public function addDockerCompose(Event $event) {
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

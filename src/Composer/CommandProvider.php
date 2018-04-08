<?php

/**
 * @file
 * Contains geerlingguy\DrupalVmDocker\Composer\CommandProvider.
 */

namespace geerlingguy\DrupalVmDocker\Composer;

use Composer\Plugin\Capability\CommandProvider as CommandProviderCapability;

class CommandProvider implements CommandProviderCapability {
    public function getCommands() {
        return array(new UpdateDockerComposeCommand());
    }
}

# Drupal VM Docker Composer Plugin

[![Packagist](https://img.shields.io/packagist/v/geerlingguy/drupal-vm-docker.svg)](https://packagist.org/packages/geerlingguy/drupal-vm-docker) [![Docker Automated build](https://img.shields.io/docker/automated/geerlingguy/drupal-vm.svg?maxAge=2592000)](https://hub.docker.com/r/geerlingguy/drupal-vm/) [![](https://images.microbadger.com/badges/image/geerlingguy/drupal-vm.svg)](https://microbadger.com/images/geerlingguy/drupal-vm "Get your own image badge on microbadger.com") [![irc://irc.freenode.net/drupal-vm](https://img.shields.io/badge/irc.freenode.net-%23drupal--vm-brightgreen.svg)](https://riot.im/app/#/room/#drupal-vm:matrix.org)

**The quickest way to add a local development environment to your Drupal project!**

Get started:

    composer require --dev geerlingguy/drupal-vm-docker

Run this command inside the directory of a Drupal project that is built using Composer, and it will create a Docker Compose file which will run a local instance of Drupal VM.

Make sure you have [Docker CE](https://store.docker.com/search?type=edition&offering=community) installed and running, then run `docker-compose up -d`. After a minute or two, you should be able to access your Drupal site at `http://localhost/`.

> To install Drupal, the default Drupal VM database name, username, and password are all `drupal`.

## Shutting down the environment

When you're finished developing, run the command:

    docker-compose stop

And once you're ready to develop again, run:

    docker-compose start

If you want to completely clear out the local environment (e.g. to start over or if you're finished with a project), run:

    docker-compose down

## Updating the Docker Compose file

The Docker Compose file should be updated automatically any time you update to a newer version of this plugin. However, you can also manually force the file to be updated by running:

    composer drupal-vm-docker-update

You should then tell Docker to restart anything that needs to be restarted with `docker-compose up -d`.

## License

This project is licensed under the MIT open source license.

## About the Author

[Jeff Geerling](https://www.jeffgeerling.com/) created the Drupal VM Docker Composer Plugin in 2018 for a more efficient Drupal site and core/contrib development workflow.

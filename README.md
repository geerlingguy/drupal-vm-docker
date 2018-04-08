# Drupal VM Docker Composer Plugin

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

    composer drupal-vm-docker-compose-update

You should then tell Docker to restart anything that needs to be restarted with `docker-compose up -d`.

## License

This project is licensed under the MIT open source license.

## About the Author

[Jeff Geerling](https://www.jeffgeerling.com/) created the Drupal VM Docker Composer Plugin in 2018 for a more efficient Drupal site and core/contrib development workflow.

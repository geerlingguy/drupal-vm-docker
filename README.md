# Drupal VM Docker Composer Plugin

**The quickest way to add a local development environment to your Drupal project!**

Get started:

    composer require --dev geerlingguy/drupal-vm-docker

Run this command inside the directory of a Drupal project that is built using Composer, and it will create a Docker Compose file which will run a local instance of Drupal VM.

Make sure you have [Docker CE](https://store.docker.com/search?type=edition&offering=community) installed, then run `docker-compose up -d`. After a minute or two, you should be able to access your Drupal site at `http://localhost/`.

## License

This project is licensed under the MIT open source license.

## About the Author

[Jeff Geerling](https://www.jeffgeerling.com/) created the Drupal VM Docker Composer Plugin in 2018 for a more efficient Drupal site and core/contrib development workflow.

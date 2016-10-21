# PAPP

PHP Application base using slim 3 configured in a MVC setup with dependency management, routing, controllers, models, services and views. Allows you to create a simple PHP based web application with basic authentication using cookies, login page, landing pages for public and restricted. Connect to a DB to get a basic system going from scratch.

Offers a nice simple small base to start building your web application in one fo the smallest frameworks around, supplying you with a basic structure based around MVC with models, views, controllers, middleware and services.

__Controllers/:__ Your starting point as a developer, your endpoint as matched to your URL path (configured in routes).

__Middleware/:__ Injected as a dependency, alter all/some/one incomming or outgoing requests, with one piece of middleware pushing its output onto the next in the stack.

__Models/:__ Your data abstraction layer, abstracting data access from a data source beit DB or service or something else.

__Services/:__ Injected as a dependency, services provide access to other functionality such as hitting an api, performing a generic task, things we can reuse maybe.

__Views/:__ Yout output to your user/client, html as php files using short tags for inline templating (and extended to allow partial view embedding inside views for reusable views as components).

__Application.php:__ The starting point for your application, if you want to configure things you can do them at dep injection or here.

__Dependencies.php:__ Inject all dependencies here such as middleware, services, then call them via slims DI container.

__Routes.php:__ All your routes, grouped into nice sub routes etc, this patches endpoints through to controller::method.


## Running

Clone PAPP and install dependencies via composer.

```bash
git clone https://github.com/ulsmith/papp.git
composer install
```

PAPP runs on docker `ulsmith/alpine-apache-php7`, so you will need to create your own docker-compose.yml file (or run docker command directly) to build and run PAPP (recommended). PAPP builds on top of the base image to provide composer and teh basic structure ofr a web application. You are free to use this in any way you feel fit, but docker is the future and is the simplest way to get going, so if yo do not have docker installed, I suggest installing docker and docker-compose now, otherwise feel free to use another server prefereably with PHP7 and basic extensions added at the ver least.

Once you have altered your docker-compose.yml file to suit your needs, you can fire up the container.

```bash
# basic command to build image (if none), create container (if none) and start container
docker-compose up

# above and return to command line
docker-compose up -d

# basic command to stop container
docker-compose stop

# basic command to stop container, delete container and any docker networks
docker-compose down
```


### Updating After Changes to composer.json


If you notice a change in your composer.json file after a pull from github, you will need to update your vendor files to update/add/remove any new 3rd party tools, as we do not add vendor files ot the repo.


```bash
composer update
```

This should update your vender files rebuild your composer.lock file based on the new composer.json changes.


## Testing

To test PAPP either install php unit globally and run phpunit from the papp root, or just run phpunit function inside the running container.


```bash
# get containers > docker ps
docker exec <container id> ./vendor/bin/phpunit

# or run locally from papp root (requires phpunit and php-cli and php-xdebug installed)
phpunit
```

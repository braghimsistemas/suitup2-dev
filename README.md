# Suitup 2 Development Environment

This is the recommended environment to develop Suitup and its components.

## Install

`$ git clone git@github.com:braghimsistemas/suitup2-dev.git`

`$ cd suitup2-dev/`

`$ sudo apt-get update`

`$ sudo apt-get install php php-xml php-mbstring`

`$ php composer.phar self-update`

`$ php composer.phar install`

### The Suitup source code is at

`$ cd vendor/braghim-sistemas/suitup-php/`

Everything edited here will be available to be commited to production.
Please don't try to push direct on `master` branch, create a new branch
and make a pull request instead.
